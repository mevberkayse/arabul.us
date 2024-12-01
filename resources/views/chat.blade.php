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

    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">


</head>
<style>
     /* @import kuralı en üstte olmalı */
     @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

body {
    font-family: 'Nunito', sans-serif;
}
    .chat-box:hover {
  background-color: #f8f9fa;
  cursor: pointer;
}

.chat-delete {
  cursor: pointer;
}

.chat-delete:hover {
  transform: scale(1.2);
}

.chat-body {
  height: 300px;
  overflow-y: auto;
  background-color: #f9f9f9;
  padding: 10px;
  border: 1px solid #ddd;
}

.chat-footer {
  background-color: #fff;
}
.text-muted {
  font-size: 0.875rem; 
  color: #6c757d; 
  display: block;/*blok olarak yanı satırın altı*/
  margin-top: 5px; /* Üstten biraz boşluk */
}
.container .border{
    border-radius: 5px;
}
.chat-body {
  height: 380px; 
  overflow-y: auto; 
  background-color: #f8f9fa; 
  border: 1px solid #ddd; 
  border-radius: 5px;
  padding: 10px; 
  font-size: 0.95rem;
}
/* Ortak Mesaj Stili */
.message-box {
  border: 1px solid #ddd;
  border-radius: 10px; 
  padding: 5px;
  margin-bottom: 10px; 
  max-width: 50%;
  font-size: 0.95rem; 
  word-wrap: break-word; /* Uzun kelimelerde satır kaydır */
}

/* Gönderen Mesajları */
.sender {
  background-color: #1a1b41; /* Açık gri arka plan */
  margin-left: auto; /* Mesajı sağa yasla */
  text-align: left; /* Metni sağa hizala */
  color: white;
}

/* Alıcı Mesajları */
.receiver {
  background-color: white; /* Daha açık gri arka plan */
  border-color:  #1a1b41;
  color: #1a1b41;
  margin-right: auto; /* Mesajı sola yasla */
  text-align: left; /* Metni sola hizala */
}
.custom-input {
    border: 1px solid #1a1b41 !important; /* Sınır rengini ve kalınlığını zorla uygular */
  border-radius: 5px !important; /* Kenarları yuvarlatır */
  padding: 6px; /* İç boşluk */
  box-shadow: none; /* Varsayılan gölgeyi kaldırır */
}

.custom-input:focus {
border-color: #1a1b41 !important; 
  outline: none;
  box-shadow: 0 0 5px rgba(52, 152, 219, 0.5) !important; /* Hafif mavi bir gölge */
}

.chat-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Butonun yerini sağa kaydırma */
.button-container {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-left: 10px; /* Buton ile input arasına biraz boşluk */
}
/* Butonun yuvarlak hale gelmesi */
.btn-custom {
  border-radius: 50%; /* Yuvarlak buton */
  padding: 10px; /* Butonun içeriğini büyütmek için */
}

.btn-custom i {
  color: white; 
}
.btn-custom:hover i {
  color: #1a1b41  !important; /* İkonun rengi beyaz */
  background-color:transparent;
}
</style>
<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')
    <div class="container border mt-4" style="border-radius:10px; border: 1px solid #1a1b41 !important; box-shadow: 0 0 5px rgba(52, 152, 219, 0.5) !important; ">
  <div class="row">
    <!-- Gelen Kutusu -->
    <div class="col-6 border-end" >
      <h5 class="mt-3 fw-bold text-center">GELEN KUTUSU</h5>
      <hr>
      <!-- Sohbet Kutuları -->
      <div class="chat-box d-flex align-items-center p-1 border-bottom">
        <img src="/assets/images/9187604.png" alt="Profil Foto" class="rounded-circle me-1" width="40" height="40"/>
        <div>
    <strong class="ms-2">Ahmet Yılmaz</strong><br />
    <span class=" ms-2 text-muted">Son mesaj: Merhaba, ürün hala satılık mı?</span>
  </div>
        <i class="fa-solid fa-xmark ms-auto text-danger chat-delete"></i>
      </div>
      <div class="chat-box d-flex align-items-center p-1 border-bottom">
        <img src="/assets/images/9187604.png" alt="Profil Foto" class="rounded-circle me-2" width="40" height="40" />
        <div>
        <strong class="ms-2">Mehmet Can</strong>
        <span class=" ms-2 text-muted">Son mesaj: Merhaba, ürün hala satılık mı?</span>
        </div>
        <i class="fa-solid fa-xmark ms-auto text-danger chat-delete"></i>
      </div>
      <div class="chat-box d-flex align-items-center p-1">
        <img src="/assets/images/9187604.png" alt="Profil Foto" class="rounded-circle me-2" width="40" height="40" />
        <div>
        <strong class="ms-2">Ayşe Kaya</strong>
        <span class="  ms-2 text-muted">Son mesaj: Merhaba, ürün hala satılık mı?</span>
        </div>
        <i class="fa-solid fa-xmark ms-auto text-danger chat-delete"></i>
      </div>
    </div>

    <!-- Sohbet -->
    <div class="col-6">
      <!-- Sohbet Başlık -->
      <div class="chat-header p-3 border-bottom d-flex justify-content-between align-items-center">
  <div class="d-flex align-items-center">
    <img src="/assets/images/9187604.png" alt="Profil Foto" class="rounded-circle me-2" width="40" height="40" />
    <div>
      <strong>Ahmet Yılmaz</strong><br />
      <small>Satılan Ürün: iPhone 14</small> <!-- satılan ürün id -->
    </div>
  </div>
  <div>
    <strong class="mt-2">10,000 TL</strong> <!-- Fiyat bilgisi -->
  </div>
</div>
      <!-- Sohbet Kutusu -->
      <div class="chat-body p-3">
      <div class="message-box sender">
    <p>Merhaba, ürün hala satılık mı?</p>
  </div>
  <div class="message-box receiver">
    <p>Satılık, ilgileniyor musunuz?</p>
  </div>
      </div>
      <!-- Mesaj Alanı -->
      <div class="chat-footer p-3 border-top">
  <div class="input-group">
    <input type="text" class="form-control custom-input" placeholder="Mesajınızı yazın..." />
  </div>
  <div class="button-container">
    <button class="btn btn-custom">
      <i class="fa-regular fa-paper-plane" ></i>
    </button>
  </div>
</div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start mt-auto py-3">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 arabul.us tüm hakları saklıdır.</p>
        </div>
    </footer>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
<script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

</body>

</html>
