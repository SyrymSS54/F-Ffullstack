export default function PersonalData({account,setAccount}){
    const firstNameAccount = (e) => {
        let acc = account
        account.first_name = e.target.value
    }

    const lastNameAccount = (e) => {
        let acc = account
        account.last_name = e.target.value
    }

    const emailAccount = (e) => {
        let acc = account
        account.email = e.target.value
    }

    const telAccount = (e) => {
        let acc = account
        account.tel = e.target.value
    }

    const saveData = async() => {
        const data = await  fetch("/personal/update", {
            method: "POST",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
            body:JSON.stringify(account)
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
    }

    const ClickPhoto = () => {
        console.log('dvd')
        document.getElementById('input-photo').click();
    }

    const Changephoto = async(e) => {
        let formdata = new FormData();
        formdata.append('image',e.target.files[0])
        console.log(formdata)

        const data = await  fetch("/personal/photo", {
            method: "POST",
            headers: {
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
              
            },
            body:formdata
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

        // location.reload();
    }


    return(
        <div className="personaldata-container">
            <div className="photo-container">
                <img src={"/storage/personal/" + account.image}/>
                <button onClick={()=>{ClickPhoto()}}>ЗАГРУЗИТЬ ФОТО</button><input type="file" id="input-photo" onChange={(e)=>Changephoto(e)}/>
            </div>
            <div className="title">ИНФОРМАЦИЯ ОБ АККАУНТЕ</div>
            <form>
                <input className="first_name" id="first_name" placeholder="Имя" type="text" required defaultValue={account.first_name} onChange={firstNameAccount}/>
                <input className="last_name" id="last_name" placeholder="Фамилия " type="text" required defaultValue={account.last_name} onChange={lastNameAccount}/>
                <input className="email" id="email" placeholder="Адрес электронной почты" type="email" required defaultValue={account.email} onChange={emailAccount}/>
                <input className="tel" id="tel"  type="tel" required pattern="" defaultValue={account.tel} onChange={telAccount}/>
            </form>
            <button onClick={()=>saveData()}>СОХРАНИТЬ ИЗМЕНЕНИЯ</button>
        </div>
    )
}