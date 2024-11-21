<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="onizle.css">
</head>

<body>
    <!-- Geri Tuşu ve Logo -->
    <div class="header d-flex align-items-center w-100 mb-4">
        <button class="back-button btn p-0 me-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>
        <h2>Logo</h2>
    </div>
    <div class="steps d-flex justify-content-center mb-4">
        <span class="step-circle1"></span>
        <span class="step-circle2"></span>
        <span class="step-circle3"></span>
        <span class="step-circle4"></span>
        <span class="step-circle5"></span>
    </div>
    <div class="container onizleme-container">
        <h1 class="mb-4 justify-content-center d-flex">İlan Önizleme</h1>
        <div class="d-flex justify-content-between">

            <!-- Ürün Detayları Kısmı -->
            <div class="col-lg-7 me-3">

                <!-- Ürün Fotoğrafı ve Thumbnail Kutusu -->
                <div class="product-image-container">
                    <img src="urunimg/iphone16.png" alt="Ürün Fotoğrafı" class="product-image">
                    <!-- Kalp İkonu -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <!-- Sol ve Sağ İkonlar -->
                    <i class="fa-solid fa-arrow-left icon-left"></i>
                    <i class="fa-solid fa-arrow-right icon-right"></i>

                    <!-- Küçük Ürün Fotoğrafları -->
                    <div class="thumbnail-container">
                        <img src="urunimg/iphone16.png" alt="Küçük Fotoğraf 1" class="thumbnail">
                        <img src="urunimg/iphone16.png" alt="Küçük Fotoğraf 2" class="thumbnail">
                        <img src="urunimg/iphone16.png" alt="Küçük Fotoğraf 3" class="thumbnail">
                    </div>
                </div>

                <!-- Ürün Detayları Kutusu -->
                <div class="product-details-container">
                    <h5>Ürün Başlığı</h5>
                    <p>Bu bölümde ürünle ilgili detaylı açıklamalar yer alacak.</p>
                </div>
            </div>

            <!-- Satıcı Profili ve Fiyat Bilgisi Kısımları -->
            <div class="col-lg-4 ms-3">

                <!-- Satıcı Profili Kısmı -->
                <div class="profile-info">
                    <div class="d-flex align-items-center">
                        <div class="profile-icon me-3">
                            <i class="fa-solid fa-user"></i> <!-- Profil simgesi -->
                        </div>
                        <h5 class="mb-0 me-auto">Satıcı Adı</h5>
                        <button class="btn btn-outline-custom">Sohbet</button>
                        <!-- Sohbet butonu satıcı adı hizasında -->
                    </div>

                    <!-- Profil Butonu Kısmı -->
                    <div class="profile-button-container p-2 mt-3">
                        <button class="btn  w-100 btn-outline-custom">Profil</button>
                        <!-- Profil butonu satıcı adının altında -->
                    </div>
                </div>

                <!-- Fiyat Bilgisi Kısmı -->
                <div class="price-info mt-3">
                    <h5>99.000 TL</h5>
                    <p>Pazarlık: <span class="pazarlik-durumu">Yok</span></p>
                    <p>Takas: <span class="pazarlik-durumu">Yok</span></p>
                </div>
                <div class="location-info mt-3">
                    <h5>Konum</h5>
                    <p>Gaziantep</p>
                </div>
                <div class="yayin-info mt-3">
                    <button class="btn  w-100 btn-custom ilan-btn">İlanı Yayınla</button>
                    <!-- Profil butonu satıcı adının altında -->
                </div>
            </div>