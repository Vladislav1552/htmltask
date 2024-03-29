<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <script src="js/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href='css/index.css'>
    <link rel="stylesheet" type="text/css" href='css//logo/logo.css'>
    <link rel="stylesheet" type="text/css" href='css/navigation/navigation.css'>
    <link rel="stylesheet" type="text/css" href='css/goods/goods.css'>
    <link rel="stylesheet" type="text/css" href='css/select/select.css'>
    <script type="text/javascript" src='js/index.js'></script>
    </script>

</head>

<body>

    <div class="testTask">
        <header class="testTask__header ">
            <div class="logo">
                <div class="logo__info">
                    <div class="logo__menu">
                        <div class="logo__menu-item"></div>
                        <div class="logo__menu-item"></div>
                        <div class="logo__menu-item"></div>
                    </div>
                    <span class="logo__logo">ЛОГОТИП</span>
                    <a class="logo__contact" href='tel:88007775050'>8 800 777 50 50</a>
                    <div class="logo__search">
                        <div class="lens"></div>
                        <input placeholder="поиск товаров">
                    </div>
                    <div class="logo__basket">
                        <div class="lens lens--logo"></div>
                        <div class="basket basket--white"></div>
                    </div>
                    <span class="logo__pay">Доставка и оплата</span>
                </div>
                <nav class="navigation  navigation--Burger">
                    <div ><a href="" class="navigation__item">МОБИЛЬНЫЕ ТЕЛЕФОНЫ</a></div>
                    <div><a href="" class="navigation__item">ПЛАНШЕТЫ</a></div>
                    <div ><a href="" class="navigation__item">ФОТОТЕХНИКА</a></div>
                   <div > <a href="" class="navigation__item">НОУТБУКИ</a></div>
                   <div > <a href="" class="navigation__item">ТЕЛЕВИЗОРЫ</a></div>
                </nav>
                <div class="logo__navigation">
                    <div class="logo__openCatalog">Поиск товаров</div>

                    <nav class="navigation navigation--logo">
                        <a href="" class="navigation__item">МОБИЛЬНЫЕ ТЕЛЕФОНЫ</a>
                        <a href="" class="navigation__item">ПЛАНШЕТЫ</a>
                        <a href="" class="navigation__item">ФОТОТЕХНИКА</a>
                        <a href="" class="navigation__item">НОУТБУКИ</a>
                        <a href="" class="navigation__item">ТЕЛЕВИЗОРЫ</a>
                    </nav>
                    <div class="logo__basket">
                        <div class="basket basket--white"></div>
                        <span>КОРЗИНА</span>
                    </div>
                </div>
            </div>
        </header>
        <section class="testTask__choice">
            <span> ФОТОТЕХНИКА</span>
            <div class="switch testTask__switch"></div>
        </section>
        <section class="selectForm">
            <select class="selectForm__logo">
                <option value="">Любого логотипа</option>
                <option value="">Select your option</option>
                <option value="">Select your option</option>
                <option value="">Select your option</option>
            </select>
            <select class="selectForm__logo">
                <option value="">Любого бренда</option>
                <option value="">Select your option</option>
                <option value="">Select your option</option>
                <option value="">Select your option</option>
            </select>
            <div class="selectForm__priceRange">
                <span>По цене</span>
                <input placeholder="от">
                <input placeholder="до">
                <span>Рублей</span>
            </div>
        </section>
        <section class="testTask__goods">
            <div class="goods goods--action">
                <img src="image/goods/photo.png" class="goods__logo goods__logo--action">
                <div class="goods_action-about">
                    <span class="goods__model">Canon EOS 5D Mark III Body</span>
                    <span class="goods__description">Полнокадровая цифровая зеркальная камера. предназначенная для опытных любителей, профессиональных фотографов
                        и видеооператоров. Преемник успешной модели ЕОБ 50 Магк п. Фотоаппарат имеет 22.3 Мп. СМОЗ-сенсор
                        размером 36 х 24 мм, 14-битный процессор 0|6|С 5+‚ 61-точечный автофокус.</span>
                    <span class="goods__price goods__price--action">4 400,00 руб.</span>
                    <div class="goods__pay goods__pay--action">
                        <span class="goods__price">3 200,00 руб.</span>
                        <div class="basket  basket--red"></div>
                    </div>
                </div>

            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
            <div class="goods">
                <img src="image/goods/photo.png" class="goods__logo">
                <span class="goods__model">Canon EOS 5D Mark III Body</span>
                <span class="goods__description">Полнокадровая цифровая зеркальная камера,предназначенная для опытных любителей.</span>
                <div class="goods__pay">
                    <span class="goods__price">3 200,00 руб.</span>
                    <div class="basket basket--blue"></div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
