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
        <a href="/" class="back-button border btn p-2 me-2">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <!--<img src="logo.png" alt="Logo" class="logo"-->
        <img src="/assets/images/logo3.png" alt="Logo" class="logo">
    </div>

    <div class="container d-flex flex-column align-items-center mt-4">
        <!-- Adım Daireleri -->
        <div class="steps mb-3">
            <span class="step-circle"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
        </div>

        <form style="display:none">
            <input type="file" name="images[]" id="images">
            <input type="hidden" name="_token" value="{{csrf_token()}}" multiple="true">
        </form>

        <!-- Ana Yükleme Kutusu -->
        <div class="upload-box p-4 border rounded">
            <!-- Ana Fotoğraf Yükleme Alanı -->
            <div class="main-photo-upload mb-2 text-center">
                <!-- İkon -->
                <i class="fa-regular fa-image" style="color: black; font-size: 40px;"></i>

                <!-- Açıklama Metni -->
                <p class="text-muted mt-2">Ürün fotoğrafını seçin</p>

                <!-- Fotoğraf Yükle Butonu -->
                <button id="uploadImageButton" class="btn btn-custom">Fotoğraf Yükle</button>

            </div>
            <small class="text-muted d-block mb-3">En az 1 en fazla 12 fotoğraf yükleyiniz.</small>

            @php
            // if session has images, show them, show 12 slots and fill in the images, if there is not enough images, show empty slots. else, show empty slots
            @endphp
            @if(session('create_listing_images'))
            @foreach(session('create_listing_images') as $image)
            <div class="row">
                <!-- Fotoğraf Slotları -->
                <div class="col-3 mb-2" id="slot-1">
                    <div class="photo-slot border rounded text-center">
                        <img src="{{asset($image)}}" alt="image" width="100%" height="80px">
                    </div>
                </div>
                @endforeach
                @for($i = 0; $i < 12 - count(session('create_listing_images')); $i++)
                    <div class="col-3 mb-2" id="slot-{{count(session('create_listing_images')) + $i + 1}}">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular
                            fa-image"></i>
                        </div>
                    </div>
                    @endfor
                </div>
            @else
            <div class="row">
                <!-- Fotoğraf Slotları -->
                <div class="col-3 mb-2" id="slot-1">
                    <div class="photo-slot border rounded text-center">
                        <i class="fa-regular fa-image"></i>
                    </div>
                </div>
                <!-- Fotoğraf Slotları -->
                <div class="col-3 mb-2" id="slot-2">
                    <div class="photo-slot border rounded text-center">
                        <i class="fa-regular fa-image"></i>
                    </div>
                </div>
                <!-- Fotoğraf Slotları -->
                <div class="col-3 mb-2" id="slot-3">
                    <div class="photo-slot border rounded text-center">
                        <i class="fa-regular fa-image"></i>
                    </div>
                </div>
                <!-- Fotoğraf Slotları -->
                <div class="col-3 mb-2" id="slot-4">
                    <div class="photo-slot border rounded text-center">
                        <i class="fa-regular fa-image"></i>
                    </div>
                </div>
                <div class="row">
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-1">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-2">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-3">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-4">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-5">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-6">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-7">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-8">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-9">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-10">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>

                    </div>
                    <!-- Fotoğraf Slotları -->
                    <div class="col-3 mb-2" id="slot-11">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>

                    </div>
                    <div class="col-3 mb-2" id="slot-12">
                        <div class="photo-slot border rounded text-center">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- Küçük Fotoğraf Kutucukları -->

        </div>

        <!-- Devam Et Butonu -->
        <button class="btn btn-outline-custom mt-3 mb-4 w-25" id="next_step">Devam Et</button>
    </div>
    </div>


    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    <script>window.files = new FormData();</script>
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

    @if(session('create_listing_images'))
    <script>
        $(document).ready(() => {
            let images = @json(session('create_listing_images'));
            images.forEach((image, index) => {
                $(`#slot-${index + 1}`).html(`<img src="${image}" alt="image" width="100%" height="80px">`);
                window.files.append(`images[${index}]`, image);
            })

        })
    </script>
    @endif
    <script>

        $(document).ready(() => {
            let slot = 1;


            let readUrl = input => {
                if (input.files && input.files[0]) {
                    //console.log(slot);
                    let reader = new FileReader();
                    reader.onload = e => {
                        $(`#slot-${slot}`).html(`<img src="${e.target.result}" alt="image" width="100%" height="80px">`);
                        window.files.append(`images[${slot - 1}]`, e.target.result);

                        slot++;
                        console.log("next slot = " + slot);
                    }
                    reader.readAsDataURL(input.files[0]);
                    // add to form data

                }
            }

            $('input[type="file"]').on('change', function () { readUrl(this); });
            let triggerUploadFile = () => {
                $('#images').attr('accept', '.jpg, .png, .jpeg');
                $('#images').show();
                $('#images').focus();
                $('#images').click();
                $('#images').hide();
            }
            $('#uploadImageButton').click(() => {
                triggerUploadFile();
            })
            $('#next_step').click(() => {
                window.files.append("_token", "{{csrf_token()}}");
                window.files.entries().forEach(item => {
                    console.log(item)
                })
                $.ajax({
                    method: "POST",
                    url: "/api/create-listing/step-1",
                    processData: false,
                    contentType: false,
                    data: window.files,
                    success: (data) => {
                        window.location.href = "{{route('listings.create',[2])}}";
                    },
                    error: (err) => {
                        PNotify.error({
                            text: 'Lütfen en az 1 en fazla 12 resim yükleyiniz.',
                            delay: 2000
                        })
                    }

                })
            })
        })
    </script>
</body>

</html>
