<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/step_7_8.css">


    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
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
                <input type="text" id="fiyat" class="form-control" placeholder="Fiyat giriniz"
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
                placeholder="Açıklama giriniz">@if(session()->has('create_listing_data')) {{session()->get('create_listing_data')['description']}} @endif</textarea>
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
        <div class="mb-3 w-100">
            <label for="telefon" class="form-label">Telefon Numarası</label>
            <input type="text" id="telefon" class="form-control" placeholder="Bir telefon numarası giriniz"
                @if(session()->has('create_listing_data')) value="{{session()->get('create_listing_data')['phone']}}"
            @endif>
        </div>

    </div>
    <!-- Devam Et Butonu -->
    <div class="text-center mt-5">
        <button class="btn btn-outline-custom mt-2 w-25" id="next_step">Devam Et</button>
    </div>

    <!-- Modal (Pop-Up Dropdown) -->

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>

    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/jquery.mask.min.js"></script>
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
        $(() => {
            $('#telefon').mask('(000) 000-0000', {
                placeholder: "(5__) ___-____"
            });
        })
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
                    phone: $('#telefon').val(),
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