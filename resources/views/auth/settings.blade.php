<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>


</head>

<style>
    /* @import kuralı en üstte olmalı */
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    body {
        font-family: 'Nunito', sans-serif;
    }

    /* Şikayet Nedeni sola hizalı */
    .modal-title {
        text-align: left;
        margin-left: 0;
    }

    /* Modal genişlik */
    .modal-lg {
        max-width: 500px;
        max-height: 500px;
    }



    .dropdown-menu-1 {
        width: 550px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(35%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
        /* Varsayılan padding değerini artırabilirsiniz */
        margin-bottom: 0.2rem;
        /* Alt kısma küçük bir boşluk ekleyin */
        font-family: "Nunito", "arial", "sans-serif";
        font-size: 18px;
    }

    .dropdown-menu-2 {
        width: 550px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(35%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-menu-3 {
        width: 550px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(35%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-menu-4 {
        width: 380px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(30%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
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


    .category-list-content {
        list-style-type: none;
        /* Başındaki noktaları kaldırır */
        padding: 0;
        /* Varsayılan padding'i kaldırır */
    }

    .category-item a {
        color: black;
        /* Rengi siyah yapar */
        text-decoration: none;
        /* Alt çizgiyi kaldırır */
        padding: 0.5rem 1rem;
        /* Varsayılan padding değerini artırabilirsiniz */
        margin-bottom: 0.2rem;
        /* Alt kısma küçük bir boşluk ekleyin */
    }

    .category-item {
        transition: all 0.3s ease-in-out;
        /* Geçiş süresi ve animasyon stili */
        position: relative;
        /* Sağ kaydırmak için pozisyonlamayı ayarla */
    }

    .category-item:hover {
        background-color: transparent !important;
        /* Arka plan rengini transparan yap */
        transform: translateX(10px);
        /* Yazıyı sağa kaydır */
    }


    .input-group {
        align-items: center;
        /* İkon ve inputu aynı hizada tut */
    }

    .input-group-text {
        display: flex;
        /* İkonu ortalamak için */
        align-items: center;
        /* İkonu dikeyde ortala */
    }

    .btn-outline-custom {
        --bs-btn-color: #1a1b41;
        --bs-btn-border-color: #1a1b41;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #1a1b41;
        --bs-btn-hover-border-color: #1a1b41;
        --bs-btn-focus-shadow-rgb: 25, 135, 84;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #1a1b41;
        --bs-btn-active-border-color: #1a1b41;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #1a1b41;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: #1a1b41;
        --bs-gradient: none;
    }

    .btn-custom {
        --bs-btn-color: #fff;
        --bs-btn-bg: #1a1b41;
        --bs-btn-border-color: #1a1b41;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #1a1b41;
        --bs-btn-hover-border-color: #1a1b41;
        --bs-btn-focus-shadow-rgb: 49, 132, 253;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #1a1b41;
        --bs-btn-active-border-color: #1a1b41;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #fff;
        --bs-btn-disabled-bg: #0d6efd;
        --bs-btn-disabled-border-color: #1a1b41;
    }

    ul.list-unstyled li:first-child a {
        font-weight: bold;
        /* Yazıyı koyu yapmak için */
        color: #000;
        /* Rengi siyah yapmak için */
    }

    /* İkonun sağda görünmesi için hizalama */
    .position-relative {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }

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

    @media only screen and (max-width: 768px) {
        .col-3 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .toggle-password {
        pointer-events: auto;
        /* Tıklanabilir yap */
    }
</style>

<body>
    @include('partials.navbar')

    <div class="container mt-5">
        <div class="row">
            <!-- Sol taraftaki 3 kolonluk bölüm -->
            <div class="col-3">
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="#" class="text-dark text-decoration-none">Gizlilik</a></li>
                    <li class="mb-3"><a href="#" class="text-dark text-decoration-none">Bildirimler</a></li>
                    <li class="mb-3"><a href="#" class="text-dark text-decoration-none">İletişim Tercihleri</a></li>
                    <li class="mb-3"><a href="#" class="text-dark text-decoration-none">Tüm cihazlardan çıkış yap</a>
                    </li>
                    <li class="mb-3"><a href="#" class="text-dark text-decoration-none">Hesabımı sil</a></li>
                </ul>
            </div>

            <!-- Sağ taraftaki 6 kolonluk bölüm -->
            <div class="col-6">
                <div class="border p-3 mb-4" style="border-radius: 15px;">
                    <h5 class="mb-4 mt-2">Şifre Değiştir</h5>
                    <div class="position-relative mb-3">
                        <input type="password" class="form-control" placeholder="Mevcut şifrenizi girin"
                            id="current-password" name="current-password">
                        <div class="toggle-password" data-input="current-password"><i class="fa-regular fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-3"
                             style="cursor: pointer;"></i></div>
                    </div>
                    <!-- Yeni şifre girişi -->
                    <div class="position-relative mb-3">
                        <input type="password" class="form-control" placeholder="Yeni şifrenizi girin" id="new-password"
                            name="new-password">
                            <div class="toggle-password" data-input="new-password"><i class="fa-regular fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-3"
                                style="cursor: pointer;"></i></div>
                    </div>
                    <!-- Yeni şifreyi onaylama -->
                    <div class="position-relative mb-3">
                        <input type="password" class="form-control" placeholder="Yeni şifreyi onaylayın"
                            id="confirm-password" name="confirm-password">
                            <div class="toggle-password" data-input="confirm-password"><i class="fa-regular fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-3"
                                style="cursor: pointer;"></i></div>
                    </div>
                </div>
                <!-- Kaydet Butonu -->
                <button class="btn btn-outline-custom w-100">Kaydet</button>
            </div>




        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto py-3 fixed-bottom">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 arabul.us tüm hakları saklıdır.</p>
        </div>
    </footer>



    <script>
        document.querySelectorAll('.toggle-password').forEach(function (icon) {
            icon.addEventListener('click', function () {
                // 'data-input' özniteliğinden input id'sini al
                var inputField = document.getElementById(this.getAttribute('data-input'));

                if (!inputField) {
                    console.error('Input alanı bulunamadı: ' + this.getAttribute('data-input'));
                    return;  // Eğer input alanı bulunamazsa, işleme devam etme
                }

                // Şifreyi göster/gizle
                if (inputField.type === 'password') {
                    // içindeki i etiketinin class'ını değiştir
                    icon.querySelector('i').classList.remove('fa-eye-slash');  // Göz çizgisini kaldır
                    icon.querySelector('i').classList.add('fa-eye');  // Göz ikonunu ekle
                    inputField.type = 'text';  // Şifreyi göster

                } else {
                    inputField.type = 'password';  // Şifreyi gizle
                    icon.querySelector('i').classList.remove('fa-eye');  // Göz ikonunu kaldır
                    icon.querySelector('i').classList.add('fa-eye-slash');  // Göz çizgisini ekle
                }
            });
        });

        document.querySelectorAll('.toggle-password').forEach(function (icon) {
            icon.addEventListener('click', function () {
                console.log('İkona tıklandı!');  // Tıklama mesajını görmek için
                var inputField = document.getElementById(this.getAttribute('data-input'));
                console.log(inputField);  // Hedeflenen input alanını görmek için
            });
        });
    </script>
</body>

</html>
