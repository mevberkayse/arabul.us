<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">


    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3 border border-secondary p-3 rounded ">
                <h3 class="mb-4">Kategoriler</h3>
                <h5 class="mb-3"><a class="text-decoration-none text-black"
                        href='/ilanlar/{{$category->getParentCategory()->id}}'>@if($category->id ==
                        $category->getParentCategory()->id) <b> @endif {{$category->getParentCategory()->name}}
                            @if($category->id == $category->getParentCategory()->id) </b> @endif </a></h5>
                <ul class="category-list-content">
                    @foreach($category->getParentCategory()->getSubcategories() as $subcategory)
                    <li class="category-item mb-2"><a href="/ilanlar/{{$subcategory->id}}">@if($subcategory->id ==
                            $category->id) <b>@endif{{$subcategory->name}} @if($subcategory->id == $category->id)
                            </b>@endif<span>({{$subcategory->getListingCount()}})</span></a></li>
                    @endforeach

                </ul>
                <div class="my-5">
                    <h5 class="mb-3">Fiyat Aralığı</h5> <!-- Fiyat başlığı eklendi -->
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control me-2" placeholder="Min Fiyat" style="width: 45%;">
                        <input type="number" class="form-control me-2" placeholder="Max Fiyat" style="width: 45%;">
                        <button class="btn btn-custom">Ara</button>
                    </div>
                </div>
                <div class="my-5">
                    <h5>Konum</h5> <!-- Konum başlığı eklendi -->
                    <select class="form-select">
                        <option value="">Seçiniz...</option>
                        <option value="istanbul">İstanbul</option>
                        <option value="ankara">Ankara</option>
                        <option value="izmir">İzmir</option>
                        <option value="bursa">Bursa</option>
                        <option value="gaziantep">Gaziantep</option>
                        <option value="adana">Adana</option>
                    </select>
                </div>
                <div class="my-3">
                    <h5>Takas/Pazarlık</h5> <!-- Takas/Pazarlık başlığı -->
                    <select class="form-select">
                        <option value="">Seçiniz...</option>
                        <option value="takas_var">Takas Var</option>
                        <option value="pazarlik_var">Pazarlık Var</option>
                        <option value="ikisi_de_var">İkisi de Var</option>
                        <option value="yok">Yok</option>
                    </select>
                </div>
                <div class="filter-container mt-3 text-center">
                    <button class="btn btn-custom btn-sm">Filtreyi Temizle</button>
                </div>
            </div>

            <div class="col-9">
                <div class="category-listing-title my-3">
                    <span>{{$category->getListingCount()}} ilan bulundu</span>
                </div>
                <div class="row gap-3 justify-content-between">
                    @foreach($listings as $listing)
                    <div class="col">
                        <div class="card" style="width: 18rem; text-decoration: none;">
                            <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}" style="text-decoration: none;">
                                <img src="{{$listing->getThumbnail()}}" class="card-img-top  p-3 pt-4"
                                    style="height: 300px">
                            </a>
                            @if(Auth::check() && $listing->user->id !== Auth::id())
                            <div class="heart-icon" onclick="addToFavorite('{{$listing->id}}');">
                                <i class="@if(Auth::user()->isFavorited($listing->id)) fa-solid fa-heart text-danger @else fa-regular fa-heart @endif"></i>
                            </div>
                            @endif

                            <div class="card-body">
                                <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}" style="text-decoration: none; color:inherit">
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
                </div>
            </div>
        </div>
    </div>



    <div class="text-center dahafazlayukle-btn my-4">
        <button class="btn btn-outline-custom">Daha Fazla Yükle</button>
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

    <script>
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

                        if(response.action === 'add') {
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
