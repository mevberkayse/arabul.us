<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <style>
        @media only screen and (min-width: 600px) {
            .navbar {
                height: 90px !important;
            }
        }

        @media only screen and (min-width: 768px) {
            .navbar {
                height: 70px !important;
            }
        }

        .category-bg-1 {
            background-color: #bdb2ff;
            font-family: "Metropolis", "arial", "sans-serif";
            font-size: 18px;
        }

        .category-bg-2 {
            background-color: #bfd8bd;
            font-family: "Metropolis", "arial", "sans-serif";
            font-size: 18px;
        }

        .category-bg-3 {
            background-color: #fde4cf;
            font-family: "Metropolis", "arial", "sans-serif";
            font-size: 18px;
        }

        .category-bg-4 {
            background-color: #ffcfd2;
            font-family: "Metropolis", "arial", "sans-serif";
            font-size: 18px;
        }

        .dropdown-menu-1 {
            width: 300px !important;
            height: 400px !important;
            right: 40%;
            /* Sol kenarı ortalamak için %50'ye ayarla */
            transform: translateX(38%);
            /* Sol kenarı merkeze doğru kaydır */
            background-color: #bdb2ff;
            border-radius: 0px;

        }

        .dropdown-menu-2 {
            width: 300px !important;
            height: 400px !important;
            right: 40%;
            /* Sol kenarı ortalamak için %50'ye ayarla */
            transform: translateX(35%);
            /* Sol kenarı merkeze doğru kaydır */
            background-color: #bfd8bd;
        }

        .dropdown-menu-3 {
            width: 300px !important;
            height: 400px !important;
            right: 40%;
            /* Sol kenarı ortalamak için %50'ye ayarla */
            transform: translateX(35%);
            /* Sol kenarı merkeze doğru kaydır */
            background-color: #fde4cf;
        }

        .dropdown-menu-4 {
            width: 300px !important;
            height: 400px !important;
            right: 40%;
            /* Sol kenarı ortalamak için %50'ye ayarla */
            transform: translateX(35%);
            /* Sol kenarı merkeze doğru kaydır */
            background-color: #ffcfd2;
        }

        .dropdown-item {
            transition: all 0.3s ease-in-out;
            /* Geçiş süresi ve animasyon stili */
            position: relative;
            /* Sağ kaydırmak için pozisyonlamayı ayarla */
        }

        .dropdown-item:hover {
            background-color: transparent !important;
            /* Arka plan rengini transparan yap */
            transform: translateX(10px);
            /* Yazıyı sağa kaydır */
        }

        .searchw {
            min-width: 400px;
            /* Maksimum genişlik isteğe bağlı olarak ayarlanabilir */
        }
        .img-small{
            max-width: 100%;  /* Görselin kartın genişliğini aşmadığından emin olur */
            height: 170px; 

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Logo</a>
                <form class="d-flex vw-25" role="search">
                    <input class="form-control me-2 w-100 searchw" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex gap-5 align-items-center">
                    <a href="#" class="btn btn-outline-dark">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <div class="flex-shrink-0 dropdown">
                        <a href="#" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-moon text-dark"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-moon"></i>
                                    Dark</a></li>
                            <li><a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-sun"></i>Light</a></li>
                            <li><a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-circle-half-stroke"></i>
                                    Auto</a></li>
                        </ul>
                    </div>
                    <div class="flex-shrink-0 dropdown">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-start text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Kategoriler için düzenleme -->
    <nav class="navbar mt-0 pt-0">
        <div class="container-fluid h-100 w-100 p-0 m-0">
            <div class="row g-0 justify-content-end align-items-stretch w-100 text-center h-100 p-0">
                <div class="col-3 category-bg-1 d-flex justify-content-center align-items-center ">
                    <div class="dropdown text-center">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <a href="#" class="d-block link-body-emphasis text-decoration-none " data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Telefon & Aksesuar
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-1 dropdown-menu-lg-end dropdown-menu-start text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Diğer kategori elemanlarını aynı şekilde düzenle -->
                <div class="col-3 category-bg-2 d-flex justify-content-center align-items-center ">
                    <div class="dropdown text-center">
                        <i class="fa-solid fa-laptop"></i>
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bilgisayar & Tablet
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-2 dropdown-menu-lg-end dropdown-menu-start text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 category-bg-3 d-flex justify-content-center align-items-center ">
                    <div class="dropdown text-center">
                        <i class="fa-solid fa-tv "></i>
                        <a href="#" class="d-block link-body-emphasis text-decoration-none " data-bs-toggle="dropdown"
                            aria-expanded="false">
                            TV,Ses ve Görüntü
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-3 dropdown-menu-lg-end dropdown-menu-start text-small shadow ">
                            <li><a class="dropdown-item" href="#">Profile</a></li>

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 category-bg-4 d-flex justify-content-center align-items-center">
                    <div class="dropdown text-center">
                        <i class="fa-solid fa-kitchen-set"></i>
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Beyaz Eşya & Ev Aletleri
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-4 dropdown-menu-lg-end dropdown-menu-start text-small shadow ">
                            <li><a class="dropdown-item" href="#">Profile</a></li>

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center gap-0 ">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                        <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            </div>
            <div class="col-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
                </div>
            </div>



            <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>