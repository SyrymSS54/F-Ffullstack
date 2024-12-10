<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        $data = [
            [
                'name' => 'Elige pizza',
                'description' => ' Классика итальянской кухни. Тонкое тесто, ароматный томатный соус, свежий базилик и расплавленный сыр моцарелла создают идеальное сочетание вкусов',
                'image' => '68ec6c84f72e01b73f197252120559bb.jpeg',
                'price' => 3150,
                'tag' => 'pizza'
            ],
            [
                'name' => 'Jl pizza',
                'description' => 'Вдохновение пастой. Сливочный соус, кусочки бекона, пармезан и ароматные травы.',
                'image' => 'Jl pizza.jpeg',
                'price' => 2950,
                'tag' => 'pizza'
            ],
            [
                'name' => 'S1mple pizza',
                'description' => 'Настоящий праздник для любителей сыра. Пармезан, горгонзола, моцарелла и эдам создают богатую и сливочную палитру вкусов.',
                'image' => 'S1mple pizza.jpeg',
                'price' => 2550,
                'tag' => 'pizza'
            ],
            [
                'name' => 'Fallen pizza',
                'description' => 'Экзотика на тарелке! Комбинация сладкого ананаса, нежной ветчины и мягкого сыра, которая удивляет своей гармоничностью',
                'image' => 'Fallen pizza.jpeg',
                'price' => 3450,
                'tag' => 'pizza'
            ],
            [
                'name' => 'iwni pizza',
                'description' => 'Для тех, кто любит поострее. Острая салями, перец чили, халапеньо и томатный соус с лёгким оттенком пряностей.',
                'image' => 'iwni pizza.jpeg',
                'price' => 3350,
                'tag' => 'pizza'
            ],
            [
                'name' => 'Aleksib pizza',
                'description' => 'Острота и насыщенность в каждой дольке! Сочная колбаса пепперони, растопленный сыр и насыщенный томатный соус на тонкой корочке',
                'image' => 'Aleksib pizza.jpeg',
                'price' => 3150,
                'tag' => 'pizza'
            ],
            [
                'name' => 'Versal',
                'description' => 'Ролл со свежим лососем и сливочным сыром внутри, полностью обернутый лентой свежего лосося и украшен',
                'image' => 'Versal .jpeg',
                'price' => 2250,
                'tag' => 'rolls'
            ],
            [
                'name' => 'Vindetta',
                'description' => 'Яркие и сочные роллы с крабовым мясом или сурими, авокадо, огурцом и икрой тобико, завёрнутые в нежный рис',
                'image' => 'Vindetta.jpeg',
                'price' => 2450,
                'tag' => 'rolls'
            ],
            [
                'name' => 'Canada',
                'description' => 'Бесконечно нежный ролл без нори. Опалённый лосось, авокадо, сливочный сыр и специи шичими',
                'image' => 'Canada.jpeg',
                'price' => 1890,
                'tag' => 'rolls'
            ],
            [
                'name' => 'Bishkek',
                'description' => 'Эффектные роллы с угрём, авокадо, огурцом и икрой. Украшаются ломтиками угря для насыщенного вкуса',
                'image' => 'Bishkek.jpeg',
                'price' => 2350,
                'tag' => 'rolls'
            ],
            [
                'name' => 'Samarkand',
                'description' => 'Утончённый вкус угря в сочетании с рисом, нори и соусом унаги, который добавляет карамельные нотки',
                'image' => 'Samarkand.jpeg',
                'price' => 2950,
                'tag' => 'rolls'
            ],
            [
                'name' => 'Astana',
                'description' => 'Маленькие шедевры из риса, обёрнутые нори и наполненные красной икрой, тобико или морским гребешком',
                'image' => 'Astana.jpeg',
                'price' => 3150,
                'tag' => 'rolls'
            ],
            [
                'name' => 'Zywoo burger',
                'description' => 'Лёгкая альтернатива. Котлета из нута, шпината и овощей с хумусом, салатом и ломтиком томата',
                'image' => 'Zywoo burger.jpeg',
                'price' => 2550,
                'tag' => 'burger'
            ],
            [
                'name' => 'SpinX burger',
                'description' => ' Хрустящая рыбная котлета, свежий салат, соус тартар и ломтик лимона в пышной булочке.',
                'image' => 'SpinX burger.jpeg',
                'price' => 2950,
                'tag' => 'burger'
            ],
            [
                'name' => 'Smile burger',
                'description' => 'Двойное удовольствие! Две говяжьи котлеты, двойной сыр, маринованные огурцы и фирменный соус',
                'image' => 'Smile burger.jpeg',
                'price' => 2550,
                'tag' => 'burger'
            ],
            [
                'name' => 'Fear burger',
                'description' => 'Нежная куриная котлета с салатом айсберг, ломтиком сыра и лёгким чесночным соусом.',
                'image' => 'Fear burger.jpeg',
                'price' => 2250,
                'tag' => 'burger'
            ],
            [
                'name' => 'Magixx burger',
                'description' => 'Для любителей жгучих ощущений. Говяжья котлета, острый соус, перец халапеньо, сыр и свежие овощи',
                'image' => 'Magixx burger.jpeg',
                'price' => 2150,
                'tag' => 'burger'
            ],
            [
                'name' => 'Chopper burger',
                'description' => 'Для настоящих гурманов. Сочная котлета, ломтики обжаренного бекона, сыр, соус BBQ и свежие овощи',
                'image' => 'Chopper burger.jpeg',
                'price' => 2450,
                'tag' => 'burger'
            ],
            [
                'name' => 'Jame wok',
                'description' => 'Сочная курица, обжаренная с овощами, в сладковатом соусе терияки, подаётся с лапшой или рисом',
                'image' => 'Jame wok.jpeg',
                'price' => 3150,
                'tag' => 'wok'
            ],
            [
                'name' => 'FlameZ wok',
                'description' => 'Рисовая лапша с курицей, яйцом, ростками фасоли и орехами в сладко-пряном соусе.',
                'image' => 'FlameZ wok.jpeg ',
                'price' => 2950,
                'tag' => 'wok'
            ],
            [
                'name' => 'Monesy wok',
                'description' => 'Тонкие ломтики говядины с брокколи, морковью и болгарским перцем, приготовленные в ароматном устричном соусе.',
                'image' => 'Monesy wok.jpeg',
                'price' => 2550,
                'tag' => 'wok'
            ],
            [
                'name' => 'FLamus wok',
                'description' => 'Сочетание тигровых креветок, хрустящих овощей и лапши в лёгком соевом соусе с кунжутным маслом',
                'image' => 'FLamus wok.jpeg',
                'price' => 3450,
                'tag' => 'wok'
            ],
            [
                'name' => 'Zontix wok',
                'description' => 'Гречневая лапша соба с креветками, кальмарами, овощами и лёгким цитрусовым соусом.',
                'image' => 'Zontix wok.jpeg',
                'price' => 3350,
                'tag' => 'wok'
            ],
            [
                'name' => 'Maden wok',
                'description' => 'Ароматная утка, тонкая рисовая лапша, овощи и соус Хойсин с лёгкой кислинкой.',
                'image' => 'Maden wok.jpeg',
                'price' => 3150,
                'tag' => 'wok'
            ]
            ];

            foreach($data as $dish){
                DB::table('dish_models')->insert([
                    'name' => $dish['name'],
                    'description' => $dish['description'],
                    'image' => $dish['image'],
                    'price' => $dish['price'],
                    'tag' => $dish['tag']
                ]);
            }
    }
}
