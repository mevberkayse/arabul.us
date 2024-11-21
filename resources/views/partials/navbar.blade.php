<style>
    /* Modalın Boyutunu Küçültme ve Karemsi Yapma */
    .custom-modal {
        max-width: 400px;
        /* Genişlik */
        border-radius: 10px;
        /* Köşeleri yuvarlama */
    }

    /* Modal Başlıklarını Renklendirme */
    .modal-title {
        font-weight: bold;
        color: #333;
        text-align: center;

    }

    .modal-header {
        border-bottom: none !important;
        /* Alt çizgiyi kaldırma */
    }

    .btn-success {
        border-radius: 20px;
        background-color: rgb(3, 118, 3);
        color: white;
        border-color: rgb(3, 118, 3);
    }

    .btn-outline-custom {
        --bs-btn-color: #1A1B41 !;
        --bs-btn-border-color: #1A1B41;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #1A1B41;
        --bs-btn-hover-border-color: #1A1B41;
        --bs-btn-focus-shadow-rgb: 25, 135, 84;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #1A1B41;
        --bs-btn-active-border-color: #1A1B41;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #1A1B41;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: #1A1B41;
        --bs-gradient: none;
    }

    .btn-success:hover {
        border-radius: 20px;
        background-color: rgb(15, 95, 15);
        color: white;
        border-color: rgb(15, 95, 15);
    }

    /* Google Butonu Tasarımı */
    .btn-google {
        background-color: transparent;
        border-color: #db4437;
        border-radius: 20px;
        color: #db4437;
    }

    .btn-google:hover {
        background-color: #c5382a;
        border-color: #c5382a;
        border-radius: 20px;
    }

    /* Input alanları için grimsi arka plan ve kenar kaldırma */
    form .form-control {
        background-color: #f5f5f5;
        /* Grimsi arka plan */
        border: none;
        box-shadow: none;
        border-radius: 5px;
    }

    /* Input alanına tıklanınca kenar rengi ekleme */
    form .form-control:focus {
        outline: none;
        background-color: #eaeaea;
    }


    /* Input alanı arka plan uyumu */
    .form-control {
        background-color: #f5f5f5;
        border: none;
        box-shadow: none;
    }

    .form-control:focus {
        outline: none;
        background-color: #eaeaea;
    }

    /* Kırmızı Yuvarlak Çerçeve */
    .red-circle {
        background-color: #ff8d8dc8;
        /* Kırmızı arka plan */
        width: 80px;
        /* Çember genişliği */
        height: 80px;
        /* Çember yüksekliği */
        border-radius: 50%;
        /* Tam yuvarlak */
        display: flex;
        /* Merkezi hizalama için */
        justify-content: center;
        /* Yatayda ortalama */
        align-items: center;
        /* Dikeyde ortalama */

        overflow: hidden;
        /* Taşan görüntüyü gizleme */
        animation: moveCircle 2s ease-in-out infinite;
        /* Hareket animasyonu */
    }

    /* Simge Stili */
    .lock-icon {
        color: #fff;
        /* Beyaz simge rengi */
        font-size: 36px;
        /* Büyütülmüş simge boyutu */
    }


    /* Şifremi Unuttum? Linki */
    .forgot-password-link {
        color: black;
        /* Mavi renk */
        font-size: 15px;
        /* Küçük boyut */
        text-decoration: none;
        /* Alt çizgi yok */
    }

    .forgot-password-link:hover {
        text-decoration: underline;
        /* Hover efekti, alt çizgi ekler */
    }

    /* Sağ ve sola hareket animasyonu */
    @keyframes moveCircle {
        0% {
            transform: translateX(0);
            /* Başlangıç noktası */
        }

        50% {
            transform: translateX(20px);
            /* Sağ hareket */
        }

        100% {
            transform: translateX(0);
            /* Sonra tekrar başlangıç noktasına dön */
        }
    }

    .custom-navbar {
        background-color: #f8f9fa;
        /* Navbar arka plan rengi */
        padding: 60px 0;
        /* Daha geniş yapmak için yukarı ve aşağı padding */
    }

    .category-navbar {

        padding: 20px 0;
        /* Daha geniş yapmak için yukarı ve aşağı padding */
    }

    .navbar-brand {
        font-size: 1.5rem;
        /* Logonun boyutunu büyütmek için */
    }


    .d-flex.gap-5.align-items-center {
        justify-content: center;
        /* İkon ve dropdown'ı yatayda ortalama */
    }

    .dropdown-menu {
        text-align: center;
        /* Dropdown içeriğini ortalama */
    }

    @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

    .logo-font {
        font-family: 'Bangers', cursive;
        /* Eğlenceli, karikatürize font */
        font-size: 3rem;
        /* Yazı boyutunu büyüt */
        font-weight: bold;
        /* Kalın yap */
        color: #820933;
        /* Turuncu renk tonu */
        text-transform: none;
        /* Doğal harf boyutları */
        letter-spacing: 1px;
        /* Hafif harf aralığı */
    }

    .logo-font .us {
        color: #b63764;
        /* Yeşil renk */
        font-size: 3.5rem;
        /* `us` kısmını biraz daha büyük yap */
    }
