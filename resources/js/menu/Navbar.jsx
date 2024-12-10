export default function Navbar({parentState,setParentState})
{
    const ClickRolls = (e) => {
        setParentState('rolls')
    }

    const ClickPizza = (e) => {
        setParentState('pizza')
    }

    const CLickWok = (e) => {
        setParentState('wok')
    }

    const ClickBurger = (e) => {
        setParentState('burger')
    }

    const ClickSoda = (e) => [
        setParentState('soda')
    ]

    return(
        <ul className="menu-navbar">
            <li onClick={(e)=>ClickRolls(e)}><a>Роллы</a></li>
            <li onClick={(e)=>ClickPizza(e)}><a>Пицца</a></li>
            <li onClick={(e)=>CLickWok(e)}><a>Вок</a></li>
            <li onClick={(e)=>ClickBurger(e)}><a>Бургер</a></li>
            <li onClick={(e)=>ClickSoda(e)}><a>Напитки</a></li>
        </ul>
    )
}