<style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

    /* Modalın Boyutunu Küçültme ve Karemsi Yapma */
    .custom-modal {
        max-width: 400px;
        /* Genişlik */
        border-radius: 10px;
        /* Köşeleri yuvarlama */
    }

    /* Modal Başlıklarını Renklendirme */
    .modal-title {
        font-weight: bold;
        color: #333;
        text-align: center;

    }

    .modal-header {
        border-bottom: none !important;
        /* Alt çizgiyi kaldırma */
    }

    .btn-success {
        border-radius: 20px;
        background-color: rgb(3, 118, 3);
        color: white;
        border-color: rgb(3, 118, 3);
    }

    .btn-outline-custom {
        --bs-btn-color: #1A1B41 !;
        --bs-btn-border-color: #1A1B41;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #1A1B41;
        --bs-btn-hover-border-color: #1A1B41;
        --bs-btn-focus-shadow-rgb: 25, 135, 84;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #1A1B41;
        --bs-btn-active-border-color: #1A1B41;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #1A1B41;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: #1A1B41;
        --bs-gradient: none;
    }

    .btn-success:hover {
        border-radius: 20px;
        background-color: rgb(15, 95, 15);
        color: white;
        border-color: rgb(15, 95, 15);
    }

    /* Google Butonu Tasarımı */
    .btn-google {
        background-color: transparent;
        border-color: #db4437;
        border-radius: 20px;
        color: #db4437;
    }

    .btn-google:hover {
        background-color: #c5382a;
        border-color: #c5382a;
        border-radius: 20px;
    }

    /* Input alanları için grimsi arka plan ve kenar kaldırma */
    form .form-control {
        background-color: #f5f5f5;
        /* Grimsi arka plan */
        border: none;
        box-shadow: none;
        border-radius: 5px;
    }

    /* Input alanına tıklanınca kenar rengi ekleme */
    form .form-control:focus {
        outline: none;
        background-color: #eaeaea;
    }


    /* Input alanı arka plan uyumu */
    .form-control {
        background-color: #f5f5f5;
        border: none;
        box-shadow: none;
    }

    .form-control:focus {
        outline: none;
        background-color: #eaeaea;
    }

    /* Kırmızı Yuvarlak Çerçeve */
    .red-circle {
        background-color: #820933;

        /* Kırmızı arka plan */
        width: 80px;
        /* Çember genişliği */
        height: 80px;
        /* Çember yüksekliği */
        border-radius: 50%;
        /* Tam yuvarlak */
        display: flex;
        /* Merkezi hizalama için */
        justify-content: center;
        /* Yatayda ortalama */
        align-items: center;
        /* Dikeyde ortalama */

        overflow: hidden;
        /* Taşan görüntüyü gizleme */
        animation: moveCircle 2s ease-in-out infinite;
        /* Hareket animasyonu */
    }

    /* Simge Stili */
    .lock-icon {
        color: #fff;
        /* Beyaz simge rengi */
        font-size: 36px;
        /* Büyütülmüş simge boyutu */
    }


    /* Şifremi Unuttum? Linki */
    .forgot-password-link {
        color: black;
        /* Mavi renk */
        font-size: 15px;
        /* Küçük boyut */
        text-decoration: none;
        /* Alt çizgi yok */
    }

    .forgot-password-link:hover {
        text-decoration: underline;
        /* Hover efekti, alt çizgi ekler */
    }

    /* Sağ ve sola hareket animasyonu */
    @keyframes moveCircle {
        0% {
            transform: translateX(0);
            /* Başlangıç noktası */
        }

        50% {
            transform: translateX(20px);
            /* Sağ hareket */
        }

        100% {
            transform: translateX(0);
            /* Sonra tekrar başlangıç noktasına dön */
        }
    }

    .custom-navbar {
        background-color: #f8f9fa;
        /* Navbar arka plan rengi */
        padding: 60px 0;
        /* Daha geniş yapmak için yukarı ve aşağı padding */
    }

    .category-navbar {

        padding: 20px 0;
        /* Daha geniş yapmak için yukarı ve aşağı padding */
    }

    .navbar-brand {
        font-size: 1.5rem;
        /* Logonun boyutunu büyütmek için */
    }


    .d-flex.gap-5.align-items-center {
        justify-content: center;
        /* İkon ve dropdown'ı yatayda ortalama */
    }

    .dropdown-menu {
        text-align: center;
        /* Dropdown içeriğini ortalama */
    }

    .logo-font {
        font-family: 'Bangers', cursive;
        /* Eğlenceli, karikatürize font */
        font-size: 3rem;
        /* Yazı boyutunu büyüt */
        font-weight: bold;
        /* Kalın yap */
        color: #820933;
        /* Turuncu renk tonu */
        text-transform: none;
        /* Doğal harf boyutları */
        letter-spacing: 1px;
        /* Hafif harf aralığı */
    }

    .logo-font .us {
        color: #b63764;
        /* Yeşil renk */
        font-size: 3.5rem;
        /* `us` kısmını biraz daha büyük yap */
    }

    .form-container {
        position: relative;
    }

    #search-results {
        position: absolute;
        top: 100%;
        /* Aligns top of results to bottom of the input field */
        left: 0;
        z-index: 1050;
        /* High z-index to ensure it's above other elements */
        width: 100%;
        /* Matches width of the input field */
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-height: 300px;
        /* Set a max height for scrollable results */
        overflow-y: auto;
    }

    .search-result-item {
        padding: 10px;
        cursor: pointer;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #eee;
    }

    .search-result-item:last-child {
        border-bottom: none;
    }

    .search-result-item:hover {
        background-color: #f0f0f0;
    }

    .dropdown-item {
        padding: 0.5rem 1rem !important;
    }

    .dropdown-menu-1 {
        max-height: 300px;
        /* Dropdown'un maksimum yüksekliğini belirler */
        max-width: 300px;
        ;
        /* Dropdown'un maksimum yüksekliğini belirler */
        padding: 0;
        /* Gereksiz boşlukları kaldırır */
        transform: translateX(-30%);
    }

    .dropdown-menu-2 {
        max-height: 200px;
        /* Dropdown'un maksimum yüksekliğini belirler */
        max-width: 300px;
        ;
        /* Dropdown'un maksimum yüksekliğini belirler */
        padding: 0;
        /* Gereksiz boşlukları kaldırır */
        transform: translateX(20%);
    }

    .dropdown-menu-3 {
        max-height: 250px;
        /* Dropdown'un maksimum yüksekliğini belirler */
        max-width: 300px;
        ;
        /* Dropdown'un maksimum yüksekliğini belirler */
        padding: 0;
        /* Gereksiz boşlukları kaldırır */
        transform: translateX(20%);
    }

    .transparent-button {
        background-color: transparent;
        /* Arka planı transparan yap */
        border: 2px solid #007bff;
        /* Mavi border */
        color: #007bff;
        /* Metin rengi mavi */
        padding: 0.5rem 1rem;
        /* Butonun iç boşlukları */
        border-radius: 0.25rem;
        /* Kenarları yuvarlaştır */
    }

    .transparent-button:hover {
        background-color: rgba(0, 123, 255, 0.1);
        /* Hover durumunda hafif bir arka plan rengi */
        transition: none;
        transform: none;
    }

    #searchMap {
        position: absolute !important;
        height: 100% !important;
        width: 97% !important;
    }

    /* Dropdown menüleri için yeni stiller */
    .dropdown-menu-1,
    .dropdown-menu-2,
    .dropdown-menu-3 {
        max-height: 300px;
        max-width: 300px;
        padding: 0;
        overflow-y: auto;
        overflow-x: hidden;
        scrollbar-width: thin;
        scrollbar-color: #820933 #f0f0f0;
        margin-top: 0.5rem;
    }

    /* Dropdown item hover durumu */
    .dropdown-menu-1 .dropdown-item:hover,
    .dropdown-menu-2 .dropdown-item:hover,
    .dropdown-menu-3 .dropdown-item:hover {
        background-color: #f0f0f0;
        white-space: normal;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Scrollbar stilleri */
    .dropdown-menu-1::-webkit-scrollbar,
    .dropdown-menu-2::-webkit-scrollbar,
    .dropdown-menu-3::-webkit-scrollbar {
        width: 6px;
    }

    .dropdown-menu-1::-webkit-scrollbar-track,
    .dropdown-menu-2::-webkit-scrollbar-track,
    .dropdown-menu-3::-webkit-scrollbar-track {
        background: #f0f0f0;
        border-radius: 3px;
    }

    .dropdown-menu-1::-webkit-scrollbar-thumb,
    .dropdown-menu-2::-webkit-scrollbar-thumb,
    .dropdown-menu-3::-webkit-scrollbar-thumb {
        background: #820933;
        border-radius: 3px;
    }

    .dropdown-menu-1::-webkit-scrollbar-thumb:hover,
    .dropdown-menu-2::-webkit-scrollbar-thumb:hover,
    .dropdown-menu-3::-webkit-scrollbar-thumb:hover {
        background: #6b0726;
    }
</style>
<nav class="navbar navbar-expand-lg custom-navbar ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="/assets/images/logo3.png" width="233" height="233">
            </a>
            <div class="form-container">
                <form class="d-flex vw-25" role="search" method="get" action="/search">
                    <input id="search-input" autocomplete="off" class="form-control me-4 w-100 searchw" type="search"
                        placeholder="Search" aria-label="Search" style="border: 1px solid #1A1B41;" name="query">
                    <button class="btn btn-outline-custom" type="submit">Search</button>
                </form>

                <!-- Search Results Dropdown -->
                <div id="search-results">
                    <!-- Results will be dynamically appended here -->
                </div>
            </div>

            <!-- Harita Modal -->
            <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mapModalLabel">Mevcut Konum</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Harita Buraya Yüklenecek -->
                            <div id="map" style="height: 500px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex gap-5 align-items-center">
                <!-- konum -->
                <div class="border rounded p-2 d-flex align-items-center">
                    <i class="fa-solid fa-map-marker-alt"></i>
                    <span class="ms-2" id="addressText">@if(session()->has('address')){{session()->get('address')}}
                        @else Türkiye
                        @endif</span>
                    <div class="dropdown ms-2">
                        <i class="fa-solid fa-chevron-down dropdown-toggle" id="locationDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu p-3" aria-labelledby="locationDropdown">
                            <li class="mt-2">
                                <a class="dropdown-item text-primary transparent-button" href="#" onclick="showMap();"
                                    role="button">
                                    Mevcut Konum Kullan
                                </a>
                                <a class="dropdown-item text-primary transparent-button" href="#" data-bs-toggle="modal"
                                    data-bs-target="#map2Modal">
                                    Haritada Ara
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- konum -->
                <a @if(auth()->check()) href="{{route('listings.create')}}" @else data-bs-toggle="modal"
                    data-bs-target="#loginModal" @endif class="btn btn-outline-custom">
                    <i class="fa-solid fa-plus"></i>
                </a>

                <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="@if(auth()->check()){{ auth()->user()->profile_picture}}@else{{config('auth.default_profile_picture_path')}} @endif"
                            alt="" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-start text-small shadow"
                        style="margin-top:17px;left:-120px">
                        @if(auth()->check())
                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Hesabım</a></li>
                        <li><a class="dropdown-item" href="/chat">Sohbetlerim</a></li>
                        <li><a class="dropdown-item" href="/favorilerim">Favori İlanlarım</a></li>
                        <li><a class="dropdown-item" href="/settings">Ayarlar</a></li>
                        <li><a class="dropdown-item" href="/yardim">Yardım</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                        @else
                        <li><a class="dropdown-item" href="{{route('login')}}">Giriş Yap</a></li>
                        <li><a class="dropdown-item" href="{{route('login')}}">Kayıt Ol</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="map2Modal" tabindex="-1" aria-labelledby="map2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="map2ModalLabel">Haritada Ara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="mapModalSearch" style="height: 75vh;">
                <div id="searchMap" style="width: 90%; height: 100%;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- Kategoriler için düzenleme -->
<nav class="navbar mt-0 pt-0 category-navbar">
    <div class="container-fluid h-100 w-100 p-0 m-0">
        <div class="row g-0 justify-content-end align-items-stretch w-100 text-center h-100 p-0">
                @foreach($mainCategories as $index => $category)
                <div class="col-4 category-bg-{{$index + 1}} d-flex justify-content-center align-items-center">
                    <div class="dropdown text-center position-relative w-100 h-100">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-book" style="color:White;"></i>
                            <span class="text-white text-decoration-none">{{$category->name}}</span>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-{{$index + 1}} text-small shadow position-absolute start-50 translate-middle-x">
                            @foreach($category->subCategories as $subCategory)
                            <li><a class="dropdown-item"
                                    href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-3">
                <div class="rounded-circle red-circle">
                    <i class="fa-solid fa-lock-open lock-icon"></i>
                </div>
            </div>

            <div class="modal-body">
                <form action="{{route('login')}}" method="post">
                    <!-- E-posta veya Telefon -->
                    <div class="mb-3">
                        <i class="fa-regular fa-envelope-open"></i>
                        <label for="emailOrPhone" class="form-label ms-2">E-posta Adresiniz</label>
                        <input type="text" class="form-control" id="emailOrPhone"
                            placeholder="E-posta veya telefon girin" name="email">
                    </div>
                    <!-- Şifre -->
                    <div class="mb-4"> <!-- Alt alan için daha fazla boşluk -->
                        <i class="fa-regular fa-eye"></i>
                        <label for="password" class="form-label ms-2">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Şifre girin">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="text-center mb-3">
                        <a href="#" class="forgot-password-link">Şifremi Unuttum</a>
                    </div>
                    <!-- Giriş Yap Butonu -->
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-success w-75">Giriş Yap</button>
                    </div>
                    <!-- Google ile Giriş Yap butonu-->
                    <div class="d-flex justify-content-center">
                        <button onclick="window.location.href='/login/google/redirect'" type="button" class="btn btn-danger btn-google w-75">
                            <i class="fa-brands fa-google me-2"></i> Google ile Giriş Yap
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

    let requestLocation = () => {
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
                    if (data.message == 'success') {
                        location.reload();
                    }
                }
            });
        }, error => {
            alert('Konum alınamadı. Lütfen tarayıcınızın konum izni verdiğinden emin olun.');
        }, {maximumAge:60000, timeout:5000, enableHighAccuracy:true});
    }


