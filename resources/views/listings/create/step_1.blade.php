<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/create_listing.css">
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
    </style>
</head>

<body>
    <div class="header d-flex align-items-center p-3">
        <button class="back-button btn p-0 me-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>

        <!--<img src="logo.png" alt="Logo" class="logo"-->
        <h2>Logo</h2>
    </div>

    <div class="container d-flex flex-column align-items-center mt-5">
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

            <!-- Küçük Fotoğraf Kutucukları -->
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

        <!-- Devam Et Butonu -->
        <button class="btn btn-outline-custom mt-3 w-25" id="next_step">Devam Et</button>
    </div>
    </div>


    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

    <script>

        $(document).ready(() => {
            let slot = 1;
            window.files = new FormData();

            let readUrl = input => {
                if (input.files && input.files[0]) {
                    //console.log(slot);
                    let reader = new FileReader();
                    reader.onload = e => {
                        $(`#slot-${slot}`).html(`<img src="${e.target.result}" alt="image" width="100%" height="80px">`);
                        window.files.append(`images[${slot - 1}]`, e.target.result);
                        
                        slot++;
                        console.log("next slot = " +  slot);
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
                    }

                })
            })
        })
    </script>
</body>

</html>