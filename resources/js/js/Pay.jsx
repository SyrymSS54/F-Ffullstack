export default function Pay(){
    return(
        <div className={"pay-container"} method="post">
            <form className="comments-container">
                <div className="title">Оставить отзыв</div>
                <div className="rating-container"><label>Ваша оценка </label><img src="/storage/star-line.svg"/><img src="/storage/star-line.svg"/><img src="/storage/star-line.svg"/><img src="/storage/star-line.svg"/><img src="/storage/star-line.svg"/></div>
                <input className="comment-input" placeholder="Напишите Ваш отзыв"/>
                <input className="order-input" placeholder="Номер заказа"/>
                <input className="name-input" placeholder="Ваше имя и фамилия"/>
                <div className="input-file">Прикрепить фото<img src="/storage/attachment-2.svg"/></div>
                <input className="submit" type="submit" defaultValue={'Оставить отзыв'}/>
            </form>
        </div>
    )
}