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
    <link rel="stylesheet" href="/assets/css/create_listing.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<style>
     .logo {
            width:200px ;
            height: 200px;
        }
        .header {
            height: 80px; /* Header yüksekliğini sabitler */
    display: flex;
    align-items: center; /* İçeriği dikeyde ortalar */
    justify-content: flex-start; /* İçeriği yatayda sola hizalar */
    padding: 0 15px; /* İsteğe bağlı padding */
    top: 0; /* Üst kısımdan sıfır uzaklıkta */
    left: 0;
    right: 0;
}
.back-button {
    border: 1px solid #1A1B41 !important;
    width: 40px;
    height: 40px;
    display: flex; /* Flexbox ile içerikleri hizalayacağız */
    align-items: center; /* Yatayda ortalar */
    justify-content: center; /* Dikeyde ortalar */
    padding: 0; /* İçeride fazladan boşluk olmaması için */
}
.arrow{
    font-size: 14px;
}

</style>
<body>
    <!-- Geri Tuşu ve Logo -->
    <div class="header d-flex align-items-center p-3">
        <a href="{{route('listings.create', ['step' => 3])}}" class="back-button btn p-2 me-2">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <img src="/assets/images/logo3.png" alt="Logo" class="logo">
    </div>
    <div class="steps d-flex justify-content-center mb-1">
        <span class="step-circle1"></span>
        <span class="step-circle2"></span>
        <span class="step-circle3"></span>
        <span class="step-circle"></span>
        <span class="step-circle"></span>
    </div>
    <div class="container d-flex flex-column align-items-center mt-1">

        <!-- Form Kutusu -->

        <div class="border p-3 my-3 w-100">
            <div class="d-flex justify-content-between align-items-center">
                <span>Seçilen Kategori</span>
                <a href="#" class="text-primary">Değiştir</a>
            </div>
            <div class="mt-2">
                <strong>{{\App\Models\Category::where('id',
                    session('create_listing_subcategory'))->first()->name}}</strong>
            </div>
        </div>

        <!-- İlan Başlığı -->
        <div class="mb-3 w-100">
            <label for="ilan-basligi" class="form-label">İlan Başlığı *</label>
            <input type="text" id="ilan-basligi" class="form-control" placeholder="Başlık giriniz"
                @if(session()->has('create_listing_data')) value="{{session()->get('create_listing_data')['title']}}"
            @endif>
            <small class="text-danger">Zorunlu alan, min 3 karakter</small>
        </div>

        <!-- Fiyat -->
        <div class="mb-3 w-100">
            <label for="fiyat" class="form-label">Fiyat</label>
            <div class="input-group">
                <input type="number" id="fiyat" class="form-control" placeholder="Fiyat giriniz"
                    @if(session()->has('create_listing_data'))
                value="{{session()->get('create_listing_data')['price']}}" @endif>
                <span class="input-group-text" style="font-size: 18px; border-left: none!important;">₺</span>
            </div>
            <small class="text-danger">Doğru fiyatlandırınız</small>
        </div>

        <!-- Açıklama -->
        <div class="mb-3 w-100">
            <label for="aciklama" class="form-label">Açıklama</label>
            <textarea id="aciklama" class="form-control" rows="5"
                placeholder="Açıklama giriniz">@if(session()->has('create_listing_data')){{session()->get('create_listing_data')['description']}}@endif</textarea>
            <div class="d-flex justify-content-between">
                <small class="text-danger">Zorunlu alan</small>
                <small>0/1000</small>
            </div>
        </div>

        <!-- Konum -->
        <div class="mb-3 w-100 d-flex justify-content-between">
            <label for="konum" class="form-label" id="konumlabel">@if(session()->has('address'))Konum:
                {{session()->get('address')}} @else Konum @endif</label>
            <button id="konum-sec" class=" btn btn-custom w-25" onclick="getLocation()">Konumumu Getir</button>
        </div>

        <!-- İletişim Bilgileri -->
        <div class="mb-3 w-100">
            <label for="ad-soyad" class="form-label">Ad Soyad</label>
            <div class="d-flex gap-3">
                <input type="text" id="ad" class="form-control" placeholder="Ad" value="{{auth()->user()->name}}"
                    disabled readonly>
            </div>
        </div>

    </div>
    <!-- Devam Et Butonu -->
    <div class="text-center mt-5">
        <button class="btn btn-outline-custom mt-2 w-25" id="next_step">Devam Et</button>
    </div>

    <!-- Modal (Pop-Up Dropdown) -->

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    <script src="/assets/js/jquery.mask.min.js"></script>
    @if($errors->any())
    <script>
        $(document).ready(() => {
            PNotify.error({
                text: '{{$errors->first()}}',
                delay: 2000
            })
        });
    </script>
    @endif


    <script>

        window.userlocation = "{{session()->get('address')}}";
        let getLocation = () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        let showPosition = (position) => {
            let lat = position.coords.latitude;
            let lng = position.coords.longitude;
            $.ajax({
                method: 'POST',
                url: '/api/save-location',
                data: {
                    lat: lat,
                    lng: lng,
                    _token: '{{csrf_token()}}'
                },
            }).done((data) => {
                $('#konumlabel').text('Konum: ' + data.address);
                window.userlocation = data.address;
            })
        }
        $('#next_step').click(() => {
            $.ajax({
                url: '/api/create-listing/step-4',
                method: 'POST',
                data: {
                    _token: "{{csrf_token()}}",
                    title: $('#ilan-basligi').val(),
                    price: $('#fiyat').val(),
                    description: $('#aciklama').val(),
                    location: window.userlocation

                },
                success: (data) => {
                    window.location.href = '/ilan-yukle/5';
                }

            })
        })
    </script>
</body>

</html>
