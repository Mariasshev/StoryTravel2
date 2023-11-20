<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Story travel - Роудтріпи і хайкінг</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/slideshow.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body>

<!-- Navbar Start -->
<!--<div class="sticky-top">
    <div class="container-fluid px_size">
        <nav class="navbar navbar-expand-lg p-lg-0" >
            <a class="navbar-brand logo-img" href="index.html" id="#image"></a>

            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon color-orange-light"><i class="bi bi-filter-left"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav d-inline-flex">
                    <a href="#travels" class="nav-item nav-link">Подорожі</a>
                    <a href="stories.php" class="nav-item nav-link">Історії</a>
                    <a href="about.php" class="nav-item nav-link">Про мене</a>
                    <a class="nav-link" href="">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="nav-link" href="">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
                <div class="ms-auto">
                    <div class="d-inline-flex">
                        <a class="nav-link" href="#">UA</a>
                        <a class="nav-link" href="#">EN</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>-->

<!--<div class="sticky-top">
    <div class="container-fluid px_size">
        <nav class="navbar navbar-expand-lg p-lg-0" >
            <a class="navbar-brand logo-img" href="index.html" id="#image"></a>

            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon color-orange-light"><i class="bi bi-filter-left"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav d-inline-flex">
                    <a href="#travels" class="nav-item nav-link">Подорожі</a>
                    <a href="stories.php" class="nav-item nav-link">Історії</a>
                    <a href="about.php" class="nav-item nav-link">Про мене</a>
                    <a class="nav-link" href="">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="nav-link" href="">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
                <div class="ms-auto">
                    <div class="d-inline-flex">
                        <a class="nav-link" href="#">UA</a>
                        <a class="nav-link" href="#">EN</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>-->

<div class="sticky-top">
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-sm">
            <div class="d-md-flex pb-3 py-sm-0 align-content-center">
                <a class="navbar-brand logo-img logo-sm-device" href="index.html" id="#image"></a>
                <div class="btn d-block d-sm-none" onclick="Change(this)" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <div class="position-absolute top-50 start-0 translate-middle-y d-block d-sm-none">
                        <div class="bar1 mb-1"></div>
                        <div class="bar2 mb-1"></div>
                        <div class="bar3 mb-1"></div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-body my-5 py-5">
                        <ul class="text-center">
                            <li class="list py-3">
                                <span>
                                    <a class="textChangeColor" href="../index.php">Подорожі</a>
                                </span>
                            </li>
                            <li class="list py-3">
                                <span>
                                    <a class="textChangeColor" href="../stories.php">Історії</a>
                                </span>
                            </li>
                            <li class="list py-3">
                                <span>
                                    <a class="textChangeColor" href="../about.php">Про мене</a>
                                </span>
                            </li>
                            <li class="list py-3">
                                <span>
                                    <a class="textChangeColor" href="#"><i class="bi bi-instagram me-3"></i></a>
                                    <a class="textChangeColor" href="#"><i class="bi bi-telegram"></i></a>
                                </span>
                            </li>
                            <li class="list py-3">
                                <span>
                                    <a class="textChangeColor" href="#">+380 67 958 39 81</a>
                                </span>
                            </li>
                            <li class="list py-3">
                                <span>
                                    <a class="textChangeColor" href="#">info@storytravel.ua</a>
                                </span>
                            </li>
                            <li class="list py-3">
                                <a class="textChangeColor right-border me-1" href="#">UA</a>
                                <a class="textChangeColor" href="#">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown navbar-toggler p-0 position-absolute top-50 end-0 translate-middle-y">
                    <a class="btn textChangeColor pe-1" href="#" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UA
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item textChangeColor display-7" href="#">EN</a></li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav d-inline-flex">
                    <a href="index.php" class="nav-item nav-link textChangeColor">Подорожі</a>
                    <a href="stories.php" class="nav-item nav-link textChangeColor">Історії</a>
                    <a href="about.php" class="nav-item nav-link textChangeColor">Про мене</a>
                    <a class="nav-link textChangeColor" href="">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="nav-link textChangeColor" href="">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
                <div class="ms-auto">
                    <div class="d-inline-flex">
                        <a class="nav-link textChangeColor" href="#">UA</a>
                        <a class="nav-link textChangeColor" href="#">EN</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Video Start -->

