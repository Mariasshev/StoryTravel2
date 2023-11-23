<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Індія - Роудтріпи і хайкінг</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;600;700&display=swap" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>  <!--библиотека слайдшоу-->
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/slideshow.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-nav" data-bs-offset="0" tabindex="0">

<!-- Navbar Start -->
<?php
include '../components/main-header.php';
?>
<!-- Navbar End -->


<!-- Video Start -->

<section class="bg-img-india position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                <div class="row text-center">
                    <div class="col-12 text-center ">
                        <h1 class="display-4 text-white pb-4 mt-0 shadow_text2">Індія</h1>
                    </div>
                    <div class="col-12 text-center pb-5">
                        <p class="fs-5 text-white shadow_text2 fs-4">ВЕЛИКИЙ ТУР НА СВЯТО ХОЛІ
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <div class="row justify-content-center">
                            <div class="col-3 pe-0">
                                <h1 class="text-white pb-1 shadow_text2 fw-bold">15</h1>
                            </div>
                            <div class="col-3 ps-0">
                                <h1 class="text-white pb-1 mt-0 shadow_text2 fw-bold">1300</h1>
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
<nav class="navbar navbar-expand navbar-light shadow-sm position-relative py-0 " id="navbar-nav">
        <div class="nav-progress">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>

    <div class="container" >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item pt-2">
                    <a class="nav-link textChangeColor " href="#travels" >Дати і умови</a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link textChangeColor" href="#plot">Сюжет</a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link textChangeColor" href="#organizator">Чому зі мною?</a>
                </li>
            </ul>
            <span class="navbar-text pe-4 text-center text-dark"><span class="text-dark fw-bold ">€1300</span><br>з особи</span>

            <form class="d-flex">
                <button type="button" class="btn swiss-btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Дізнатись більше
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-6">
                                    <img src="../img/india_form.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-6 bg-white position-relative">
                                    <button type="button" class="btn-close position-absolute top-0 end-0 pt-4 pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-header mt-3">
                                        <h3 class="modal-title fw-bold color-orange text-center">Дізнатись більше</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <select class="form-select" id="inputGroupSelect01" required>
                                                <option class="selected" >Дати подорожі</option>
                                                <option>24.02.2023 - 10.03.2023</option>
                                            </select>
                                        </div>
                                        <div class="input-group position-relative mb-3">
                                            <input id="name" type="text" class="form-control" placeholder="Ім'я" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Прізвище" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input required type="text" class="form-control" placeholder="Telegram або Viber" aria-label="Username" aria-describedby="Telegram" value="+">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger w-100">Відправити</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</nav>
</div>
<!--end 2 navbar-->