</script>

<!-- Leaflet.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet.js JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Leaflet.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet.js JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}"></script>
<script type="text/javascript" src="/assets/js/jquery.googlemap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    .infowindow-content {
        width: 200px;
        height: 200px;
        text-align: center;
        font-family: Arial, sans-serif;
        padding: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        background-color: #fff;
    }

    .infowindow-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .infowindow-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
        text-decoration: none;
        display: inline-block;
        transition: color 0.2s ease;
        /* Hover geçişi için */
    }

    .infowindow-title:hover {
        text-decoration: underline;
        color: #820933;
        /* Hover rengi beyaz */
    }

    .infowindow-price {
        font-size: 14px;
        color: #820933;
        font-weight: bold;
    }
</style>

<script>
    var gMap;
    let markersArray = [];
    function clearOverlays() {
        for (var i = 0; i < markersArray.length; i++) {
            markersArray[i].setMap(null);
        }
        markersArray.length = 0;
    }

    $(document).ready(function () {


        // when map2Modal is shown
        $('#map2Modal').on('shown.bs.modal', function () {
            navigator.geolocation.getCurrentPosition(pos => {
                let lat = pos.coords.latitude;
                let lng = pos.coords.longitude;
                // add a blue dot marker to the map for current location
                var latlng = new google.maps.LatLng(lat, lng);
                var myOptions = {
                    zoom: 12,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                gMap = new google.maps.Map(document.getElementById("searchMap"), myOptions);
                let currentLocationMarker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, lng),
                    title: "Şu anki konumunuz",
                    map: gMap,
                    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });


                google.maps.event.addListener(gMap, 'bounds_changed', _.throttle(function () {
                    let json = gMap.getBounds().toJSON();
                    $.ajax({
                        'url': '/api/listings-by-bounds',
                        'method': 'POST',
                        'data': {
                            'bounds': json,
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (data) {
                            // clear all markers first
                            clearOverlays();
                            console.log(data);
                            // add markers to the map
                            data.listings.forEach(listing => {

                                var infowindow = new google.maps.InfoWindow({
                                    content: `
                                        <div class="infowindow-content">
                                            <img src='${listing.thumbnail}' alt='Ürün Resmi' class='infowindow-image' height="100px" width="200px"/>
                                            <a href='${listing.url}' target='_blank' class='infowindow-title'>${listing.title}</a>
                                            <div class='infowindow-price'>${listing.price} ₺</div>
                                        </div>`
                                });
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(listing.lat, listing.lng),
                                    title: "Title for marker",
                                    map: gMap
                                });
                                markersArray.push(marker);
                                marker.addListener('click', function () {
                                    infowindow.open(gMap, marker);
                                });

                            });
                        }

                    })
                }, 1500));
            },error => {
                alert('Konum alınamadı. Lütfen tarayıcınızın konum izni verdiğinden emin olun.');
            }, {maximumAge:60000, timeout:5000, enableHighAccuracy:true})
        });
    });


    const $searchInput = $("#search-input");
    const $resultsContainer = $("#search-results");

    // Debounce function to limit AJAX calls
    let debounceTimer;
    const debounce = (callback, delay) => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(callback, delay);
    };

    // Function to handle AJAX search
    $searchInput.on("input", function () {
        const query = $(this).val().trim();

        // If input is empty, hide the results container
        if (query === "") {
            $resultsContainer.hide();
            return;
        }

        debounce(() => {
            $.ajax({
                url: `/api/search?query=${encodeURIComponent(query)}`,
                method: "GET",
                success: function (data) {
                    if (data && data.items && data.items.length > 0) {
                        // Populate the results container
                        const resultsHtml = data.items.map(listing =>
                            `<div class="search-result-item p-2">
                                    <div class="col-3">
    <div class="card d-flex flex-row align-items-center p-2" style="width: 100%; height: auto; text-decoration: none; border: 1px solid #ddd;">
        <!-- Thumbnail Section -->
        <a href="${listing.url}" style="text-decoration: none;">
            <img src="${listing.thumbnail}" class="card-img-left me-3"
                 style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
        </a>

        <!-- Content Section -->
        <div class="card-body p-2 d-flex flex-column justify-content-between" style="flex: 1;">
            <a href="${listing.url}" style="text-decoration: none; color: inherit;">
                <h6 class="item-price small-price mb-1">${listing.price} ₺</h6>
                <p class="item-text text-truncate mb-1" style="font-size: 14px; max-width: 100%;">${listing.title}</p>
                <div class="d-flex justify-content-between align-items-center" style="font-size: 12px;">
                    <span class="location">${listing.location}</span>
                    <span class="time text-muted">${listing.time}</span>
                </div>
            </a>
        </div>
    </div>
</div>

                                </div>`).join("");

                        $resultsContainer.html(resultsHtml).show();
                    } else {
                        // No results found
                        $resultsContainer.html('<div class="p-2 text-muted">No results found</div>').show();
                    }
                },
                error: function () {
                    $resultsContainer.html('<div class="p-2 text-danger">Error fetching results</div>').show();
                }
            });
        }, 300); // Debounce delay: 300ms
    });

    // Close results when clicking outside
    $(document).on("click", function (e) {
        if (!$(e.target).closest("#search-input, #search-results").length) {
            $resultsContainer.hide();
        }
    });

    // Optional: Add a hover effect to results
    $resultsContainer.on("mouseenter", ".search-result-item", function () {
        $(this).css("background-color", "#f0f0f0");
    }).on("mouseleave", ".search-result-item", function () {
        $(this).css("background-color", "");
    });
    function showMap() {
        // Kullanıcının konumunu al
        navigator.geolocation.getCurrentPosition((position) => {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;

            // Harita modalını göster
            $('#mapModal').modal('show');

            // Modal açıldığında haritayı yükle
            $('#mapModal').on('shown.bs.modal', function () {
                // Haritayı başlat
                const map = L.map('map').setView([lat, lng], 15); // Kullanıcı konumu

                // OpenStreetMap Katmanı
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap Katkıda Bulunanlar'
                }).addTo(map);

                // Konumu işaretle
                const userMarker = L.marker([lat, lng]).addTo(map)
                    .bindPopup('Mevcut Konumunuz')
                    .openPopup();

                // Modal kapatıldığında haritayı temizle
                $('#mapModal').on('hidden.bs.modal', function () {
                    map.remove();
                });
            });

            $.ajax({
                url: '/api/save-location',
                method: 'POST',
                data: {
                    lat: lat,
                    lng: lng,
                    _token: "{{csrf_token()}}"
                },
                success: (data) => {
                    if (data.message == 'success') {
                        //                        location.reload();
                        $('#addressText').text(data.address);
                    }
                }
            });
        }, (error) => {
            alert('Konum alınamadı. Lütfen tarayıcınızın konum izni verdiğinden emin olun.');
        }, {maximumAge:60000, timeout:5000, enableHighAccuracy:true});
    }
    document.addEventListener('DOMContentLoaded', function () {
        // Dropdown menüsüne tıklama olayını dinliyoruz
        var dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('click', function (event) {
                // Eğer tıklanan dropdown zaten açık değilse, önce tüm açık dropdown'ları kapatıyoruz
                var allDropdownMenus = document.querySelectorAll('.dropdown-menu.show');
                allDropdownMenus.forEach(function (menu) {
                    menu.classList.remove('show');
                });

                // Eğer tıklanan dropdown daha önce açılmamışsa, onu açıyoruz
                var menu = dropdown.querySelector('.dropdown-menu');
                if (!menu.classList.contains('show')) {
                    menu.classList.add('show');
                }
                // Diğer menülerin kapanmasını sağlamak için olayın yayılmasını durduruyoruz
                event.stopPropagation();
            });
        });

        // Sayfada başka bir yere tıklandığında tüm dropdown'ları kapatmak için
        document.addEventListener('click', function () {
            var allDropdownMenus = document.querySelectorAll('.dropdown-menu.show');
            allDropdownMenus.forEach(function (menu) {
                menu.classList.remove('show');
            });
        });
    });
</script>

</script>
