<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">

</head>

<body>
    @include('partials.navbar')

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-12">
                <img src="https://placehold.co/1275x400/png" alt="" style="border-radius: 10px;">
            </div>
        </div>
        <div class="row justify-content-center gap-0" id="itemlist">
            @foreach($listings as $listing)
            <div class="col-3 ">
                <a href="{{route('listings.show', [$listing->id, '-', $listing->slug])}}" class="card"
                    style="width: 18rem; text-decoration: none;">
                    <img src="{{$listing->getThumbnail()}}" class="card-img-top p-3 pt-4" style="height: 300px">
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="item-price large-price">{{$listing->price}}</h5>
                        <p class="item-text mt-2">{{$listing->title}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="location">{{$listing->location}}</p>
                            <p class="time">{{$listing->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center dahafazlayukle-btn my-4">
        <button class="btn btn-outline-custom" id="loadMore">Daha Fazla Yükle </button>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto py-3 fixed-bottom">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Şirket Adı. Tüm hakları saklıdır.</p>
        </div>
    </footer>


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
                                                    $('#itemlist').append(`<div class="col-3 ">
                                                        <a href="${listing.url}" class="card" style="width: 18rem; text-decoration: none;">
                                                            <img src="${listing.thumbnail}" class="card-img-top p-3 pt-4" alt="..." style="height:300px">
                                                             <div class="heart-icon">
                    <i class="fa-regular fa-heart"></i>
                </div>
                                                            <div class="card-body">
                                                                <h5 class="item-price large-price">${listing.price} ₺</h5>
                                                                <p class="item-text mt-2">${listing.title}</p>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class="location">${listing.location}</p>
                                                                    <p class="time">${listing.time}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>`);

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
                            $('#itemlist').append(`<div class="col-3 ">
                <a href="${listing.url}" class="card" style="width: 18rem; text-decoration: none;">
                    <img src="${listing.thumbnail}" class="card-img-top p-3 pt-4 alt="..." style="height:300px">
                     <div class="heart-icon">
                    <i class="fa-regular fa-heart"></i>
                </div>
                    <div class="card-body">
                        <h5 class="item-price large-price">${listing.price} ₺</h5>
                        <p class="item-text mt-2">${listing.title}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="location">${listing.location}</p>
                            <p class="time">${listing.time}</p>
                        </div>
                    </div>
                </a>
            </div>`);
                        });
                    }

                }

            })
            }
            getItems();

        });
    </script>
</body>

</html>