<!-- Features -->
<section id="travels" >
    <div class="container-fluid text-center">
        <div class="row px-md-1 px-0 pt-5 pb-5">
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-start p-0">
                <img class="" style="max-width: 463px;" src="../img/title_exp_l.png" alt=""  >
            </div>
            <div class="col-xl-4 col-12 d-flex align-items-center justify-content-center p-0">
                <div class="text-center color-orange-light display-4 wow fadeInUp" data-wow-delay="0.1s">
                    Дати і умови
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block d-xxl-block text-end p-0">
                <img class="" style="max-width: 463px; z-index: -100"
                     src="../img/title_exp_r.png" alt="">
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
                <img src="../img/swi_map.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 pb-5 ps-0">
                <div class="pb-3 fs-5">
                    <h3 class="color-orange pb-2 fw-bold ms-1 wow fadeInUp" data-wow-delay="0.1s">Дати та вартість</h3>
                    <ul class="ps-0">
                        <li>
                            <i class="bi bi-dot fs-2  align-middle" style="color: #B3B3B3; "></i>
                            24.02.23 - 10.03.23
                        </li>
                    </ul>
                </div>
                <div class="fs-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="color-orange ms-1 fw-bold">Включено у вартість</h3>
                    <ul class="ps-0">
                        <li class="pb-2">
                            <i class="bi bi-check color-orange fs-4 float-start"></i>
                            готелі та гестхауси по маршруту подорожі
                        </li>
                        <li class="pb-2">
                            <i class="bi bi-check color-orange fs-4 float-start"></i>
                            місцевий транспорт: поїзди, буси, рікші
                        </li>
                        <li class="pb-2">
                            <i class="bi bi-check color-orange fs-4 float-start"></i>
                            внутрішній переліт Тривандрам - Варанасі
                        </li>
                        <li class="pb-2">
                            <i class="bi bi-check color-orange fs-4 float-start"></i>
                            вхідні квитки та заходи за програмою
                        </li>
                        <li class="pb-1">
                            <i class="bi bi-check color-orange fs-4 float-start"></i>
                            супровід групи автором подорожі
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-4 px-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="pb-3 fs-5">
                    <h3 class="text-dark pb-5"><span class="fw-bold">€1300</span><span class="fs-5"> з особи</span></h3>
                </div>
                <div class="fs-5 pt-4">
                    <h3 class="text-dark fw-bold ms-1">Додатково оплачується</h3>
                    <ul class="ps-0">
                        <li class="pb-2">
                            <i class="bi bi-dash fs-4 float-start text-dark"></i>
                            міжнародний авіапереліт (ч/з Абу-Дабі)
                        </li>
                        <li class="pb-2">
                            <i class="bi bi-dash fs-4 float-start text-dark"></i>
                            особисті витрати на харчування - від €10 на день
                        </li>
                        <li class="pb-2">
                            <i class="bi bi-dash fs-4 float-start text-dark"></i>
                            індійська віза (онлайн) – близько €25
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!--end travel details-->

