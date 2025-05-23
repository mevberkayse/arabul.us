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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<style>
    /* @import kuralı en üstte olmalı */
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    body {
        font-family: 'Nunito', sans-serif;
    }

    /* Şikayet Nedeni sola hizalı */
    .modal-title {
        text-align: center;
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

    .checkboxbildirim {
        font-size: 18px;
    }

    .toggle-icon {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        font-size: 24px;
        /* İkon boyutunu ayarlamak için */
        color: #28a745;
        /* İkon rengi (isteğe bağlı) */
    }

    .rounded-circle {
        object-fit: cover;
        /* Profil resmini düzgün şekilde kesmek için */
    }

    .bildir-btn {
        color: white;
        background-color: #820933;
        border-color: #820933;
        width: 100px;
    }

    .bildir-btn:hover {
        color: #820933;
        background-color: white;
        border-color: #820933;
        width: 100px;
    }

    .fw-bold {
        font-weight: bold;
        color: black !important;
    }

    /* Başarı mesajı stil */
    .success-message {
        display: none;
        background-color: #4CAF50;
        /* Yeşil renk */
        color: white;
        padding: 15px;
        margin: 10px 0;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
        animation: fadeIn 1s;
    }

    /* Hata mesajı stil */
    .error-message {
        display: none;
        background-color: #f44336;
        /* Kırmızı renk */
        color: white;
        padding: 15px;
        margin: 10px 0;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
        animation: fadeIn 1s;
    }

    /* Fade in animasyonu */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    footer ul li a:hover {
    color: #ffc107; /* Hover rengi */
    text-decoration: underline;
}
footer ul li{
    margin-top: 5px;
}

footer {
    background-color:#820933; /* Koyu kırmızı */

}
/* Buton Normal Durumu */
.btn-hesap {
    border: 1px solid white;
    color: white;
    transition: all 0.3s ease; /* Hover geçiş animasyonu */
}

/* Hover Durumu */
.btn-hesap:hover {
    background-color: transparent; /* Hover'da arka plan rengi */
    color: #1a1b41; /* Metin rengi */
    border-color: #1a1b41; /* Hover'da mavi ton border */
    transform: translateY(-5px); /* Butonu yukarı hareket ettir */
}
</style>

<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')
    <div class="container mt-5 ">
        <div class="row">
            <!-- Sol taraftaki 3 kolonluk menü -->
            <div class="col-3">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <a href="#" id="tab-1" class=" fw-bold text-dark text-decoration-none" onclick="openTab(1);" data-opener="1">Gizlilik</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" id="tab-2" class="text-dark text-decoration-none" onclick="openTab(2);" data-opener="2">Bildirimler</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" id="tab-3" class="text-dark text-decoration-none" onclick="openTab(3);" data-opener="3">Profilimi Düzenle</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#logoutModal">Tüm cihazlardan çıkış yap</a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#deleteModal">Hesabımı sil</a>
                    </li>
                </ul>
            </div>

            <!-- Sağ taraftaki 6 kolonluk içerik -->
            <div class="col-6">
                <!-- Şifre Değiştir Bölümü -->
                <div id="content-1" class="content-section">
                    <div class="border p-3 mb-4" style="border-radius: 15px;">
                        <h5 class="mb-4 mt-2">Şifre Değiştir</h5>
                        <hr class="my-3 line">
                        <div class="position-relative mb-3">
                            <input type="password" class="form-control" placeholder="Mevcut şifrenizi girin" id="current-password" name="current-password">
                            <div class="toggle-password" data-input="current-password">
                                <i class="fa-regular fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor: pointer;"></i>
                            </div>
                        </div>
                        <div class="position-relative mb-3">
                            <input type="password" class="form-control" placeholder="Yeni şifrenizi girin" id="new-password" name="new-password">
                            <div class="toggle-password" data-input="new-password">
                                <i class="fa-regular fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor: pointer;"></i>
                            </div>
                        </div>
                        <div class="position-relative mb-3">
                            <input type="password" class="form-control" placeholder="Yeni şifreyi onaylayın" id="confirm-password" name="confirm-password">
                            <div class="toggle-password" data-input="confirm-password">
                                <i class="fa-regular fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-custom w-100">Kaydet</button>
                </div>

                <!-- Bildirimler Bölümü -->
                <div id="content-2" class="content-section d-none">
                    <div class="border p-3 mb-4" style="border-radius: 15px;">
                        <h5 class="mb-4 mt-2">Bildirimler</h5>
                        <hr class="my-3 line">
                        <div class="position-relative mb-3 d-flex justify-content-between align-items-center">
                            <p class="checkboxbildirim mb-0">Güncellemeler ve kampanyalar hakkında bildirim al</p>
                            <i class="fa-solid fa-toggle-on toggle-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- Profili Düzenle Bölümü -->
                <div id="content-3" class="content-section d-none">
                    <div class="border p-3 mb-4" style="border-radius: 15px;">
                        <h5 class="mb-4 mt-2">Profili Düzenle</h5>
                        <hr class="my-3 line">
                        <h5 class="mb-3 mt-4" style="font-size:18px;">Profil Resmi</h5>
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://via.placeholder.com/100" alt="Profil Resmi"
                                class="rounded-circle me-3" style="width: 100px; height: 100px;">
                            <label for="profile_picture_input" class="btn btn-outline-custom ms-auto" style="cursor: pointer;">
                                Değiştir
                            </label>
                        </div>
                        <form method="POST" action="{{ route('profile.update-picture') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Dosya seçiciyi gizle ve butona bağla -->
                            <input type="file" id="profile_picture_input" name="profile_picture" style="display: none;" required onchange="this.form.submit()">
                        </form>
                        <hr class="my-3 line">
                        <h5 class="mb-2 mt-4" style="font-size:18px;">İsim-Soyisim</h5>
                        <div class="d-flex align-items-center mb-4 mt-3">
                            <!-- Eski İsim-Soyisim -->
                            <input type="text" class="form-control me-3" id="current_name" value="{{ Auth::user()->name }}" disabled>
                            <!-- Yeni İsim-Soyisim -->
                            <input type="text" class="form-control me-3" id="new_name" placeholder="Yeni İsim-Soyisim">
                            <button class="btn btn-outline-custom" id="changeNameBtn">Değiştir</button>
                        </div>
                        <hr class="my-3 line">
                        <h5 class="mb-2" style="font-size:18px;">İletişim Bilgileri</h5>
                        <p class="mb-2 mt-4">E-mail</p>
                        <div class="d-flex align-items-center mt-3">
                            <!-- Eski E-mail -->
                            <input type="email" class="form-control me-3" id="current_email" value="{{ Auth::user()->email }}" disabled>
                            <!-- Yeni E-mail -->
                            <input type="email" class="form-control me-3" id="new_email" placeholder="Yeni E-mail">
                            <button class="btn btn-outline-custom" id="changeMail">Değiştir</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <!-- Footer -->
        @include('partials.footer')

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header flex-column border-0">
                    <h5 class="modal-title w-100" id="logoutModalLabel">Tüm cihazlardan çıkış yap</h5>
                </div>
                <div class="modal-body">
                    <p class="mb-3 mt-2">Tüm hesaplardan ve cihazlardan çıkış yapılacaktır. Devam etmek
                        istiyor
                        musunuz?</p>
                    <button type="button" class="btn bildir-btn me-3">Çıkış Yap</button>
                    <button type="button" class="btn btn-outline-custom"
                        data-bs-dismiss="modal">Vazgeç</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header flex-column border-0">
                    <h5 class="modal-title w-100" id="deletModalLabel">Hesabımı sil</h5>
                </div>
                <div class="modal-body">
                    <p class="mb-3 mt-2">Hesabınız devre dışı bırakıldığında işlem geri alınamaz.Hesabınızı
                        silmek istediğinizden emin misiniz?</p>
                    <button type="button" class="btn bildir-btn me-3 w-25">Hesabımı Sil</button>
                    <button type="button" class="btn btn-outline-custom"
                        data-bs-dismiss="modal">Vazgeç</button>
                </div>
            </div>
        </div>
    </div>
    <div id="successMessage" class="success-message"></div>
    <div id="errorMessage" class="error-message"></div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            openTab(1);

            // Başlangıçta "Gizlilik" sekmesini koyu yap
            const defaultTab = document.getElementById("tab-1");
            defaultTab.classList.add("fw-bold");
        });

        function openTab(tabId) {
            const allContents = document.querySelectorAll(".content-section");
            allContents.forEach(content => content.classList.add("d-none"));

            document.getElementById(`content-${tabId}`).classList.remove("d-none");


            const allTabs = document.querySelectorAll('ul.list-unstyled a');
            allTabs.forEach(tab => {
                tab.classList.remove("fw-bold");
            });


            const activeTab = document.getElementById(`tab-${tabId}`);
            activeTab.classList.add("fw-bold");
        }
    </script>
    <script>
        document.querySelectorAll('.toggle-password').forEach(function(icon) {
            icon.addEventListener('click', function() {
                // 'data-input' özniteliğinden input id'sini al
                var inputField = document.getElementById(this.getAttribute('data-input'));

                if (!inputField) {
                    console.error('Input alanı bulunamadı: ' + this.getAttribute('data-input'));
                    return; // Eğer input alanı bulunamazsa, işleme devam etme
                }

                // Şifreyi göster/gizle
                if (inputField.type === 'password') {
                    // içindeki i etiketinin class'ını değiştir
                    icon.querySelector('i').classList.remove('fa-eye-slash'); // Göz çizgisini kaldır
                    icon.querySelector('i').classList.add('fa-eye'); // Göz ikonunu ekle
                    inputField.type = 'text'; // Şifreyi göster

                } else {
                    inputField.type = 'password'; // Şifreyi gizle
                    icon.querySelector('i').classList.remove('fa-eye'); // Göz ikonunu kaldır
                    icon.querySelector('i').classList.add('fa-eye-slash'); // Göz çizgisini ekle
                }
            });
        });

        document.querySelectorAll('.toggle-password').forEach(function(icon) {
            icon.addEventListener('click', function() {
                console.log('İkona tıklandı!'); // Tıklama mesajını görmek için
                var inputField = document.getElementById(this.getAttribute('data-input'));
                console.log(inputField); // Hedeflenen input alanını görmek için
            });
        });
    </script>
    <script>
     document.getElementById('changeNameBtn').addEventListener('click', function() {
    // Yeni isim soyisim değerini al
    const newName = document.getElementById('new_name').value;

    if (!newName) {
        alert("Lütfen geçerli bir isim girin!");
        return;
    }

    // AJAX isteği gönder
    $.ajax({
        url: '/profile/update-name', // URL
        method: 'POST', // İstek metodu
        contentType: 'application/json', // Gönderilen verinin tipi
        data: JSON.stringify({
            name: newName,
            _token: "{{ csrf_token() }}" // CSRF token'ı data içinde gönderiyoruz
        }),
        success: function(response) {
            if (response.success) {
                // Başarı mesajını göster
                $('#successMessage').text(response.message).fadeIn().delay(3000).fadeOut();
                location.reload(); // Sayfayı yenileyerek değişikliği göster
            } else {
                // Hata mesajını göster
                $('#errorMessage').text("Bir hata oluştu: " + response.message).fadeIn().delay(3000).fadeOut();
            }
        },
        error: function(xhr, status, error) {
            // AJAX hata mesajı
            $('#errorMessage').text("Bir hata oluştu: " + error).fadeIn().delay(3000).fadeOut();
        }
    });
});

    </script>

