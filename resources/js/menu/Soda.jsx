import { useEffect, useState } from "react"

export default function Soda()
{
  const [dishLists,setDishLists] = useState([])
    const [authState,setAuthState] = useState(false)
    const [carts,setCarts] = useState([])

    const getDish = async() => {
        const menu = await  fetch("/menu?tag=soda", {
            method: "GET",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
          })
          .then(response => {
            return response.json();
          })
          .then(data => {
            console.log(data)
            return data; 
          })
          .catch(error => {
            console.error('Error:', error); 
          })

          const data = await  fetch("/checkauth", {
            method: "GET",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
          })
          .then(response => {
            return response.json();
          })
          .then(data => {
            console.log(data)
            return data; 
          })
          .catch(error => {
            console.error('Error:', error); 
          })

        const cart = await  fetch("/carts", {
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
        })
        .then(response => {
          return response.json();
        })
        .then(data => {
          return data; 
        })
        .catch(error => {
          console.error('Error:', error); 
        })


        setCarts(cart)
        setAuthState(data['status_check'])

        setDishLists(menu.map(dish => {
          const match = cart.find(cart_item => dish.id == cart_item.dish_id);
          return match ? {...dish,...match} : dish
        }))
    }

    useEffect(()=>{getDish()},[])

    const CartCreate = async(sid) => {
      if(authState){
      const data = await  fetch("/cart/create", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body:JSON.stringify({id:sid})
      })
      .then(response => {
        return response.json();
      })
      .then(data => {
        console.log(data)
        return data; 
      })
      .catch(error => {
        console.error('Error:', error); 
      })
      getDish()}
      else{
        document.location = "/signin"
      }
    }
    const UpCart = async(sid) => {
      console.log(sid)
      if(authState){
        let body = JSON.stringify({id:sid})

        const data = await  fetch("/cart/up", {
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          body:JSON.stringify({id:sid})
        })
        .then(response => {
          return response.json();
        })
        .then(data => {
          console.log(data)
          return data; 
        })
        .catch(error => {
          console.error('Error:', error); 
        })
        getDish()}
        else{
          document.location = "/signin"
        }
    }
    const DownCart = async(sid) => {
      if(authState){
        const data = await  fetch("/cart/down", {
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          body:JSON.stringify({id:sid})
        })
        .then(response => {
          return response.json();
        })
        .then(data => {
          console.log(data)
          return data; 
        })
        .catch(error => {
          console.error('Error:', error); 
        })
        getDish()}
        else{
          document.location = "/signin"
        }
    }

    return(
        <div className="menu-container">
            <div className="dish-title">Напитки</div>
            <div className="img-title"><div className="pizza"><img src="http://127.0.0.1:8000/storage/main.svg"/></div></div>
            <div className="flex-dish">
                {
                    dishLists.map((dish,index)=>
                    <div className="dish" key={index}>
                        <img src={"/storage/menu/soda/" + dish.image}></img>
                        <div className="dish-title">{dish.name}</div>
                        <div className="dish-description">{dish.description}</div>
                        <div className="count-action">
                            <div className="price">{dish.price}тг</div>
                            {/* <button className="cart">В Корзину</button> */}
                            {
                              dish.count === undefined ? <button className="cart" onClick={()=>{CartCreate(dish.id)}}>В Корзину</button>: <div><button className="cart" onClick={()=>{UpCart(dish.dish_id)}}>+ </button> {dish.count} <button className="cart" onClick={()=>{DownCart(dish.dish_id)}}>-</button></div>
                            }
                        </div>
                    </div>
                    )
                }
            </div>
        </div>
    )
}