<!--slider-->
<section class="pb-5" id="plot">
    <div class="container-fluid">
        <div class="row gx-0">
            <h1 class="color-orange pb-4 text-center fw-bold wow fadeInUp" data-wow-delay="0.1s">Програма по дням</h1>
            <!--1 section-->
            <div class="col-12">
                <div class="row">
                    <div class="col-6 px-0">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active indicator me-3" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2" class="indicator me-3" ></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3" class="indicator"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/india-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 ps-5 pt-2 pb-0">
                                <h1 class="text-gray pb-2 display-6 wow fadeInUp" data-wow-delay="0.1s">День 1-3</h1>
                                <div class="py-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="text-gray position-relative fs-5 fw-bold mb-1">Пляжі Керали</p>
                                    <p class="text-dark">Насолодимося відпочинком на найкращих пляжах Керали - теплі води індійського океану, мальовничі заходи сонця, гамаки під пальмами, фрукти і морепродукти.</p>
                                </div>
                                <div class="pb-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="fw-bold text-gray fs-5 mb-1">Аюрведа та СПА</p>
                                    <p class="text-dark">Влаштуємо свято тіла на батьківщині аюрведи та насолодимося комплексом спа-процедур від рук професіоналів.</p>
                                </div>
                                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="fw-bold text-gray fs-5 mb-1">Річковий круїз</p>
                                    <p class="text-dark pb-0">Пройдемо на поромі річковими заводами крізь джунглі. Проведемо день і ніч на борту цього плавучого будинку.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--2 section-->
            <div class="col-12">
                <div class="row">
                    <div class="col-6 ps-5 py-3">
                        <h1 class="text-gray pb-1 display-6 wow fadeInUp" data-wow-delay="0.1s">День 4-5</h1>
                        <div class="py-1 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="text-gray position-relative fs-5 fw-bold mb-1">Чайні плантації</p>
                            <p class="text-dark">Прогуляємося зеленими плантаціями Муннара і насолодимося живими пейзажами, добре знайомими по ілюстраціях на пачках чаю.</p>
                        </div>
                        <div class="py-1 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="fw-bold text-gray fs-5 mb-1">Будиночок на дереві</p>
                            <p class="text-dark">Проведемо ніч у глибині джунглів, далеко від міської суєти, а колисковою нам буде вітер у листі, стрекотіння цикад і шум водоспаду.</p>
                        </div>
                        <div class=" wow fadeInUp" data-wow-delay="0.1s"">
                            <p class="fw-bold text-gray fs-5 mb-1">Водоспад Атірапіллі</p>
                            <p class="text-dark pb-0">Прогуляємося біля одного з найкрасивіших водоспадів Керали – Атірапаллі – улюбленого місця індійських молодят.</p>
                        </div>
                    </div>
                    <div class="col-6 px-0">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active indicator me-3" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2" class="indicator me-3" ></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3" class="indicator"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/india-1.1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-1.2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-1.3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--3 section-->
            <div class="col-12">
                <div class="row">
                    <div class="col-6 px-0">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active indicator me-3" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2" class="indicator me-3" ></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3" class="indicator"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/india-1.1.1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-1.1.2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-1.1.3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 ps-5 pt-3 pb-0">
                                <h1 class="text-gray pb-0 display-6 wow fadeInUp" data-wow-delay="0.1s">День 6-8</h1>
                                <div class="pt-0 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="text-gray position-relative fs-5 fw-bold my-0">Варанасі</p>
                                    <p class="text-dark mb-1">Проведемо три дні у Варанасі - місті Світла, місті Мертвих, одному з найдавніших міст світу. Зустрічатимемо світанки і проводимо заходи сонця на березі священної річки Ганг.</p>
                                </div>
                                <div class="pb-0 py-0 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="fw-bold text-gray fs-5 my-0">Церемонія Араті</p>
                                    <p class="text-dark mb-1">Побачимо у всій красі вогняний ритуал привітання та прощання з сьогоднішнім днем, який регулярно проводять місцеві жерці на площі головного ґхату Варанасі, де й розташований наш готель.</p>
                                </div>
                                <div class="mt-0 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="fw-bold text-gray fs-5 my-0">Вічний вогонь</p>
                                    <p class="text-dark pb-0">Піднімемося на човні вгору Гангом і побачимо похоронні багаття, які горять тут вдень і вночі. Зійдемо на берег і станемо свідками головного обряду в житті кожного індуїста - спалення на березі священного Гангу.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--4 section-->
            <div class="col-12">
                <div class="row">
                    <div class="col-6 ps-5 pt-5">
                        <h1 class="text-gray pb-4 display-6 wow fadeInUp" data-wow-delay="0.1s">День 9-11</h1>
                        <div class="py-1 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="text-gray position-relative fs-5 fw-bold mb-1">Храми Камасутри</p>
                            <p class="text-dark">Відвідаємо село Кхаджурахо і розглянемо ліпнину на стінах стародавніх храмів, що зображує всілякі сцени кохання.</p>
                        </div>
                        <div class="py-1 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="fw-bold text-gray fs-5 mb-1">День у Агрі</p>
                            <p class="text-dark">Зустрінемо світанок у Тадж Махала і захід сонця в Червоному форті. Влаштуємо костюмовані фотосесії всередині цих всесвітньо відомих споруд.</p>
                        </div>
                    </div>
                    <div class="col-6 px-0">
                        <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active indicator me-3" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2" class="indicator"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/india-1.1.1.1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-1.1.1.2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--5 section-->
            <div class="col-12">
                <div class="row">
                    <div class="col-6 px-0">
                        <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active indicator me-3" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2" class="indicator"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/india-1.1.1.1.1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/india-1.1.1.1.2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 ps-5 pt-5 pb-0">
                                <h1 class="text-gray pb-4 display-6 wow fadeInUp" data-wow-delay="0.1s">День 12-15</h1>
                                <div class="py-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="text-gray position-relative fs-5 fw-bold mb-1">Свято Холі</p>
                                    <p class="text-dark">Відвідаємо головний храм Вріндавану та візьмемо там участь у святкуванні Холі - найяскравішої події в індуїстському календарі.</p>
                                </div>
                                <div class="pb-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="fw-bold text-gray fs-5 mb-1">Шопінг у Делі</p>
                                    <p class="text-dark">Закінчимо нашу подорож традиційним шопінгом – присвятимо цілий день ринкам старого Делі та накупимо купу сувенірів.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--end slider-->

