<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/create_listing.css">
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
        <span class="step-circle"></span>
    </div>
    <div class="container d-flex flex-column align-items-center mt-5">

        <!-- Form Kutusu -->

        <div class="border p-3 my-3 w-100">
            <div class="d-flex justify-content-between align-items-center">
                <span>Seçilen Kategori</span>
                <a href="#" class="text-primary">Değiştir</a>
            </div>
            <div class="mt-2">
                <strong>Telefon</strong>
            </div>
        </div>

        <!-- İlan Başlığı -->
        <div class="mb-3 w-100">
            <label for="ilan-basligi" class="form-label">İlan Başlığı</label>
            <input type="text" id="ilan-basligi" class="form-control" placeholder="Başlık giriniz">
            <small class="text-danger">Zorunlu alan, min 3 karakter</small>
        </div>

        <!-- Fiyat -->
        <div class="mb-3 w-100">
            <label for="fiyat" class="form-label">Fiyat</label>
            <div class="input-group">
                <input type="text" id="fiyat" class="form-control" placeholder="Fiyat giriniz">
                <span class="input-group-text">TL</span>
            </div>
            <small class="text-danger">Doğru fiyatlandırınız</small>
        </div>

        <!-- Açıklama -->
        <div class="mb-3 w-100">
            <label for="aciklama" class="form-label">Açıklama</label>
            <textarea id="aciklama" class="form-control" rows="5" placeholder="Açıklama giriniz"></textarea>
            <div class="d-flex justify-content-between">
                <small class="text-danger">Zorunlu alan</small>
                <small>0/1000</small>
            </div>
        </div>

        <!-- Konum -->
        <div class="mb-3 w-100">
            <label for="konum" class="form-label">Konum</label>
            <button id="konum-sec" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                data-bs-target="#konumModal">Seç</button>
        </div>

        <!-- İletişim Bilgileri -->
        <div class="mb-3 w-100">
            <label for="ad-soyad" class="form-label">Ad Soyad</label>
            <div class="d-flex gap-3">
                <input type="text" id="ad" class="form-control" placeholder="Ad">
                <input type="text" id="soyad" class="form-control" placeholder="Soyad">
            </div>
        </div>
        <div class="mb-3 w-100">
            <label for="telefon" class="form-label">Telefon Numarası</label>
            <input type="text" id="telefon" class="form-control" placeholder="Bir telefon numarası giriniz">
        </div>

    </div>
    <!-- Devam Et Butonu -->
    <div class="text-center mt-5">
        <button class="btn btn-success mt-2 w-25">Devam Et</button>
    </div>

    <!-- Modal (Pop-Up Dropdown) -->
    <div class="modal fade" id="konumModal" tabindex="-1" aria-labelledby="konumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konumModalLabel">Konum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <button class="btn btn-success w-100 mb-3" id="mevcutKonum">Mevcut Konum</button>
                    <ul class="list-group" style="max-height: 300px; overflow-y: auto;">
                        <li class="list-group-item">Adana</li>
                        <li class="list-group-item">Adıyaman</li>
                        <li class="list-group-item">Afyonkarahisar</li>
                        <li class="list-group-item">...</li>
                        <li class="list-group-item">Zonguldak</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mevcut Konum Butonu Tıklandığında Backend'e Gönderilecek
        document.getElementById('mevcutKonum').addEventListener('click', () => {
            alert("Mevcut konum alınacak.");
        });
    </script>
    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>