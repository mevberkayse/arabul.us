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
    .checkboxbildirim {
        font-size: 18px;
    }
    .toggle-icon {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 24px; /* İkon boyutunu ayarlamak için */
    color: #28a745; /* İkon rengi (isteğe bağlı) */
}
.rounded-circle {
    object-fit: cover; /* Profil resmini düzgün şekilde kesmek için */
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
    .custom-list li{
        margin-bottom: 15px;
    }
</style>

<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')


    <div class="container mt-2">
        <!-- Başlık -->
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="">Yardım Merkezi</h2>
            </div>
        </div>

        <div class="row mt-4" id="yasal">
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            <ul class="list-unstyled custom-list">
                    <li><a href="#" class="text-dark text-decoration-none">Yasal ve Gizlilik Bilgileri</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Hesap</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Nasıl Kullanırım</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Güvenlik ve Emniyet</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Mesajlaşma</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Satış</a></li>
                </ul>
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div class="col-6 ">
            <ul class="list-unstyled custom-list">
                    <li><a href="#" class="text-dark text-decoration-none">Bireysel Üyelik Sözleşmesi Aydınlatma Metni</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Aydınlatma Metni</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Müşteri Açık Rıza Metni</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Şartlar ve Koşullar</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Site Kullanım Koşulları</a></li>
                </ul>
            </div>
        </div> <hr class="my-3 line">
        <div class="row mt-4" id="hesap">
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div class="col-6 ">
            <h5>Profil Hakkında</h5>
            <ul class="list-unstyled custom-list">
                <li><a href="#" class="text-dark text-decoration-none">Tüm cihazlardan nasıl çıkış yapılır?</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Kullanıcı profilimi nasıl düzenleyebilirim?</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Bulunduğum konumu nasıl değiştirebilirim?</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Profilimi nasıl paylaşabilirim?</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Hesabımı nasıl silebilirim?</a></li>
                    
                <li><a href="#" class="text-dark text-decoration-none">Kaydolamıyorum</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Giriş yapamıyorum</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Doğrulama kodu aracılığıyla nasıl kaydolabilirim/giriş yapabilirim?</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Neden hesabım engellendi?</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Nasıl çıkış yaparım?</a></li>
    </ul>
                </div>
        
        </div>
         <hr class="my-3 line">
        <div class="row mt-4" id="nasil">
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div class="col-6 ">
            <ul class="list-unstyled custom-list">
                <h5>Nasıl Kullanırım</h5>
                <ul class="list-unstyled custom-list">
                        <li><a href="#" class="text-dark text-decoration-none">Başka birinin profiline nasıl bakabilirim?</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Uygulama dilini nasıl değiştirebilirim?</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Bildirim ayarlarımı nasıl yönetebilirim?</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Program hataları ve teknik destek</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Bir hatayı nasıl bildirebilirim?</a></li>
                </ul>
                </div>
        
        </div>
        <hr class="my-3 line">
        <div class="row mt-4" id="güvenlik">
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div class="col-6 ">
            <ul class="list-unstyled custom-list">
                <h5>Güvenlik ve emniyet</h5>
                <ul class="list-unstyled custom-list ">
    <li><a href="#" class="text-dark text-decoration-none">Topluluk kuralları</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Güvenlik önerilerimiz</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Reklam Politikası</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Ürünleri kargolamak mümkün mü?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Alıcıyla satıcı arasındaki ödeme</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Gizlilik</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Adresimi gösterecek misiniz?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Bir ilanı nasıl şikayet edebilirim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Bir kullanıcıyı nasıl şikayet edebilirim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Bir kullanıcının kanunları çiğnediğini düşünüyorsam ne yapmalıyım?</a></li>
</ul>
                </div>
        
        </div>
        <hr class="my-3 line">
        <div class="row mt-4" id="mesaj">
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div class="col-6 ">
            <ul class="list-unstyled custom-list">
                <h5>Mesajlaşma</h5>
                <ul class="list-unstyled custom-list">
    <li><a href="#" class="text-dark text-decoration-none">Diğer alıcı/satıcılar ile nasıl mesajlaşabilirim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Mesajlar nasıl silinir?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Sohbet bölümü aracılığıyla fotoğraf ve ek dosya gönderebilir miyim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Mesaj gönderemiyorum</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Bir kullanıcı mesajlarıma yanıt vermiyorsa ne yapmalıyım?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Mesajlaştığım bir kullanıcının hesabı silinmiş. Bu ne anlama geliyor?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Yeni mesajlar için bildirimleri nasıl etkinleştiririm?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Tüm bildirimleri okundu olarak nasıl işaretlerim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Bir satıcı veya alıcı ile buluşmak için yeri nasıl ayarlarım?</a></li>
</ul>

                </div>
        
        </div>
        <hr class="my-3 line">
        <div class="row mt-4" id="satis">
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div class="col-6 ">
            <ul class="list-unstyled custom-list">
                <h5>Satış</h5>
                <ul class="list-unstyled custom-list">
    <li><a href="#" class="text-dark text-decoration-none">Nasıl ilan yayınlayabilirim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Ne alıp satabilirim? Neler yasaklıdır?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Yayınladığım veya favorilerime eklediğim ilanların hepsini nerede görebilirim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Yayınladığım ilanları nasıl bulurum?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">İlanım neden hala yayınlanmadı?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Yayınladığım ilan neden yayından kaldırıldı?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Bir ilanı nasıl düzenlerim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">İlanımın konumunu nasıl değiştirebilirim?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">İlanım kaç kere görüntülendi?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">İlanların süresi neden dolar?</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Nasıl ürün satın alırım?</a></li>

</ul>

                </div>
        
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start mt-auto py-3 ">
                    <div class="container">
                        <p class="text-muted mb-0">&copy; 2024 arabul.us tüm hakları saklıdır.</p>
                    </div>
                </footer>
</body>

</html>
