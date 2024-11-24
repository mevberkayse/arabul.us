<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/preview.css">
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
                    <img src="{{session()->get('create_listing_images')[0]}}" alt="Ürün Fotoğrafı"
                        class="product-image">
                    <!-- Kalp İkonu -->
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <!-- Sol ve Sağ İkonlar -->
                    <i class="fa-solid fa-arrow-left icon-left"></i>
                    <i class="fa-solid fa-arrow-right icon-right"></i>

                    <!-- Küçük Ürün Fotoğrafları -->
                    <div class="thumbnail-container">
                        @php
                        $images = session()->get('create_listing_images');
                        // İlk fotoğrafı çıkar
                        array_shift($images);
                        @endphp
                        @foreach($images as $image)
                        <img src="{{$image}}" alt="Küçük Fotoğraf 1" class="thumbnail">
                        @endforeach
                    </div>
                </div>

                <!-- Ürün Detayları Kutusu -->
                <div class="product-details-container">
                    <h5>{{session()->get('create_listing_data')['title']}}</h5>
                    <p>{{session()->get('create_listing_data')['description']}}</p>
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
                        <h5 class="mb-0 me-auto">{{auth()->user()->name}}</h5>
                        <button class="btn btn-outline-custom disabled">Sohbet</button>
                        <!-- Sohbet butonu satıcı adı hizasında -->
                    </div>

                    <!-- Profil Butonu Kısmı -->
                    <div class="profile-button-container p-2 mt-3">
                        <button class="btn  w-100 btn-outline-custom disabled">Profil</button>
                        <!-- Profil butonu satıcı adının altında -->
                    </div>
                </div>

                <!-- Fiyat Bilgisi Kısmı -->
                <div class="price-info mt-3">
                    <h5>{{session()->get('create_listing_data')['price']}} TL</h5>
                    @php
                    $parameters = session()->get('create_listing_parameters');
                    @endphp
                    @foreach($parameters as $parameter)
                    <p>{{$parameter['name']}}: <span class="pazarlik-durumu">{{$parameter['value']}}</span></p>
                    @endforeach

                </div>
                <div class="location-info mt-3">
                    <h5>Konum</h5>
                    <p>{{session()->get('create_listing_data')['location']}}</p>
                </div>
                <div class="yayin-info mt-3">
                    <button class="btn  w-100 btn-custom ilan-btn" id="create">İlanı Yayınla</button>
                    <!-- Profil butonu satıcı adının altında -->
                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#create').click(
                () => {
                    $.ajax({
                        url: '/api/create-listing/step-6',
                        type: 'POST',
                        data: {
                            _token: '{{csrf_token()}}'
                        }
                    }).done((response) => {
                            console.log(response.data);
                            window.location.href = response.link;
                    });
                }
            );
        })
    </script>

</body>

</html>