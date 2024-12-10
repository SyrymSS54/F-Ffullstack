import { useEffect, useState } from "react";
import PersonalData from "./PersonalData";
import Favorites from "./Favorites";
import Address from "./Address";
import Pay from "./Pay";
import Order from "./Order";

export default function Content({type, setType}){
    const [personalData,setPersonalData] = useState({first_name:'',last_name:'',email:'',tel:''})

    const getPerData = async() => {
        const data = await  fetch("/personal", {
            method: "POST",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            }
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

        setPersonalData(data);
    }

    useEffect(()=>{getPerData()},[])

    return(
        <div className="content">{
            type == "personal_data" ? <PersonalData account={personalData} setAccount={setPersonalData}/> :
            type == "favorites" ? <Favorites/>:
            type == "address" ? <Address/>:
            type == "pay" ? <Pay/>:
            type == "order" ? <Order/>:
            ''
        }</div>
    )
}