<script>
     document.getElementById('changeMail').addEventListener('click', function() {
    // Yeni isim soyisim değerini al
    const newEmail = document.getElementById('new_email').value;

    if (!newEmail) {
        alert("Lütfen geçerli bir isim girin!");
        return;
    }

    // AJAX isteği gönder
    $.ajax({
        url: '/profile/update-email', // URL
        method: 'POST', // İstek metodu
        contentType: 'application/json', // Gönderilen verinin tipi
        data: JSON.stringify({
            email: newEmail,
            _token: "{{ csrf_token() }}" // CSRF token'ı data içinde gönderiyoruz
        }),
        success: function(response) {
            if (response.success) {
                // Başarı mesajını göster
                $('#successMessage').text(response.message).fadeIn().delay(3000).fadeOut();
                location.reload(); // Sayfayı yenileyerek değişikliği göster
            } else {
                // Hata mesajını göster
                $('#errorMessage').text("Bir hata oluştu: " + response.message).fadeIn().delay(3000).fadeOut();
            }
        },
        error: function(xhr, status, error) {
            // AJAX hata mesajı
            $('#errorMessage').text("Bir hata oluştu: " + error).fadeIn().delay(3000).fadeOut();
        }
    });
});

    </script>

<script>
    $(document).ready(function () {
        $('.btn.bildir-btn').click(function () {
            const csrfToken = "{{ csrf_token() }}"; // Blade içinde CSRF token'ı alıyoruz

            $.ajax({
                url: '/logout-all', // Çıkış endpoint'i
                type: 'POST',
                contentType: 'application/json', // JSON formatı
                dataType: 'json', // Sunucudan JSON formatında yanıt bekliyoruz
                data: JSON.stringify({
                    _token: csrfToken // CSRF token'ı JSON verisinin içinde gönderiyoruz
                }),
                success: function (response) {
                    if (response.success) {
                        alert(response.message); // Başarı mesajını göster
                        window.location.href = '/login'; // Login sayfasına yönlendir
                    }
                },
                error: function (xhr) {
                    console.error('Hata:', xhr.responseJSON.message); // Hata mesajını konsola yazdır
                    alert('Çıkış işlemi sırasında bir hata oluştu.');
                }
            });
        });
    });
</script>



</body>

</html>
