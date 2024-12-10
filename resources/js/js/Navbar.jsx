export default function Navbar({type, setType}){
    const handlePersonalDate= () => {
        setType('personal_data')
    }

    const handleFavorites = () => {
        setType('favorites')
    }

    const handleAddress = () => {
        setType('address')
    }

    const handlePay = () => {
        setType('pay')
    }

    const handleOrder = () => {
        setType('order')
    }

    return(
        <div className="header_second">
        <ul className="navbar_list">
          <li onClick={handlePersonalDate}>Личные данные</li>
          <li onClick={handleFavorites}>Избранные</li>
          <li onClick={handleAddress}>Адреса</li>
          <li onClick={handlePay}>Отзывы</li>
          <li onClick={handleOrder}>Мои заказы</li>
        </ul>
      </div>
    )
}
