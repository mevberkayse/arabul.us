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
    <style>
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

        .btn-custom {
            --bs-btn-color: #fff;
            --bs-btn-bg: #1A1B41;
            --bs-btn-border-color: #1A1B41;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #1A1B41;
            --bs-btn-hover-border-color: #1A1B41;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #1A1B41;
            --bs-btn-active-border-color: #1A1B41;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #0d6efd;
            --bs-btn-disabled-border-color: #1A1B41;
        }

        .category .circle {
            border: 4px solid transparent;
            /* Varsayılan kenarlık görünmez */
            border-radius: 50%;
            /* Çember için */
            padding: 10px;
            transition: border 0.3s ease;
        }

        .category.selected .circle {
            border-color: #37BC61;
        }

        .logo {
            width: 200px;
            height: 200px;
        }

        .header {
            height: 80px;
            /* Header yüksekliğini sabitler */
            display: flex;
            align-items: center;
            /* İçeriği dikeyde ortalar */
            justify-content: flex-start;
            /* İçeriği yatayda sola hizalar */
            padding: 0 15px;
            /* İsteğe bağlı padding */
        }

        .back-button {
            border: 1px solid #1A1B41 !important;
            width: 40px;
            height: 40px;
            display: flex;
            /* Flexbox ile içerikleri hizalayacağız */
            align-items: center;
            /* Yatayda ortalar */
            justify-content: center;
            /* Dikeyde ortalar */
            padding: 0;
            /* İçeride fazladan boşluk olmaması için */
        }
    </style>
</head>

<body>
    <div class="header d-flex align-items-center p-3">
        <a href="{{route('listings.create', ['step' => 1])}}" class="back-button  border btn p-2 me-2">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>

        <!--<img src="logo.png" alt="Logo" class="logo"-->
        <img src="/assets/images/logo3.png" alt="Logo" class="logo">
    </div>

    <div class="container d-flex flex-column align-items-center mt-5">
        <!-- Adım Daireleri -->
        <div class="steps mb-3">
            <span class="step-circle1"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
        </div>
        <!-- Ana Kutucuk -->
        <div class="container d-flex flex-column align-items-center rounded mt-3 border p-4">
            <h5 class="text-center mb-3">Yüklenecek ürün kategorisi nedir?</h5>
            <!-- Kategoriler -->
            <div class="d-flex justify-content-between w-100">
                <div class="category" id="cat-1" onclick="highlightCategory('cat-1')">
                    <div class="circle" style="background-color: #1A1B41;">
                        <i class="fa-solid fa-mobile-screen-button" style="color:white;"></i>
                    </div>
                    <div class="category-name">Telefon & Aksesuar</div>
                </div>
                <div class="category" id="cat-2" onclick="highlightCategory('cat-2')">
                    <div class="circle" style="background-color: #820933;">
                        <i class="fa-solid fa-laptop" style="color:white;"></i>
                    </div>
                    <div class="category-name">Bilgisayar & Tablet</div>
                </div>
                <div class="category" id="cat-3" onclick="highlightCategory('cat-3')">
                    <div class="circle" style="background-color: #52154E;">
                        <i class="fa-solid fa-print" style="color:white;"></i>
                    </div>
                    <div class="category-name">Çevre Birimleri</div>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-custom mt-3 w-25" id="next_step">Devam Et</button>
    </div>


</body>

<script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
<script src="//https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let selectedCategory = 0;
</script>
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
@if(session('create_listing_category'))
<script>
    $(document).ready(() => {
        $(`#cat-{{session('create_listing_category')}}`).click();
        highlightCategory(`cat-{{session('create_listing_category')}}`);
        selectedCategory = {{session('create_listing_category')}};
    });
</script>
@endif
<script>
    $(document).ready(() => {
        $('.category').click((e) => {
            selectedCategory = $(e.currentTarget).attr('id').split('-')[1];
            $('.category').removeClass('selected');
            $(e.currentTarget).addClass('selected');
        })

        $('#next_step').click(() => {
            $.ajax({
                url: '/api/create-listing/step-2',
                method: 'POST',
                data: {
                    category: selectedCategory,
                    _token: "{{csrf_token()}}"
                },
                success: (data) => {
                    window.location.href = "{{route('listings.create',[3])}}";
                },
                error: (err) => {
                    PNotify.error({
                        text: 'Lütfen bir kategori seçin.',
                        delay: 2000
                    })
                }
            })
        })
    })
    function highlightCategory(selectedId) {
        //  'selected' sınıfını kaldır
        document.querySelectorAll('.category').forEach(category => {
            category.classList.remove('selected');
        });

        //  'selected' sınıfını ekle
        const selectedCategory = document.getElementById(selectedId);
        selectedCategory.classList.add('selected');
    }

</script>

</html>