<!--Feedbacks-->
<section class="px-5">
    <div class="container">
        <h1 class="text-center color-orange pb-3 fw-bold wow fadeInUp" data-wow-delay="0.1s">Фото та відгуки</h1>
        <h3 class="text-center text-gray pb-5 wow fadeInUp" data-wow-delay="0.1s">Звіти про минулі тури до Індії</h3>
        <div class="row justify-content-center gx-3">
            <div class="col-4">
                <div class="row">
                    <div class="col-12 pb-3">
                        <div class="img-container wow fadeInUp" data-wow-delay="0.1s">
                            <img src="../img/india-img-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 text-center wow">
                        <h5 class="text-gray fw-bold wow fadeInUp" data-wow-delay="0.1s">Надія Кірса</h5>
                        <p class="text-gray fw-bold fs-6 wow fadeInUp" data-wow-delay="0.1s">Індія, березень 2015</p>
                        <p class="text-gray wow fadeInUp" data-wow-delay="0.1s">Цієї весни я ризикнула поїхати в таку далеку та невідому Індію.. і мені пощастило з організаторами! Діти закохані в те, що вони роблять – створюють подорожі для тих, хто хоче дізнатися про культуру країни зсередини. Сумувати не доводилося - ми пливли річкою, їхали пустелею, бродили в джунглях, куштували страви місцевої кухні і відчували себе в гончарному ремеслі. Це була одна з найяскравіших і найяскравіших поїздок!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12 pb-3">
                        <div class="img-container wow fadeInUp" data-wow-delay="0.2s">
                            <img src="../img/india-img-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <h5 class="text-gray fw-bold wow fadeInUp" data-wow-delay="0.2s">Ганна Семко</h5>
                        <p class="text-gray fw-bold fs-6 wow fadeInUp" data-wow-delay="0.2s">Індія, березень 2017</p>
                        <p class="text-gray wow fadeInUp" data-wow-delay="0.2s">Дякую за здійснення моєї давньої мрії. Індія – справді країна контрастів. І пізнавати її необхідно обов'язково в компанії такого організатора як Святий. Побачити справжню Індію неможливо з вікна автобуса, що кондиціонується або живучи в номері крутого готелю. Потрібно йти в саму гущу подій, що ми й робили щодня, щохвилини. Повне занурення та море вражень! Обов'язково повернуся сюди ще!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12 pb-3">
                        <div class="img-container wow fadeInUp" data-wow-delay="0.3s">
                            <img src="../img/india-img-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <h5 class="text-gray fw-bold wow fadeInUp" data-wow-delay="0.3s">Ірина Вале</h5>
                        <p class="text-gray fw-bold fs-6 wow fadeInUp" data-wow-delay="0.3s">Індія, листопад 2018</p>
                        <p class="text-gray wow fadeInUp" data-wow-delay="0.3s">Їздила з хлопцями до Індії, організація туру чудова, безпечна та весела. Провели там 2 тижні, програма насичена, щодня багато активностей. Свят у всьому допомагав, ні про що не треба було турбуватися. Якщо їхати до Індії вперше, то раджу саме із Story Travel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Feedbacks-->

