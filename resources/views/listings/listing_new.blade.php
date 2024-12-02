<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/listing.css">



    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <div class="container my-4">
        <div class="d-flex justify-content-between">

            <!-- Ürün Detayları Kısmı -->
            <div class="col-lg-7 me-3">

                <!-- Ürün Fotoğrafı ve Thumbnail Kutusu -->
                <div class="product-image-container">
                    <img src="{{$listing->getThumbnail()}}" alt="Ürün Fotoğrafı" class="product-image">
                    <!-- Kalp İkonu -->
                    @if(Auth::check() && $listing->user->id !== Auth::id())
                    <div class="heart-icon" onclick="addToFavorite('{{$listing->id}}');">
                        <i
                            class="@if(Auth::user()->isFavorited($listing->id)) fa-solid fa-heart text-danger @else fa-regular fa-heart @endif"></i>
                    </div>
                    @endif

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
                <div class="product-details-container">
                    <h5>{{$listing->title}}</h5>
                    <p>{!! $listing->descriptions !!}</p>
                    <hr>
                    <h5>Özellikler</h5>
                    <table class="table table-striped">
                        <tbody>
                            @foreach($listing->getParameters() as $parameter)
                            @php
                            debugbar()->info($parameter);
                            @endphp
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
                        <button class="btn btn-outline-custom" @if($listing->user->id !== auth()->id()) onclick="createConvo();" @else disabled @endif>Sohbet</button>
                        <!-- Sohbet butonu satıcı adı hizasında -->
                    </div>

                    <!-- Profil Butonu Kısmı -->
                    <div class="profile-button-container p-2 mt-3">
                        <a href="/profile/{{$listing->user->id}}" class="btn btn-outline-custom w-100">Profil</a>
                        <!-- Profil butonu satıcı adının altında -->
                    </div>
                </div>

                <!-- Fiyat Bilgisi Kısmı -->
                <div class="price-info mt-3">
                    <h5>{{$listing->price}} ₺</h5>
                </div>
                <div class="location-info mt-3">
                    <h5><b>Konum:</b>{{$listing->location}}</h5>
                    <!-- map -->
                    <div id="listing-map" style="height: 200px; width: 100%;"></div>

                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid mt-4" style="max-width: 80%;">


        <div class="row justify-content-center ml-5">
            <h4>İlginizi Çekebilecek Ürünler</h4>
            <!-- Ürün Kartı 1 -->
            @foreach($listings as $listing)
            <div class="col">
                <div class="card" style="width: 18rem; text-decoration: none;">
                    <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}"
                        style="text-decoration: none;">
                        <img src="{{$listing->getThumbnail()}}" class="card-img-top  p-3 pt-4" style="height: 300px">
                    </a>
                    @if(Auth::check() && $listing->user->id !== Auth::id())
                    <div class="heart-icon" onclick="addToFavorite('{{$listing->id}}');">
                        <i
                            class="@if(Auth::user()->isFavorited($listing->id)) fa-solid fa-heart text-danger @else fa-regular fa-heart @endif"></i>
                    </div>
                    @endif

                    <div class="card-body">
                        <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}"
                            style="text-decoration: none; color:inherit">
                            <h5 class="item-price large-price">{{$listing->price}} ₺</h5>
                            <p class="item-text mt-2">{{$listing->title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="location">{{$listing->location}}</p>
                                <p class="time">{{$listing->created_at->diffForHumans()}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Ürün Kartı 4 -->
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto py-3 fixed-buttom">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Şirket Adı. Tüm hakları saklıdır.</p>
        </div>
    </footer>

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <!-- Leaflet.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet.js JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        $(document).ready(() => {
            let lat = {{ $listing-> lat }};
            let lng = {{ $listing-> long}};
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

        let addToFavorite = id => {
            $.ajax({
                url: '/api/favorite/add',
                method: 'POST',
                data: {
                    listing_id: id,
                    _token: '{{csrf_token()}}'
                },
                success: response => {
                    if (response.success) {

                        PNotify.success({
                            text: response.msg,
                            delay: 2000
                        })

                        if (response.action === 'add') {
                            $(`[onclick="addToFavorite('${id}');"]`).html('<i class="fa-solid fa-heart text-danger"></i>')
                        } else {
                            $(`[onclick="addToFavorite('${id}');"]`).html('<i class="fa-regular fa-heart"></i>')
                        }
                    } else {
                        PNotify.error({
                            text: response.msg,
                            delay: 2000
                        })
                    }
                }
            })
        }

        let createConvo = () => {
            $.ajax({
                url: '/api/conversations/create',
                method: 'POST',
                data: {
                    recipient_id: '{{$listing->user->id}}',
                    listing_id: '{{$listing->id}}',
                    _token: '{{csrf_token()}}'
                },
                success: response => {

                        window.location.href = '/chat';
                },
                error: response => {
                    PNotify.error({
                        text: 'Sohbet oluşturulurken bir hata oluştu.',
                        delay: 2000
                    })
                }
            })
        }
    </script>
</body>

</html>