<section class="bg-img-switzerland position-relative">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                <div class="row text-center">
                    <div class="col-12 text-center ">
                        <h1 class="display-4 text-white pb-4 mt-0 shadow_text">Швейцарія</h1>
                    </div>
                    <div class="col-12 text-center ">
                        <p class="fs-5 text-white shadow_text">Найкрутіші автотраси і тропи</p>
                    </div>
                    <div class="col-12 text-center">
                        <div class="row justify-content-center">
                            <div class="col-3 pe-0">
                                <h2 class="text-white pb-1 shadow_text">8</h2>
                            </div>
                            <div class="col-3 ps-0">
                                <h2 class="text-white pb-1 mt-0 shadow_text">1490</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="row justify-content-center">
                            <div class="col-3 pe-0">
                                <h6 class="text-white shadow_text2 text-uppercase">днів</h6>
                            </div>
                            <div class="col-3 ps-0">
                                <h6 class="text-white mt-0 shadow_text2 text-uppercase">євро</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video End -->

<!--progress indicator-->

<!--end-->

<!--2 navbar-->
<div class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow  py-0 position-relative">
    <div class="nav-progress">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link textChangeColor" href="#">Дати і умови</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textChangeColor" href="#">Сюжет</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textChangeColor" href="#">Чому зі мною?</a>
                </li>
            </ul>
            <span class="navbar-text pe-4 text-center text-dark"><span class="text-dark fw-bold ">€1490</span><br>з особи</span>

            <form class="d-flex">
                <button class="btn swiss-btn text-white" type="submit">Дізнатись більше</button>
            </form>
        </div>
    </div>
</nav>
</div>
<!--end 2 navbar-->

<!-- Features -->
<section id="travels">
    <div class="container-fluid text-center">
        <div class="row px-md-1 px-0 pt-5 pb-5">
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-start p-0">
                <img class="" style="max-width: 463px;" src="img/title_exp_l.png" alt="">
            </div>
            <div class="col-xl-4 col-12 d-flex align-items-center justify-content-center p-0">
                <div class="text-center color-orange-light display-4">
                    Дати і умови
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-end p-0">
                <img class="" style="max-width: 463px;"
                     src="img/title_exp_r.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Features End -->


<!--travel details-->
<section class="pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 ps-0">
                <img src="img/swi_map.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 pb-5">
                <div class="pb-3 fs-5">
                    <h3 class="color-orange pb-2">8 днів в Швейцарії</h3>
                    <p class="list"><i class="bi bi-dot fs-2 align-middle" style="color: #B3B3B3"></i>31 липня 2023 – 7 серпня 2023</p>
                </div>
                <div class="fs-5">
                    <h3 class="color-orange">Включено у вартість</h3>
                        <p class="my-0 mx-0 "><i class="bi bi-check color-orange fs-3  align-middle"></i>житло по маршруту (2-4 особи в номері)</p>
                        <p class="my-0"><i class="bi bi-check color-orange fs-3 align-middle"></i>прокат авто (4 особи на машину)</p>
                        <p class="my-0"><i class="bi bi-check color-orange fs-3 align-middle"></i>заправки, парковки, вхідні квитки</p>
                        <p class="my-0"><i class="bi bi-check color-orange fs-3 "></i>фунікулери та поїзди за програмою</p>
                        <p class="my-0"><i class="bi bi-check color-orange fs-3 align-middle"></i>прокат спорядження для віа феррати</p>
                        <p class="my-0"><i class="bi bi-check color-orange fs-3 align-middle"></i>супровід автором подорожі</p>
                </div>
            </div>
            <div class="col-4">
                <div class="pb-3 fs-5">
                    <h3 class="text-dark pb-2"><span class="fw-bold">€1490</span><span class="fs-5"> з особи</span></h3>
                    <p class="list"><i class="bi bi-dot text-gray fs-2 align-middle" style="color: #B3B3B3"></i>аванс для броні місця в групі – €500</p>
                </div>
                <div class="fs-5">
                    <h3 class="text-dark fw-bold">Додатково оплачується</h3>
                    <p class="my-0 mx-0"><i class="bi bi-dash fs-3 align-middle text-dark"></i>міжнародні авіа (з Варшави) – від €250</p>
                    <p class="my-0 "><i class="bi bi-dash fs-3 align-middle text-dark"></i>харчування та особисті витрати – від €35/день</p>
                    <p class="my-0 "><i class="bi bi-dash fs-3 align-middle text-dark"></i>страхування для активного відпочинку</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end travel details-->

