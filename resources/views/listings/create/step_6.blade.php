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
    .product-details-container .table {
        background-color: white !important;
        border: none;
    }


    .product-details-container .table th {
        background-color: white !important;
        color: inherit;
    }

    /* Tablo hücrelerinin stilleri */
    .product-details-container .table td {
        background-color: transparent;
        border: none;
        color: #333;
    }

    .product-details-container .table tr:nth-child(odd) {
        background-color: white !important;
    }

    .product-details-container .table tr:nth-child(even) {
        background-color: white !important;
    }

    .product-details-container .table td:first-child {
        color: #777;
    }

    .product-details-container .table td:last-child {
        color: #000;
    }

    .product-details-container .table {
        border-spacing: 0 10px;
    }


    .product-details-container .table td,
    .product-details-container .table th {
        padding: 10px;
        background-color: white !important;

    }
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
    z-index: 1;
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
        <a href="{{route('listings.create', ['step' => 5])}}" class="back-button btn p-2 me-2">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <img src="/assets/images/logo3.png" alt="Logo" class="logo">
    </div>
    <div class="steps d-flex justify-content-center mb-4">
        <span class="step-circle1"></span>
        <span class="step-circle2"></span>
        <span class="step-circle3"></span>
        <span class="step-circle4"></span>
        <span class="step-circle5"></span>
    </div>
    <div class="container  onizleme-container">
        <h1 class="mb-4 justify-content-center d-flex">İlan Önizleme</h1>
        <div class="d-flex justify-content-between">

            <!-- Ürün Detayları Kısmı -->
            <div class="col-lg-7 me-3">

                <div class="product-image-container">
                    <img src="{{session()->get('create_listing_images')[0]}}" alt="Ürün Fotoğrafı" class="product-image">

                    <!-- Sol ve Sağ İkonlar -->
                    @if(count(session()->get('create_listing_images')) > 1)
                    <i class="fa-solid fa-arrow-left icon-left" onclick="previousImage()"></i>
                    <i class="fa-solid fa-arrow-right icon-right" onclick="nextImage()"></i>


                    <!-- Küçük Ürün Fotoğrafları -->
                    <div class="thumbnail-container">
                        @foreach(session()->get('create_listing_images') as $key => $image)
                        <img src="{{$image}}" alt="Küçük Fotoğraf 1" class="thumbnail" data-id="{{$key}}"
                            onclick="setImage({{$key}})">
                        @endforeach
                    </div>
                    @endif

                </div>


                <!-- Ürün Detayları Kutusu -->
                <div class="product-details-container mb-3">
                    <h5>{{session()->get('create_listing_data')['title']}}</h5>
                    <p>{{session()->get('create_listing_data')['description']}}</p>
                    <hr>
                    <h5>Özellikler</h5>
                    <table class="table table-striped">
                        <tbody>
                            @foreach(session()->get('create_listing_parameters') as $parameter)
                            <tr>
                                <td>{{$parameter['parameter_name']}}</td>
                                <td>{{$parameter['parameter_value']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

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

                </div>
                <div class="location-info mt-3">
                    <h5>Konum</h5>
                    <p>{{session()->get('create_listing_data')['location']}}</p>
                    <div id="listing-map" style="height: 200px; width: 100%;"></div>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Leaflet.js JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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
        $(document).ready(() => {
            let lat = {{ session()->get('lat') }};
        let lng = {{ session()->get('lng') }};
        const map2 = L.map('listing-map').setView([lat, lng], 15); // Kullanıcı konumu

        // OpenStreetMap Katmanı
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap Katkıda Bulunanlar'
        }).addTo(map2);

        // Konumu işaretle
        const userMarker = L.marker([lat, lng]).addTo(map2)
            .bindPopup('Ürün Konumu')
            .openPopup();

        })

        let currentImage = 0;
        let totalImages = document.querySelectorAll('.thumbnail').length;

        let setImage = id => {
            let images = document.querySelectorAll('.thumbnail');
            let productImage = document.querySelector('.product-image');

            images.forEach(image => {
                image.classList.remove('active');
            })

            images[id].classList.add('active');
            productImage.src = images[id].src;
            currentImage = id;
        }

        let nextImage = () => {
            currentImage++;
            if (currentImage >= totalImages) {
                currentImage = 0;
            }

            setImage(currentImage);
        }

        let previousImage = () => {
            currentImage--;
            if (currentImage < 0) {
                currentImage = totalImages - 1;
            }

            setImage(currentImage);
        }

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
                        PNotify.success({
                            text: 'İlanınız incelenmek üzere gönderildi. İnceleme sonucunda yayına alınacaktır.',
                            delay: 10000
                        });
                        setTimeout(() => {
                            window.location.href='/'
                        }, 2000);
                    });
                }
            );
        })
    </script>

</body>

</html>
