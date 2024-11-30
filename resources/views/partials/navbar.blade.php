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
        padding: 0.2rem 1rem !important;
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
                    <input id="search-input" class="form-control me-4 w-100 searchw" type="search" placeholder="Search"
                        aria-label="Search" style="border: 1px solid #1A1B41;" name="query">
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
                    <span class="ms-2" id="addressText">@if(session()->has('address')){{session()->get('address')}} @else Türkiye
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
                        <li><a class="dropdown-item" href="/settings">Ayarlar</a></li>
                        <li><a class="dropdown-item" href="/favorilerim">Favori İlanlarım</a></li>

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
<!-- Kategoriler için düzenleme -->
<nav class="navbar mt-0 pt-0 category-navbar">
    <div class="container-fluid h-100 w-100 p-0 m-0">
        <div class="row g-0 justify-content-end align-items-stretch w-100 text-center h-100 p-0">
            <div class="col-4 category-bg-1 d-flex justify-content-center align-items-center ">
                <div class="dropdown text-center">
                    <i class="fa-solid fa-mobile-screen-button" style="color:White;"></i>
                    <a href="#" class="d-block text-white text-decoration-none" style="color:White;"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Telefon & Aksesuar
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-1 dropdown-menu-xxl-end dropdown-menu-start text-small shadow">
                        @foreach($firstCategorySubCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Diğer kategori elemanlarını aynı şekilde düzenle -->
            <div class="col-4 category-bg-2 d-flex justify-content-center align-items-center ">
                <div class="dropdown text-center">
                    <i class="fa-solid fa-laptop" style="color:White;"></i>
                    <a href="#" class="d-block  text-decoration-none" style="color:White;" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Bilgisayar & Tablet
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-2 dropdown-menu-lg-end dropdown-menu-start text-small shadow">
                        @foreach($secondCategorySubCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-4 category-bg-3 d-flex justify-content-center align-items-center ">
                <div class="dropdown text-center">
                    <i class="fa-solid fa-print" style="color:White;"></i>
                    <a href="#" class="d-block  text-decoration-none " style="color:White;" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Çevre Birimleri
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-3 dropdown-menu-lg-end dropdown-menu-start text-small shadow ">
                        @foreach($thirdCategorySubCategories as $subCategory)
                        <li><a class="dropdown-item"
                                href="{{route('listings.by_category', $subCategory->id)}}">{{$subCategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
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
                        <label for="emailOrPhone" class="form-label ms-2">E-posta veya Telefon</label>
                        <input type="text" class="form-control" id="emailOrPhone"
                            placeholder="E-posta veya telefon girin">
                    </div>
                    <!-- Şifre -->
                    <div class="mb-4"> <!-- Alt alan için daha fazla boşluk -->
                        <i class="fa-regular fa-eye"></i>
                        <label for="password" class="form-label ms-2">Şifre</label>
                        <input type="password" class="form-control" id="password" placeholder="Şifre girin">
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
                        <button type="button" class="btn btn-danger btn-google w-75">
                            <i class="fa-brands fa-google me-2"></i> Google ile Giriş Yap
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

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
        });
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

<script>

    $(document).ready(function () {
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
        });
    }
</script>

</script>