<!--slider-->
<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="color-orange pb-4">Як проходить подорож</h1>
                <div class="row">
                    <!--1-->
                    <div class="col-2">
                        <img src="/img/drive_1.png" alt="" class="img-fluid" >
                    </div>
                    <div class="col-10 pb-3">
                        <p class="fs-5 align-middle">
                            <span class="fw-bold">4 машини (автомат) по 4 учасника в кожній </span>– водії за бажанням міняються. Закупляємо продукти і рулимо за маршрутом. Там де не можна на авто – пересідаємо на поїзд або фунікулер.
                        </p>
                    </div>
                    <!--2-->
                    <div class="col-2">
                        <img src="/img/hike_1.png" alt="" class="img-fluid" >
                    </div>
                    <div class="col-10 pb-3">
                        <p class="fs-5 align-middle">
                            <span class="fw-bold">Кожну локацію пізнаємо активно </span>– хайкінг та каякінг, польоти та занурення. Зберігаємо особливі моменти в свій Сторібук.
                        </p>
                    </div>
                    <!--3-->
                    <div class="col-2">
                        <img src="/img/chill_1.png" alt="" class="img-fluid" >
                    </div>
                    <div class="col-10 pb-5">
                        <p class="fs-5 align-middle">
                            <span class="fw-bold">Ввечері тусимо разом </span>– в котеджах, апартаментах чи кемпінгу – готуємо вечерю, граємо та ділимось враженнями.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                    <div class="position-relative">
                        <div class="mySlides">
                            <img src="img/road-slide1.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="img/road_2-slide2.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="img/mount-slide3.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="img/fluhalp_1-slide4.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="img/hike_8-slide5.webp" style="width:100%">
                        </div>

                        <a class="prev position-absolute top-50 start-0 translate-middle-y" onclick="plusSlides(-1)">❮</a>
                        <a class="next position-absolute top-50 end-0 translate-middle-y" onclick="plusSlides(1)">❯</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <img class="demo cursor" src="img/road-slide1.webp" style="width:100%" onclick="currentSlide(1)" >
                            </div>
                            <div class="col">
                                <img class="demo cursor" src="img/road_2-slide2.webp" style="width:100%" onclick="currentSlide(2)" >
                            </div>
                            <div class="col">
                                <img class="demo cursor" src="img/mount-slide3.webp" style="width:100%" onclick="currentSlide(3)" >
                            </div>
                            <div class="col">
                                <img class="demo cursor" src="img/fluhalp_1-slide4.jpg" style="width:100%" onclick="currentSlide(4)" >
                            </div>
                            <div class="col">
                                <img class="demo cursor" src="img/hike_8-slide5.webp" style="width:100%" onclick="currentSlide(5)" >
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--end slider-->

