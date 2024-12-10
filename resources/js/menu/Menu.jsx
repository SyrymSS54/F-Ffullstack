import { useState } from "react";
import Navbar from "./Navbar";
import Rolls from "./Rolls";
import Pizza from "./Pizza";
import Wok from "./Wok";
import Burger from "./Burger";
import Soda from "./Soda";

export default function Menu()
{
    const [menuState,setMenuState] = useState('rolls') //rolls   pizza  wok burger soda

    return(
        <div className="content">
            <Navbar setParentState={setMenuState} parentState={menuState}/>
            {
                menuState == 'rolls' ? <Rolls/> : 
                menuState == 'pizza' ? <Pizza/> :
                menuState == 'wok' ? <Wok/> :
                menuState == 'burger' ? <Burger/> :
                menuState == 'soda' ? <Soda/> : ''
            }
        </div>
    )
}