<!---->
<section class="pt-5">
    <div class="container-fluid px-5">
        <div class="row gx-lg-0 gx-0 pb-2 ">
            <div class="col-lg-4 col-md-6 col-4 pb-md-3 pe-md-3 pe-lg-0 pb-lg-0">

                <ul id="lightSlider">
                    <li class="a-slide">
                        <a href="../img/slidshow-india-1.jpg" data-fancybox="gallery" class="a-slide">
                            <div class="container-india-img">
                                <div class="bright-img block-india">
                                    <img src="../img/img-india-1.jpg" alt="">
                                    <div class="d-inline text-center position-absolute top-50 start-50 translate-middle inner" >
                                        <p class="text-white fs-1 mb-0 shadow_text fw-bold">Індія</p>
                                        <p class="text-white fs-5 shadow_text fw-bold">Листопад 2018</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-2.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-2.jpg" />
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-1.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-1.jpg" />
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-2.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-2.jpg" />
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-4 pb-md-3 ps-md-3 pe-lg-0 pb-lg-0">

                <ul id="lightSlider">
                    <li>
                        <a href="../img/slidshow-india-1.jpg" data-fancybox="gallery" class="a-slide">
                            <div class="container-india-img">
                                <div class="bright-img block-india">
                                    <img src="../img/img-india-2.jpg" alt="">
                                    <div class="d-inline text-center position-absolute top-50 start-50 translate-middle inner" >
                                        <p class="text-white fs-1 mb-0 shadow_text fw-bold">Індія</p>
                                        <p class="text-white fs-5 shadow_text fw-bold">Березень 2017</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-2.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-2.jpg" />
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-1.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-1.jpg" />
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-2.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-2.jpg" />
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-4">

                <ul id="lightSlider">
                    <li>
                        <a href="../img/slidshow-india-1.jpg" data-fancybox="gallery" class="a-slide">
                            <div class="container-india-img">
                                <div class="bright-img block-india">
                                    <img src="../img/img-india-3.jpg" alt="">
                                    <div class="d-inline text-center position-absolute top-50 start-50 translate-middle inner" >
                                        <p class="text-white fs-1 mb-0 shadow_text fw-bold">Індія</p>
                                        <p class="text-white fs-5 shadow_text fw-bold">Березень 2015</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-2.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-2.jpg" />
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-1.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-1.jpg" />
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="../img/slidshow-india-2.jpg" data-fancybox="gallery">
                            <img src="../img/slidshow-india-2.jpg" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--whyWithMe-->
<section class="py-5" style="background-color: #ececec;" id="organizator">
    <div class="container">
        <h1 class="color-orange text-center pb-2 fw-bold wow fadeInUp" data-wow-delay="0.1s">Організатор подорожі</h1>
        <h5 class="text-gray fw-bold pb-5 text-center wow fadeInUp" data-wow-delay="0.1s">Автор пригод та супроводжуючий</h5>
        <div class="row">
            <div class="col-sm-12 col-lg-6 text-center">
                <img src="../img/team_sviat.jpg" alt="" width="510" height="500" class="img-fluid">
            </div>
            <div class="col-sm-12 col-lg-6 text-center mt-md-5 pb-md-5 mt-2 mb-5 pb-5">
                <a href="https://www.instagram.com/sviatofor"><i class="bi bi-instagram icon-color fs-4 me-3"></i></a>
                <a href="https://t.me/sviatofor" ><i class="bi bi-telegram icon-color fs-4"></i></a>
            </div>
        </div>
    </div>
</section>

<!--before footer-->
<section class="py-5">
    <div class="container text-center wow fadeInUp" data-wow-delay="0.1s">
        <h2 class="text-gray">Підписуйтесь на нас - <a href=""><span class="color-orange"><i class="bi bi-instagram color-orange fs-6 align-middle"></i> storytravel.ua</span></a></h2>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-6 d-none d-md-block ">
                    <img class="img-fluid" src="https://storytravel.ua/wp-content/uploads/2022/06/india_form.jpg"
                         alt="">
                </div>
                <div class="col-md-6 col-sm-12 ">
                    <div class="d-flex justify-content-end m-2 ">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class=" text-center ">
                        <h5 class="modal-title f30  colorange" id="exampleModalLabel">Дізнатися більше</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">

                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Дати подорожі</option>
                                    <option value="1">24.02.2023-30.02.2023</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="І'мя">
                                <label for="floatingInput">І'мя<span class="required">*</span> </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                       placeholder="Прізвище">
                                <label for="floatingPassword">Прізвище</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Email">
                                <label for="floatingPassword">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                       placeholder="Password">
                                <label for="floatingPassword">Telegram або Viber<span class="required">*</span></label>
                            </div>
                            <div class=" d-grid gap-2 ">
                                <button type="button" class="btn  btn-danger">Відправити</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>


