import Navbar from "./js/Navbar";
import Content from "./js/Content";
import { useState } from "react";

export default function App(){
    const [typeContent,setTypeContent] = useState('personal_data'); //personal_data, favorites, address, pay, order

    return(
        <div className="content-container">
            <Navbar type={typeContent} setType={setTypeContent}/>
            <Content type={typeContent} setType={setTypeContent}/>
        </div>
    )
}