<!-- Features -->
<section id="travels" class="pb-5">
    <div class="container-fluid text-center">
        <div class="row px-md-1 px-0 pt-5 pb-5">
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-start p-0">
                <img class="" style="max-width: 463px;" src="img/title_exp_l.png" alt="">
            </div>
            <div class="col-xl-4 col-12 d-flex align-items-center justify-content-center p-0">
                <div class="text-center color-orange-light display-4">
                    Сюжетна лінія
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-end p-0">
                <img class="" style="max-width: 463px;"
                     src="img/title_exp_r.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Features End -->

<!--Story Line-->
<section class="py-5">
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <img src="img/road_2-slide2.webp" class="img-fluid" alt="">
        </div>
            <!--end slider 1-->

        <div class="col-6">
            <div class="row">
                <!--<div class="col">
                    <i class="bi bi-geo-alt-fill color-orange fs-3"></i>
                </div>-->
                <div class="col-12">
                    <!--1 section-->
                    <h2 class="color-orange pb-4"><span class="vertical-line-icon"><i class="bi bi-geo-alt-fill color-orange fs-3 pe-3"></i></span>День 1-2</h2>

                        <div class="py-2 fs-5">
                            <span class="icon"></span><p class="fw-bold text-gray pb-1 ps-5 position-relative">Виноградники та сири Грюйєру</p>
                            <p class="text-dark ps-5">Проведемо перший вечір в містечку, що ніби застигло в середньовіччі, а наступного дня вирушимо в Бернські Альпи. Дорогою будемо пізнавати Швейцарію на смак – витримані сири в славетному Домі Грюйєр, та молоде вино в шато на березі Женевського озера.</p>
                        </div>
                    <div class="ps-5">
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Міст Чарльза Куонена</p>
                            <p class="text-dark">Прогуляємось найдовшим підвісним мостом в Альпах – 494 метри над прірвою, з видом на Маттерхорн наприкінці. Це буде перше побачення з легендарною горою в нашій подорожі.</p>
                        </div>
                        <div class="pb-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Церматт – місто без машин</p>
                            <p class="text-dark pb-0">Прямуємо поїздом до Церматта. Це один із найбільших центрів альпінізму та гірськолижного відпочинку у Швейцарії. Тут на кожному кроці ресторани, які набрали таку кількість балів у жовтому путівнику Gault e Millau, скільки не набрали ресторани в жодному іншому швейцарському місті. Підчас вечірньої прогулянки ми завітаємо в один з них та скуштуємо справжнє фондю.</p>
                        </div>
                    </div>


                    <!--2 section-->
                    <h2 class="color-orange pt-2"><i class="bi bi-geo-alt-fill color-orange fs-3 pe-3"></i>День 3-4</h2>
                    <div class="ps-5">
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Готель біля Маттерхорну</p>
                            <p class="text-dark">Зупинимось в готелі на висоті 2600 метрів. У цього дерев'яного лоджу з рестораном більш ніж вікова історія, затишний інтер'єр, але головна його відмінність – локація. Тому гості охоче бронюють кімнати за півроку наперед, бо захід та схід сонця з видом на Маттерхорн включено у вартість.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Хайкінг до льодовика Горнер</p>
                            <p class="text-dark">Комбінуючи фунікулери з пішими сходженнями лісовими стежинами, дістанемось до оглядового майданчика на висоті 3500 метрів. Звідци можна розгледіти у всій красі і сам Маттерхорн, і найвищу гору Швейцарії Дюфур, і величезний льодовик Горнер поміж ними.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Світанок на озері</p>
                            <p class="text-dark">Прокинемось до світанку, щоб зустріти схід сонця біля озера неподалік від готелю. Будемо сидіти на березі, милуватись Маттерхорном в перших променях сонця та пити гарячий чай з Тоблеронами.</p>
                        </div>
                    </div>


                    <!--3 section-->
                    <h2 class="color-orange pt-2"><i class="bi bi-geo-alt-fill color-orange fs-3 pe-3"></i>День 5-6</h2>
                    <div class="ps-5">
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Хайкінг вздовж льодовика Алеч</p>
                            <p class="text-dark">Алеч – це 23-кілометрова крижана магістраль, найбільший крижаний потік в Альпах. У безхмарні дні вершини Великої Альпійської Трійки – Ейгер, Менх і Юнгфрау, височіють над ним на 4000 метрів, пронизуючи яскраво-блакитне небо.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Ночівля в гірському притулку</p>
                            <p class="text-dark">Наша стежка спочатку прямуватиме під звуки коров’ячих дзвіночків, крізь мальовничі оглядові майданчики над льодовиком, і врешті приведе нас на ночівлю до гірського притулку – дерев'яної хати посеред первозданної альпійської природи.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Траса Джеймса Бонда</p>
                            <p class="text-dark">Проїдемось зигзагоподібним маршрутом, що був увічнений фільмом "Голдфінгер" (1964) – Шон Коннері гнався цим перевалом на своєму Aston Martin DB5. З неймовірними краєвидами на Альпи Урі це справді захоплюючі кілька кілометрів за кермом.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Льодовий грот</p>
                            <p class="text-dark">Прогуляємось 100-метровим льодовим тоннелем. Його наново вирізають в толщі льодовика Рони щовесни з 1870 року, а до кінця літа він знов тане.</p>
                        </div>
                    </div>


                    <!--4 section-->
                    <h2 class="color-orange pt-2"><i class="bi bi-geo-alt-fill color-orange fs-3 pe-3"></i>День 7-8</h2>
                    <div class="ps-5">
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Озерний челендж</p>
                            <p class="text-dark">Лазурно-блакитна вода оточена високими хребтами, які взимку вкриті снігом, а влітку тануть у водоспади. Ми присвятимо цілий день чарівному амфітеатру Оешинензее – піднімемось стежками до озера, прогуляємось навкруги та обов'язково скупаємось в кришталево чистому водоймі.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Ельфійська долина</p>
                            <p class="text-dark">Відвідаємо топові локації Лаутербруннена. Це один із найкрасивіших альпійських регіонів з мальовничою долиною та типовим селом у швейцарському стилі. Саме тут надихався Толкін на створення ельфійсього Рівенделу, і саме це село – на заставці відео Птушкіна.) В долині аж 72 водоспади і ще більше мальовничих хайкінгових маршрутів. А кому захочеться побачити цю красу звисока і без Віа Феррати – можна організувати політ на пароплані.</p>
                        </div>
                        <div class="py-2 fs-5">
                            <p class="fw-bold text-gray pb-1">Віа Феррата</p>
                            <p class="text-dark">Віа Феррата – одна з найепічніших можливих пригод у Швейцарії. Це серія драбин, сходинок та підвісних мостів, що ведуть по скелях на висоті. На початку маршруту ви одягаєте страхову систему і протягом усього шляху залишаєтеся пристебнутими двома ременями до троса. Тим, хто зможе опанувати свої емоції, відкриваються найкращі види в Альпах. Тож запрошуємо кожного перевірити себе і отримати максимум від цієї подорожі!</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--End Story Line-->


<!-- Features -->
<section id="travels">
    <div class="container-fluid text-center">
        <div class="row px-md-1 px-0 pt-5 pb-5">
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-start p-0">
                <img class="" style="max-width: 463px;" src="img/title_exp_l.png" alt="">
            </div>
            <div class="col-xl-4 col-12 d-flex align-items-center justify-content-center p-0">
                <div class="text-center color-orange-light display-4">
                    Чому з нами?
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-end p-0">
                <img class="" style="max-width: 463px;"
                     src="img/title_exp_r.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Features End -->







<!-- Footer Start -->
<?php
include 'components/footer.php';
?>
<!-- Footer End -->




<!-- Back to Top -->
<!--<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
        class="bi bi-arrow-up"></i></a>-->


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>


<!-- Template Javascript -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<script src="js/main.js"></script>
<script src="js/custom.js"></script>
<script  src="js/slideshow.js"></script>
</body>

</html>