import { useState } from "react"

export default function Favorites(){
    const [favoritesType,setFavitesType] = useState(0)

    const productClick = (e) => {
        favoritesType == 0 ? '': setFavitesType(0)
    }

    const orderClick = () => {
        favoritesType == 1 ? '': setFavitesType(1)
    }

    return(
        <div className={"favorites-container favorites-container-null"}>
            <div className="favorites-navbar">
                <div className={favoritesType == 0 ? 'active': ''} onClick={productClick}>Избранные продукты</div>
                <div className={favoritesType == 1 ? 'active': ''} onClick={orderClick}>Избранные заказы</div>
            </div>
            <div className="favorites-content">
                <div></div>
            </div>
        </div>
    )
}