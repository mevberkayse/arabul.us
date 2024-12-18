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
                <hr>
                <div class="my-2">
                    <h5 class="mb-3">Fiyat Aralığı</h5> <!-- Fiyat başlığı eklendi -->
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control me-2" min="0" name="min_price" id="min_price"
                            placeholder="Min Fiyat" style="width: 50%;">
                        <input type="number" class="form-control me-2" max="999999" name="max_price" id="max_price"
                            placeholder="Max Fiyat" style="width: 50%;">
                    </div>
                </div>
                <hr>
                <div class="my-2">
                    <h5>Konum</h5> <!-- Konum başlığı eklendi -->
                    <select name="sehir" class="form-select">
                        <option value="null" selected disabled>Seçiniz...</option>
                        <option name="sehir" value="Adana">Adana</option>
                        <option name="sehir" value="Adıyaman">Adıyaman</option>
                        <option name="sehir" value="Afyon">Afyon</option>
                        <option name="sehir" value="Ağrı">Ağrı</option>
                        <option name="sehir" value="Aksaray">Aksaray</option>
                        <option name="sehir" value="Amasya">Amasya</option>
                        <option name="sehir" value="Ankara">Ankara</option>
                        <option name="sehir" value="Antalya">Antalya</option>
                        <option name="sehir" value="Ardahan">Ardahan</option>
                        <option name="sehir" value="Artvin">Artvin</option>
                        <option name="sehir" value="Aydın">Aydın</option>
                        <option name="sehir" value="Balıkesir">Balıkesir</option>
                        <option name="sehir" value="Bartın">Bartın</option>
                        <option name="sehir" value="Batman">Batman</option>
                        <option name="sehir" value="Bayburt">Bayburt</option>
                        <option name="sehir" value="Bilecik">Bilecik</option>
                        <option name="sehir" value="Bingöl">Bingöl</option>
                        <option name="sehir" value="Bitlis">Bitlis</option>
                        <option name="sehir" value="Bolu">Bolu</option>
                        <option name="sehir" value="Burdur">Burdur</option>
                        <option name="sehir" value="Bursa">Bursa</option>
                        <option name="sehir" value="Çanakkale">Çanakkale</option>
                        <option name="sehir" value="Çankırı">Çankırı</option>
                        <option name="sehir" value="Çorum">Çorum</option>
                        <option name="sehir" value="Denizli">Denizli</option>
                        <option name="sehir" value="Diyarbakır">Diyarbakır</option>
                        <option name="sehir" value="Düzce">Düzce</option>
                        <option name="sehir" value="Edirne">Edirne</option>
                        <option name="sehir" value="Elazığ">Elazığ</option>
                        <option name="sehir" value="Erzincan">Erzincan</option>
                        <option name="sehir" value="Erzurum">Erzurum</option>
                        <option name="sehir" value="Eskişehir">Eskişehir</option>
                        <option name="sehir" value="Gaziantep">Gaziantep</option>
                        <option name="sehir" value="Giresun">Giresun</option>
                        <option name="sehir" value="Gümüşhane">Gümüşhane</option>
                        <option name="sehir" value="Hakkari">Hakkari</option>
                        <option name="sehir" value="Hatay">Hatay</option>
                        <option name="sehir" value="Iğdır">Iğdır</option>
                        <option name="sehir" value="Isparta">Isparta</option>
                        <option name="sehir" value="İstanbul">İstanbul</option>
                        <option name="sehir" value="İzmir">İzmir</option>
                        <option name="sehir" value="Kahramanmaraş">Kahramanmaraş</option>
                        <option name="sehir" value="Karabük">Karabük</option>
                        <option name="sehir" value="Karaman">Karaman</option>
                        <option name="sehir" value="Kars">Kars</option>
                        <option name="sehir" value="Kastamonu">Kastamonu</option>
                        <option name="sehir" value="Kayseri">Kayseri</option>
                        <option name="sehir" value="Kırıkkale">Kırıkkale</option>
                        <option name="sehir" value="Kırklareli">Kırklareli</option>
                        <option name="sehir" value="Kırşehir">Kırşehir</option>
                        <option name="sehir" value="Kilis">Kilis</option>
                        <option name="sehir" value="Kocaeli">Kocaeli</option>
                        <option name="sehir" value="Konya">Konya</option>
                        <option name="sehir" value="Kütahya">Kütahya</option>
                        <option name="sehir" value="Malatya">Malatya</option>
                        <option name="sehir" value="Manisa">Manisa</option>
                        <option name="sehir" value="Mardin">Mardin</option>
                        <option name="sehir" value="Mersin">Mersin</option>
                        <option name="sehir" value="Muğla">Muğla</option>
                        <option name="sehir" value="Muş">Muş</option>
                        <option name="sehir" value="Nevşehir">Nevşehir</option>
                        <option name="sehir" value="Niğde">Niğde</option>
                        <option name="sehir" value="Ordu">Ordu</option>
                        <option name="sehir" value="Osmaniye">Osmaniye</option>
                        <option name="sehir" value="Rize">Rize</option>
                        <option name="sehir" value="Sakarya">Sakarya</option>
                        <option name="sehir" value="Samsun">Samsun</option>
                        <option name="sehir" value="Siirt">Siirt</option>
                        <option name="sehir" value="Sinop">Sinop</option>
                        <option name="sehir" value="Sivas">Sivas</option>
                        <option name="sehir" value="Şanlıurfa">Şanlıurfa</option>
                        <option name="sehir" value="Şırnak">Şırnak</option>
                        <option name="sehir" value="Tekirdağ">Tekirdağ</option>
                        <option name="sehir" value="Tokat">Tokat</option>
                        <option name="sehir" value="Trabzon">Trabzon</option>
                        <option name="sehir" value="Tunceli">Tunceli</option>
                        <option name="sehir" value="Uşak">Uşak</option>
                        <option name="sehir" value="Van">Van</option>
                        <option name="sehir" value="Yalova">Yalova</option>
                        <option name="sehir" value="Yozgat">Yozgat</option>
                        <option name="sehir" value="Zonguldak">Zonguldak</option>
                    </select>
                </div>
                <hr>
                @foreach($category->getParameters() as $param)
                @php
                $values = explode(',', $param->parameter_value);
                @endphp

                <div class="my-3">
                    <h5>{{$param->parameter_name}}</h5> <!-- Parametre Başlığı -->
                    <select name="parameter_{{$param->id}}" class="form-select">
                        <option disabled value="null" selected>Seçiniz...</option>
                        @foreach($values as $value)
                        <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
                <div class="filter-container mt-3 text-center">
                    <button class="btn btn-outline-custom btn-sm" id="filter">Ürünleri Filtrele</button>
                    <button class="btn btn-custom btn-sm" id="clear">Filtreyi Temizle</button>
                </div>
            </div>

            <div class="col-9">
                <div class="category-listing-title my-3">
                    <span>{{$category->getListingCount()}} ilan bulundu</span>
                </div>
                <div class="row gap-3 justify-content-between" id="itemlist">
                    @foreach($listings as $listing)
                    <div class="col">
                        <div class="card" style="width: 18rem; text-decoration: none;">
                            <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}"
                                style="text-decoration: none;">
                                <img src="{{$listing->getThumbnail()}}" class="card-img-top  p-3 pt-4"
                                    style="height: 300px">
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
                                    <div class="d-flex justify-content-between align-items-center  mt-5">
                                        <p class="location me-5"  style="word-wrap: break-word; font-size: 14px;">{{$listing->location}}</p>
                                        <p class="time"  style="font-size: 14px;">{{$listing->created_at->diffForHumans()}}</p>
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
    @include('partials.footer')

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

        $('#clear').click(() => {
            // clear all inputs in filter section, choose option with value null
            $('select').val('null');
            $('#min_price').val('');
            $('#max_price').val('');
        });

        $('#filter').click(() => {
            let params = {};

            $('select').each((index, element) => {
                if ($(element).val() !== 'null') {
                    params[element.name] = $(element).val();
                }
            });

            if ($('#min_price').val() !== '') {
                params.min_price = $('#min_price').val();
            }

            if ($('#max_price').val() !== '') {
                params.max_price = $('#max_price').val();
            }
            $.ajax({
                url: '/api/filter-listings/{{$category->id}}',
                method: 'POST',
                data: { params: params, _token: '{{csrf_token()}}' },
                success: response => {
                    let count = response.items.length;
                    $('.category-listing-title span').text(`${count} ilan bulundu`);
                    $('#itemlist').empty();
                    response.items.forEach(listing => {

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

                    })
                },
                error: response => {
                    console.log(response);
                }

            })
        })

    </script>
</body>

</html>
