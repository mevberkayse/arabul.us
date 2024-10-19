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
        }

        .category-bg-2 {
            background-color: #bfd8bd;
        }

        .category-bg-3 {
            background-color: #fde4cf;
        }

        .category-bg-4 {
            background-color: #ffcfd2;
        }

        /* Kategori yüksekliğini row yüksekliğiyle eşitlemek için */
        .category-height {
            height: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Logo</a>
                <form class="d-flex vw-25" role="search">
                    <input class="form-control me-2 w-100" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex gap-5 align-items-center">
                    <a href="#" class="btn btn-outline-light">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <div class="flex-shrink-0 dropdown">
                        <a href="#" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-moon text-white"></i>
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
            <div class="row g-0 justify-content-between align-items-stretch w-100 text-center h-100 p-0">
                <div class="col-3 category-bg-1 d-flex justify-content-center align-items-center category-height">
                    <div class="dropdown text-center">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CATEGORY 1
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
                <!-- Diğer kategori elemanlarını aynı şekilde düzenle -->
                <div class="col-3 category-bg-2 d-flex justify-content-center align-items-center category-height">
                    <div class="dropdown text-center">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CATEGORY 2
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
                <div class="col-3 category-bg-3 d-flex justify-content-center align-items-center category-height">
                    <div class="dropdown text-center">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CATEGORY 3
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
                <div class="col-3 category-bg-4 d-flex justify-content-center align-items-center category-height">
                    <div class="dropdown text-center">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CATEGORY 4
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

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>