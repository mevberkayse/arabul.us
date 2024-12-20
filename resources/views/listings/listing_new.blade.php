<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/listing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
</head>
<style>
    .duzenle-btn button {
    width: 100%; /* Buton genişliğini container'a eşitle */
    box-sizing: border-box; /* Padding ve border'ı dahil et */
}
.satildi-btn {
        color: white;
        background-color: #820933;
        border-color: #820933;
    }

    .satildi-btn:hover {
        color: #820933;
        background-color: white;
        border-color: #820933;
    }
    footer ul li a:hover {
    color: #ffc107; /* Hover rengi */
    text-decoration: underline;
}
footer ul li{
    margin-top: 5px;
}

footer {
    background-color:#820933; /* Koyu kırmızı */

}
/* Buton Normal Durumu */
.btn-hesap {
    border: 1px solid white;
    color: white;
    transition: all 0.3s ease; /* Hover geçiş animasyonu */
}

/* Hover Durumu */
.btn-hesap:hover {
    background-color: transparent; /* Hover'da arka plan rengi */
    color: #1a1b41; /* Metin rengi */
    border-color: #1a1b41; /* Hover'da mavi ton border */
    transform: translateY(-5px); /* Butonu yukarı hareket ettir */
}
</style>
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
                        <a href="/kullanici-profili/{{$listing->user->id}}" class="btn btn-outline-custom w-100">Profil</a>
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
                @if(Auth::check() && $listing->user->id === Auth::id())
                <div class="duzenle-btn mt-3 w-100">
                    <button class="btn btn-outline-custom" onclick="startEditing();">
                        İlanı Düzenle
                    </button>
                </div>
                <div class="duzenle-btn mt-3 w-100">
                    <button class="btn satildi-btn" data-bs-toggle="modal" data-bs-target="#satildiModal">
                        Ürünüm Satıldı
                    </button>
                </div>
                @endif

            </div>

        </div>
    </div>
    <div class="container-fluid mt-4" style="max-width: 80%;">


        <div class="row justify-content-center ml-5">
            <h4>İlginizi Çekebilecek Ürünler</h4>
            <!-- Ürün Kartı 1 -->
            @foreach($listings as $related)
            <div class="col">
                <div class="card" style="width: 18rem; text-decoration: none;">
                    <a href="{{route('listings.show', [$related->id, '-', $related->slug])}}"
                        style="text-decoration: none;">
                        <img src="{{$related->getThumbnail()}}" class="card-img-top  p-3 pt-4" style="height: 300px">
                    </a>
                    @if(Auth::check() && $related->user->id !== Auth::id())
                    <div class="heart-icon" onclick="addToFavorite('{{$related->id}}');">
                        <i
                            class="@if(Auth::user()->isFavorited($related->id)) fa-solid fa-heart text-danger @else fa-regular fa-heart @endif"></i>
                    </div>
                    @endif

                    <div class="card-body" style=" height:200px;">
                        <a href="{{route('listings.show', [$related->id, '-', $related->slug])}}"
                            style="text-decoration: none; color:inherit">
                            <h5 class="item-price large-price mt-3">{{$related->price}} ₺</h5>
                            <p class="item-text mt-2">{{$related->title}}</p>
                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <p class="location  me-5" style="word-wrap: break-word; font-size: 14px;">
                                    {{$related->location}}</p>
                                <p class="time" style="font-size: 14px;">{{$related->created_at->diffForHumans()}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Ürün Kartı 4 -->
        </div>
    </div>
    <div class="modal fade" id="satildiModal" tabindex="-1" aria-labelledby="satildiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header flex-column border-0">
                    <h5 class="modal-title w-100" id="satildiModalLabel">Ürünü Satıştan Kaldır</h5>
                </div>
                <div class="modal-body">
                    <p class="mb-3 mt-2">Ürününüzün satıldığını onaylıyor musunuz?</p>
                    <button type="button" class="btn satildi-btn me-3" onclick="markAsSold();">Ürünüm Satıldı</button>
                    <button type="button" class="btn btn-outline-custom"
                        data-bs-dismiss="modal">Vazgeç</button>
                </div>
            </div>
        </div>
    </div>
  <!-- Footer -->
@include('partials.footer')

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <!-- Leaflet.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet.js JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

@if(Auth::check() && $listing->user->id === Auth::id())
<script>
    let markAsSold = () => {
        // close the modal

        $.ajax({
            url: '/api/listings/mark-as-sold',
            method: 'POST',
            data: {
                listing_id: '{{$listing->id}}',
                _token: '{{csrf_token()}}'
            },
            success: response => {
                if (response.success) {
                    $('#satildiModal').modal('hide');
                    PNotify.success({
                        text: response.msg,
                        delay: 2000
                    })

                    setTimeout(() => {
                        window.location.href = '/';
                    }, 2000)
                } else {
                    PNotify.error({
                        text: response.msg,
                        delay: 2000
                    })
                }
            }
        })
    }

    let startEditing = () => {
        // we need to redirect to the edit page after an ajax request
        $.ajax({
            url: '/api/listing/edit',
            method: 'POST',
            data: {
                listing_id: '{{$listing->id}}',
                _token: '{{csrf_token()}}'
            },
            success: response => {
                if (response.success) {
                    window.location.href = response.link
                } else {
                    PNotify.error({
                        text: response.msg,
                        delay: 2000
                    })
                }
            }
        })
    }
</script>
@endif

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
                    recipient_id: '{{$listing->user_id}}',
                    listing_id: '{{$listing->id}}',
                    _token: '{{csrf_token()}}'
                },
                success: response => {
                        if(response.status == 'ok') {
                            window.location.href = '/chat?chat_id=' + response.conversation.id;
                        } else {
                            PNotify.error({
                                text: response.msg,
                                delay: 2000
                            })
                        }

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
