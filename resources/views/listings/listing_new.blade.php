<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/listing.css">
    
</head>

<body>
@include('partials.navbar')
    <div class="container my-4">
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
            <button class="btn btn-primary sohbet-btn">Sohbet</button> <!-- Sohbet butonu satıcı adı hizasında -->
        </div>

        <!-- Profil Butonu Kısmı -->
        <div class="profile-button-container p-2 mt-3">
            <button class="btn btn-info w-100 profil-btn">Profil</button> <!-- Profil butonu satıcı adının altında -->
        </div>
    </div>

    <!-- Fiyat Bilgisi Kısmı -->
    <div class="price-info mt-3">
        <h5 >99.000 TL</h5>
        <p>Pazarlık: <span class="pazarlik-durumu">Yok</span></p>
        <p>Takas: <span class="pazarlik-durumu">Yok</span></p>
    </div>
    <div class="location-info mt-3">
        <h5 >Konum</h5>
        
    </div>
    </div>
      
    </div>
  </div>
  <div class="related-products mt-4">
    <h4>İlgini Çekecek Ürünler</h4>
    <div class="product-slider position-relative">
        <button class="arrow left-arrow position-absolute"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="arrow right-arrow position-absolute"><i class="fa-solid fa-arrow-right"></i></button>
        
        <div class="row justify-content-center">
            <!-- Ürün Kartı 1 -->
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="item-price large-price">99.999 TL</h5>
                        <p class="item-text mt-2">İphone 16 Yeni</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="location">Gaziantep</p>
                            <p class="time">Dün</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ürün Kartı 2 -->
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="item-price large-price">99.999 TL</h5>
                        <p class="item-text mt-2">İphone 16 Yeni</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="location">Gaziantep</p>
                            <p class="time">Dün</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ürün Kartı 3 -->
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="item-price large-price">99.999 TL</h5>
                        <p class="item-text mt-2">İphone 16 Yeni</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="location">Gaziantep</p>
                            <p class="time">Dün</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ürün Kartı 4 -->
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/shopping.jpeg" class="card-img-top img-small" alt="...">
                    <div class="card-body">
                        <h5 class="item-price large-price">99.999 TL</h5>
                        <p class="item-text mt-2">İphone 16 Yeni</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="location">Gaziantep</p>
                            <p class="time">Dün</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     <!-- Footer -->
     <footer class="bg-light text-center text-lg-start mt-auto py-3 fixed-buttom">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Şirket Adı. Tüm hakları saklıdır.</p>
        </div>
    </footer>
</body>

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</html>