</style>
<nav class="navbar navbar-expand-lg custom-navbar ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="/assets/images/logo3.png" width="233" height="233">
            </a>
            <form class="d-flex vw-25" role="search">
                <input class="form-control me-4 w-100 searchw" type="search" placeholder="Search" aria-label="Search"
                    style="border: 1px solid #1A1B41;">
                <button class="btn btn-outline-custom" type="submit">Search</button>
            </form>

            <div class="d-flex gap-5 align-items-center">
                <!-- konum -->
                <div class="border rounded p-2 d-flex align-items-center">
                    <i class="fa-solid fa-map-marker-alt"></i>
                    <span class="ms-2">@if(session()->has('address')){{session()->get('address')}} @else Türkiye
                        @endif</span>
                    <div class="dropdown ms-2">
                        <i class="fa-solid fa-chevron-down dropdown-toggle" id="locationDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="locationDropdown">
                            <li>
                                <div class="input-group">
                                    <span class="input-group-text border-0 bg-transparent"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" class="form-control" placeholder="İl ve İlçe Gir"
                                        aria-label="Search">
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary transparent-button" href="#"
                                    onclick="requestLocation();" role="button">
                                    Mevcut Konum Kullan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- konum -->
                <a @if(auth()->check()) href="{{route('listings.create')}}" @else data-bs-toggle="modal"
                    data-bs-target="#loginModal" @endif class="btn btn-outline-custom">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="@if(auth()->check()){{ auth()->user()->profile_picture}}@else{{config('auth.default_profile_picture_path')}} @endif"
                            alt="" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-start text-small shadow">
                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Kategoriler için düzenleme -->
<nav class="navbar mt-0 pt-0 category-navbar">
    <div class="container-fluid h-100 w-100 p-0 m-0">
        <div class="row g-0 justify-content-end align-items-stretch w-100 text-center h-100 p-0">
            <div class="col-4 category-bg-1 d-flex justify-content-center align-items-center ">
                <div class="dropdown text-center">
                    <i class="fa-solid fa-mobile-screen-button" style="color:White;"></i>
                    <a href="#" class="d-block text-white text-decoration-none" style="color:White;"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Telefon & Aksesuar
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-1 dropdown-menu-xxl-end dropdown-menu-start text-small shadow">
                        @foreach($firstCategorySubCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Diğer kategori elemanlarını aynı şekilde düzenle -->
            <div class="col-4 category-bg-2 d-flex justify-content-center align-items-center ">
                <div class="dropdown text-center">
                    <i class="fa-solid fa-laptop" style="color:White;"></i>
                    <a href="#" class="d-block  text-decoration-none" style="color:White;" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Bilgisayar & Tablet
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-2 dropdown-menu-lg-end dropdown-menu-start text-small shadow">
                        @foreach($secondCategorySubCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-4 category-bg-3 d-flex justify-content-center align-items-center ">
                <div class="dropdown text-center">
                    <i class="fa-solid fa-print" style="color:White;"></i>
                    <a href="#" class="d-block  text-decoration-none " style="color:White;" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Çevre Birimleri
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-3 dropdown-menu-lg-end dropdown-menu-start text-small shadow ">
                        @foreach($thirdCategorySubCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-3">
                <div class="rounded-circle red-circle">
                    <i class="fa-solid fa-lock-open lock-icon"></i>
                </div>
            </div>

            <div class="modal-body">
                <form action="{{route('login')}}" method="post">
                    <!-- E-posta veya Telefon -->
                    <div class="mb-3">
                        <i class="fa-regular fa-envelope-open"></i>
                        <label for="emailOrPhone" class="form-label ms-2">E-posta veya Telefon</label>
                        <input type="text" class="form-control" id="emailOrPhone"
                            placeholder="E-posta veya telefon girin">
                    </div>
                    <!-- Şifre -->
                    <div class="mb-4"> <!-- Alt alan için daha fazla boşluk -->
                        <i class="fa-regular fa-eye"></i>
                        <label for="password" class="form-label ms-2">Şifre</label>
                        <input type="password" class="form-control" id="password" placeholder="Şifre girin">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="text-center mb-3">
                        <a href="#" class="forgot-password-link">Şifremi Unuttum</a>
                    </div>
                    <!-- Giriş Yap Butonu -->
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-success w-75">Giriş Yap</button>
                    </div>
                    <!-- Google ile Giriş Yap butonu-->
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-danger btn-google w-75">
                            <i class="fa-brands fa-google me-2"></i> Google ile Giriş Yap
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

<script>
    let requestLocation = () => {
        navigator.geolocation.getCurrentPosition((position) => {
            $.ajax({
                url: '/api/save-location',
                method: 'POST',
                data: {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                    _token: "{{csrf_token()}}"
                },
                success: (data) => {
                    if (data.message == 'success') {
                        location.reload();
                    }
                }
            });
        });
    }
</script>