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
<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-12">
                <img src="/assets/images/banner.jpg" alt="" style="border-radius: 10px;" width="1275" height="400">
            </div>
        </div>
        <div class="row justify-content-center gap-0" id="itemlist">
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

                    <div class="card-body" style=" height:200px;">
                        <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}"
                            style="text-decoration: none; color:inherit">
                            <h5 class="item-price large-price mt-3">{{$listing->price}} ₺</h5>
                            <p class="item-text mt-2">{{$listing->title}}</p>
                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <p class="location  me-5" style="word-wrap: break-word; font-size: 14px;">
                                    {{$listing->location}}</p>
                                <p class="time" style="font-size: 14px;">{{$listing->created_at->diffForHumans()}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center dahafazlayukle-btn my-4">
        <button class="btn btn-outline-custom" id="loadMore">Daha Fazla Yükle </button>
    </div>


     <!-- Footer -->
<footer class="text-light text-center text-lg-start py-5 mt-5">
    <div class="container">
        <!-- Kategoriler ve Arabul Başlığı -->
        <div class="row">
            <!-- Kategoriler -->
            <div class="col-md-6 text-center">
                <h5 class=" mb-4 px-3 py-2" style="display: inline-block; border:1px solid white; border-radius:10px;">Kategoriler</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Telefon & Aksesuar</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Bilgisayar & Tablet</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Çevre Birimleri</a></li>
                </ul>
            </div>

            <!-- Arabul Başlığı -->
            <div class="col-md-6 text-center">
                <h5 class="mb-4 px-3 py-2" style="display: inline-block; border:1px solid white; border-radius:10px;">arabul.us</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Kullanıcı Sözleşmesi</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Gizlilik Politikası</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Çerez Politikası</a></li>
                </ul>
            </div>
        </div>

        <!-- Sosyal Medya Linkleri -->
<div class="mt-4 d-flex justify-content-center gap-3">
    <!-- LinkedIn Butonu -->
    <a href="https://linkedin.com" target="_blank" class="btn-hesap rounded-circle p-3 d-flex align-items-center justify-content-center"
        style="width: 50px; height: 50px;">
        <i class="fa-brands fa-linkedin" style="font-size: 1.5rem;"></i>
    </a>
    <!-- GitHub Butonu -->
    <a href="https://github.com" target="_blank" class="btn-hesap rounded-circle p-3 d-flex align-items-center justify-content-center"
        style="width: 50px; height: 50px;">
        <i class="fa-brands fa-github" style="font-size: 1.5rem;"></i>
    </a>
</div>
        <!-- Alt Bilgi -->
        <p class="text-muted mt-4 mb-0 fw-bold" style="font-size:15px;">&copy; 2024 Şirket Adı. Tüm hakları saklıdır.</p>
    </div>
</footer>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(() => {
            // get items by location

            $('#loadMore').click(e => getItems());


            let getItems = () => {
                $.ajax({
                    url: '/api/homepage/listings-by-location',
                    method: 'GET',
                    success: (data) => {
                        if (data.message == 'trigger_location') {
                            // request location permission
                            navigator.geolocation.getCurrentPosition((position) => {
                                $.ajax({
                                    url: '/api/save-location',
                                    method: 'POST',
                                    data: {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude,
                                        _token: "{{csrf_token()}}"
                                    },
                                    success: (data) => {
                                        console.log(data.output[0].formatted_address)
                                        if (data.message == 'success') {
                                            $.ajax({
                                                url: '/api/homepage/listings-by-location',
                                                method: 'GET',
                                                success: (data) => {
                                                    $('#itemlist').empty();
                                                    data.items.forEach(listing => {

                                                        $('#itemlist').append(`
                    <div class="col-3">
                        <div class="card" style="width: 18rem; text-decoration: none;">
                            <a href="${listing.url}" style="text-decoration: none;">
                                <img src="${listing.thumbnail}" class="card-img-top  p-3 pt-4"
                                    style="height: 300px">
                            </a>
                            ${listing.show_favorite_button ? `
                            <div class="heart-icon" onclick="addToFavorite('${listing.id}');">
                                <i class="${listing.is_favorited ? `fa-solid fa-heart text-danger` : `fa-regular fa-heart`}"></i>
                            </div>` : ''}

                            <div class="card-body">
                                <a href="${listing.url}" style="text-decoration: none; color:inherit">
                                    <h5 class="item-price large-price">${listing.price} ₺</h5>
                                    <p class="item-text mt-2">${listing.title}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="location">${listing.location}</p>
                                        <p class="time">${listing.time}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                                                    `);

                                                    });
                                                }
                                            })
                                        }
                                    }
                                })
                            })
                        } else {
                            $('#itemlist').empty();
                            data.items.forEach(listing => {
                                $('#itemlist').append(`
                    <div class="col-3">
                        <div class="card" style="width: 18rem; text-decoration: none;">
                            <a href="${listing.url}" style="text-decoration: none;">
                                <img src="${listing.thumbnail}" class="card-img-top  p-3 pt-4"
                                    style="height: 300px">
                            </a>
                            ${listing.show_favorite_button ? `
                            <div class="heart-icon" onclick="addToFavorite('${listing.id}');">
                                <i class="${listing.is_favorited ? `fa-solid fa-heart text-danger` : `fa-regular fa-heart`}"></i>
                            </div>` : ''}

                            <div class="card-body"  style=" height:200px;">
                                <a href="${listing.url}" style="text-decoration: none; color:inherit">
                                    <h5 class="item-price large-price mt-3">${listing.price} ₺</h5>
                                    <p class="item-text mt-2">${listing.title}</p>
                                    <div class="d-flex justify-content-between align-items-center  mt-5">
                                        <p class="location me-5" style="word-wrap: break-word; font-size: 14px;">${listing.location}</p>
                                        <p class="time" style="font-size: 14px;">${listing.time}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                                                    `);
                            });
                        }

                    }

                })
            }
            getItems();

        });

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
    </script>

</body>

</html>
