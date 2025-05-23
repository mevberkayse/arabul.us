<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/preview.css">


    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
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
        <img src="/assets/images/logo3.png" alt="Logo" class="logo">
    </div>
    <div class="container  onizleme-container">
        <h1 class="mb-4 justify-content-center d-flex">İlan Önizleme</h1>
        <div class="d-flex justify-content-between">

            <!-- Ürün Detayları Kısmı -->
            <div class="col-lg-7 me-3">

                <div class="product-image-container">
                    <img src="{{$listing->getThumbnail()}}" alt="Ürün Fotoğrafı" class="product-image">

                    <!-- Sol ve Sağ İkonlar -->
                    @if(count($listing->getImagesArray()) > 1)
                    <i class="fa-solid fa-arrow-left icon-left" onclick="previousImage()"></i>
                    <i class="fa-solid fa-arrow-right icon-right" onclick="nextImage()"></i>


                    <!-- Küçük Ürün Fotoğrafları -->
                    <div class="thumbnail-container">
                        @foreach($listing->getImagesArray() as $key => $image)
                        <img src="{{$image}}" alt="Küçük Fotoğraf 1" class="thumbnail" data-id="{{$key}}"
                            onclick="setImage({{$key}})">
                        @endforeach
                    </div>
                    @endif

                </div>


                <!-- Ürün Detayları Kutusu -->
                <div class="product-details-container mb-3">
                    <h5>{{$listing->title}}</h5>
                    <p>{{$listing->description}}</p>
                    <hr>
                    <h5>Özellikler</h5>
                    <table class="table table-striped">
                        <tbody>
                            @foreach($listing->getParameters()  as $parameter)
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
                        <h5 class="mb-0 me-auto">{{$listing->user->name}}</h5>
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
                    <h5>{{$listing->price}} TL</h5>
                    @php
                    $parameters = $listing->getParameters();
                    @endphp

                </div>
                <div class="location-info mt-3">
                    <h5>Konum</h5>
                    <p>{{$listing->location}}</p>
                    <div id="listing-map" style="height: 200px; width: 100%;"></div>
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
            let lat = {{ $listing->lat }};
        let lng = {{ $listing->long }};
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
                        window.location.href = response.link;
                    });
                }
            );
        })
    </script>

</body>

</html>