<div style="background-image: url(https://storytravel.ua/wp-content/uploads/2022/12/swiss_head_bg.webp);" class="container-fluid  ">
    <div class="row blur pt100 pb100">
        <div class="col-lg-6 col-md-12">
            <div class="pl25 pr25">
                <div class="text-start mx-auto wow fadeInUp fb50 pb-3 colwhite " data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    FAQ про подорож
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header " id="flush-headingOne ">
                            <button class="accordion1-button collapsed h90" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Які люди подородують з нами?
                            </button>
                        </h2>
                        <div  id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div  class="accordion-body ts colwhite">Наші роудтріпи – для любителів активного відпочинку на природі за будь-якої погоди. Для тих, хто готовий виходити за межі звичного і комфортного заради нового досвіду, знайомств та історій про себе.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion1-button h90 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Які вимоги до фізичної форми?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body colwhite ts">Окрім щоденних піших прогулянок по кілька кілометрів, в цій подорожі буде 4 хайкінги середнього рівню складності (по 4-5 годин з привалами) та прогулянка віа-ферратою, де задіяні і руки і ноги.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion1-button h90 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Рівень комфорту в подорожі?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body colwhite ts">По 4 учасника на авто середнього розміру – розприділяємо враховуючи вік та водійський досвід. Багажник розрахований на ручні поклажі (рюкзаки або невеликі валізи). Житло, в основному, теж 4-місне (котеджі, апартаменти, гестхауси) із самостійним приготуванням їжі. Інколи бувають 2-місні номери або сніданки від готелю за доплату. Обідаємо зазвичай на природі з ланчбоксів, але трапляються і кафе/ресторани, коли ночівля - в цивілізації.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion1-button h90 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Що з речей брати в поїздку?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body colwhite ts">Якісне та зручне трекінгове взуття; Вологостійка куртка, штани, фліска; Легкий комплект – шорти, кросівки; Сонцезахисні окуляри, крем, головний убор; Маленький термос, ланчбокс, ложка.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion1-button h90 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Умови оплати/скасування?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body colwhite ts">Після заявки на сайті, ми підкажемо в телеграмі логістику до точки старту і попросимо фотку заграна для оформлення договору. Аванс оплачується в грн на рахунок ФОП, решта – готівкою у валюті в перший день. У разі відмови, залежно від часу до старту, можна частково або повністю перенести депозит на майбутні подорожі з нами.</div>
                        </div>
                    </div>
                </div>

            </div>
<!-- wow fadeInUp" data-wow-delay="0.1s"-->
        </div>
        <div class="col-lg-6 col-md-12   ">
            <div class="">
                <div class="text-center mx-auto wow fadeInUp fb50 pb-3 colwhite " data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    Залишилось питання?
                </div>
                <div  class="modal-body">
                    <div class="row justify-content-center align-items-center">
                        <form class="mw700">
                            <div class="form-floating mb-3">
                                <input  type="email" class="form-control blur1 br3 " id="floatingInput" placeholder="І'мя">
                                <label for="floatingInput">І'мя<span class="required">*</span> </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control  blur1  br3 " id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Telegram або Viber<span class="required">*</span></label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control  blur1  br3 " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Ваше питання<span class="required">*</span></label>
                            </div>

                            <div class=" d-grid gap-2 nav-menu ">
                                <button type="button" class="btn btn-danger">Відправити</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-orange btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>



<!-- Footer Start -->
<?php
include '../components/footer.php';
?>
<!-- Footer End -->


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/lightbox/js/lightbox.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js'></script>

<!--библиотеки слайдшоу-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>

<!-- Template Javascript -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<script src="../js/main.js"></script>
<script src="../js/custom.js"></script>
<script  src="../js/slideshow.js"></script>
</body>

</html>