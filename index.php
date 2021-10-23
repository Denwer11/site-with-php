<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    session_start();

    if (!isset($_SESSION["theme"])) {
        $_SESSION["theme"] = "master";
    }
    ?>
    <meta charset="utf-8" />
    <title>My Giro</title>
    <link rel="stylesheet" href="<?php echo $_SESSION["theme"]; ?>.css" id="theme-link" />
    <link rel="icon" href="logo2.ico" type="image/x-icon" />
</head>

<body>
    <header>
        <!-- Логотип -->
        <div class="logo">
            <img src="img/logo.png" alt="" class="logo-img" />
        </div>
        <!-- Кнопка смены темы -->
        <div class="theme-button" id="theme-button">Сменить тему</div>
        <!-- Телефон -->
        <div class="phone">
            <input type="image" src="img/call.jpg" alt="Позвонить" class="call" />
            <a href="#" class="number">+7 351 111 22 33</a>
        </div>
    </header>
    <!-- Кнопка возвращения наверх -->
    <a href="#" title="Вернуться к началу" class="topbutton">
        <img src="img/back.png" alt="" class="topbutton" />
    </a>
    <!-- блок слайдера -->
    <div class="carousel-wrapper">
        <span id="item-1"></span>
        <span id="item-2"></span>
        <span id="item-3"></span>
        <span id="item-4"></span>
        <!-- 1й элемент слайдера -->
        <div class="carousel-item item-1">
            <p class="slider">
                Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.
            </p>
            <a class="arrow arrow-prev" href="#item-4"></a>
            <a class="arrow arrow-next" href="#item-2"></a>
        </div>
        <!-- 2й элемент слайдера -->
        <div class="carousel-item item-2">
            <p class="slider">
                Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.
            </p>
            <a class="arrow arrow-prev" href="#item-1"></a>
            <a class="arrow arrow-next" href="#item-3"></a>
        </div>
        <!-- 3й элемент слайдера -->
        <div class="carousel-item item-3">
            <p class="slider">
                Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.
            </p>
            <a class="arrow arrow-prev" href="#item-2"></a>
            <a class="arrow arrow-next" href="#item-4"></a>
        </div>
        <!-- 4й элемент слайдера -->
        <div class="carousel-item item-4">
            <p class="slider">Гарантия действует в течении 3 лет!</p>
            <a class="arrow arrow-prev" href="#item-3"></a>
            <a class="arrow arrow-next" href="#item-1"></a>
        </div>
    </div>
    <!-- Блок, содержащий особенности электросамокатов, гироскутеров и сигвеев -->
    <div class="wrapper">
        <div class="content">
            <div class="container">
                <div class="item">
                    <img src="img/elsam.png" alt="" class="example" />
                    <div class="item-text">
                        <h3 class="title">Электросамокат</h3>
                        <p class="item-p">
                            Cовременный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать
                            между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/gyro.png" alt="" class="example" />
                    <div class="item-text">
                        <h3 class="title">Гироскутер</h3>
                        <p class="item-p">
                            Представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку
                            для ног. Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками. Особенность управления гироскутером состоит
                            в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/seegway.png" alt="" class="example" />
                    <div class="item-text">
                        <h3 class="title">Сигвей</h3>
                        <p class="item-p">
                            Средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду,
                            работают на электрической энергии, накопленной батареей аккумуляторов.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Блок со списком товаров и фильтром -->
    <div class="products">
        <h2>Товары</h2>
        <div class="products-items">
            <!-- Фильтр -->
            <input type="radio" id="all" name="product" class="product" />
            <label for="all">Всё</label>
            <input type="radio" id="gyro" name="product" class="product" />
            <label for="gyro">Гироскутер</label>
            <input type="radio" id="seegway" name="product" class="product" />
            <label for="seegway">Сигвей</label>
            <input type="radio" id="elsam" name="product" class="product" />
            <label for="elsam">Электросамокат</label>
            <!-- Список товаров -->
            <div class="tile gyro">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov1.jpg" alt="" class="img-product" />
                    </div>
                    <div class="name-price1">
                        <h4>Smart Balance 6.5" Ver. 1</h4>
                        <div class="price">8990р.</div>
                    </div>
                </div>
            </div>
            <div class="tile gyro">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov2.jpg" alt="" class="img-product" />
                    </div>
                    <div class="name-price">
                        <h4>KIWANO KO-X ES03</h4>
                        <div class="price">18900р.</div>
                    </div>
                </div>
            </div>
            <div class="tile seegway">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov3.png" alt="" class="img-product" />
                    </div>
                    <div class="name-price">
                        <h4>Minirobot Mini PRO 36V</h4>
                        <div class="price">15990р.</div>
                    </div>
                </div>
            </div>
            <div class="tile seegway">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov4.jpg" alt="" class="img-product" />
                    </div>
                    <div class="name-price">
                        <h4>Xiaomi Ninebot Mini</h4>
                        <div class="price">22900р.</div>
                    </div>
                </div>
            </div>
            <div class="tile seegway">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov5.png" alt="" class="img-product" />
                    </div>
                    <div class="name-price">
                        <h4>Hili E+</h4>
                        <div class="price">39900.</div>
                    </div>
                </div>
            </div>
            <div class="tile elsam">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov6.png" alt="" class="img-product" />
                    </div>
                    <div class="name-price">
                        <h4>Yamato PES MINI</h4>
                        <div class="price">15900р.</div>
                    </div>
                </div>
            </div>
            <div class="tile elsam">
                <div class="item-product">
                    <div class="product-img">
                        <img src="img/tov7.jpg" alt="" class="img-product" />
                    </div>
                    <div class="name-price">
                        <h4>KUGOO S2 (Jilong)</h4>
                        <div class="price">14900р.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Блок с информацией о консультантах -->
    <div class="consultation">
        <h2 class="consultation-title">Наши консультанты:</h2>
        <div class="consultation-block">
            <ul class="consultation-ul">
                <li class="consultation-list">
                    <span class="consultation-name">Иванов Иван Иванович</span> – квалифицированный специалист сервисного центра My Giro.
                </li>
                <li class="consultation-list">
                    <span class="consultation-name">Пупкин Василий Васильевич</span> – старший консультант My Giro.
                </li>
                <li class="consultation-list">
                    <span class="consultation-name">Захаров Андрей Борисович</span> – менеджер-консультант My Giro.
                </li>
            </ul>
        </div>
    </div>
    <!-- Блок брендов -->
    <div class="brands">
        <h2 class="brands-title">Бренды</h2>
        <!-- Картинки брендов -->
        <div class="brands-pic">
            <div class="brands-pic-box">
                <img src="brand/br1.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br2.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br3.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br4.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br5.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br6.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br7.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br8.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br9.jpg" alt="" class="brands-pic-img" />
            </div>
            <div class="brands-pic-box">
                <img src="brand/br10.jpg" alt="" class="brands-pic-img" />
            </div>
        </div>
    </div>
    <!-- Блок с полезной информацией -->
    <div class="personal">
        <div class="personal-pic">
            <img src="img/personal.jpg" alt="" class="personal-img" />
        </div>
        <div class="personal-text">
            <p class="personal-p">
                Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему
                помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.
            </p>
        </div>
    </div>
    <!-- Блок с краткой информацией о компании и форма для подписки на email-рассылки -->
    <div class="info">
        <div class="info-inf">
            <!-- Краткая информация -->
            <ul class="info-ul">
                <li class="info-list">
                    <p class="info-p">
                        Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.
                    </p>
                </li>
                <li class="info-list">
                    <p class="info-p">
                        Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.
                    </p>
                </li>
            </ul>
        </div>
        <!-- Форма для подписки -->
        <div class="form-block">
            <h3 class="form-title">Подписаться:</h3>
            <form method="post" class="subscribe">
                <ul>
                    <li class="subscribe">
                        <input type="text" id="name" name="user_name" class="subscribe" placeholder="Имя" />
                    </li>
                    <li class="subscribe">
                        <input type="email" id="mail" name="user_mail" class="subscribe" placeholder="Email" />
                    </li>
                    <li class="subscribe">
                        <button type="submit" class="subscribe">
                            <img src="img/subscribe.png" class="subscribe" />
                        </button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <script src="theme.js"></script>
</body>

</html>