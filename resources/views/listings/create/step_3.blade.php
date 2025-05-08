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
</head>
<style>
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

<body class="ilansayfasi3">
    <div class="header d-flex align-items-center p-3">
        <a href="{{route('listings.create', ['step' => 2])}}" class="back-button btn p-2 me-2">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <!--<img src="logo.png" alt="Logo" class="logo"-->
        <img src="/assets/images/logo3.png" alt="Logo" class="logo">
    </div>
    <div class="container d-flex flex-column align-items-center mt-5">
        <!-- Adım Daireleri -->
        <div class="steps mb-3">
            <span class="step-circle1"></span>
            <span class="step-circle2"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
            <span class="step-circle"></span>
        </div>

        <!-- Ana Kutucuk -->
        <div class="container d-flex flex-column align-items-center rounded mt-3 border p-4">
            <h5 class="text-center font-weight-bold mb-3">{{$category->name}}</h5>

            <!-- Checkbox Kategorileri -->
            <div class="w-100">
                <!-- iOS Telefon Checkboxes -->
                @foreach($subCategories as $subCategory)
                @if(!$subCategory->hasSubCategories())
                <label class="custom-checkbox">
                    <input type="radio" name="subcategory" id="{{$subCategory->id}}">
                    <span>{{$subCategory->name}}</span>
                </label>
                @else
                <label for="" class="form-label">{{$subCategory->name}}</label>
                <div class="input-group">
                    <input type="text" id="subcategory-{{$subCategory->id}}-input" name="subcategory-input"
                        class="form-control" placeholder="Seçiniz.." readonly data-bs-toggle="modal"
                        data-bs-target="#subcategory-{{$subCategory->id}}" data-category-id="{{$subCategory->id}}"
                        style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                    <span class="input-group-text" data-bs-toggle="modal"
                        data-bs-target="#subcategory-{{$subCategory->id}}"
                        style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none; ">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </span>
                </div>
                @endif
                <hr>
                @endforeach
            </div>
        </div>
        <button class="btn btn-outline-custom mt-3 w-25" id="next_step">Devam Et</button>
    </div>

    @foreach($subCategories as $subCategory)
    @if($subCategory->hasSubCategories())

    <div class="modal fade" id="subcategory-{{$subCategory->id}}" tabindex="-1" aria-labelledby="renkModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="renkModalLabel">{{$subCategory->name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="renkList">
                        @foreach($subCategory->getSubCategories() as $subSubCat)
                        <li class="list-group-item" data-id="{{$subSubCat->id}}"
                            onclick="chooseOption('{{$subSubCat->name}}', '#subcategory-{{$subCategory->id}}-input', '{{$subCategory->id}}', '{{$subSubCat->id}}')">
                            {{$subSubCat->name}}</li>
                        @endForeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach

</body>

<script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
<script src="//https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
@if(session('create_listing_subcategory') || session('create_listing_subsubcategory'))
<script>
    $(document).ready(() => {
        let subcategory = '{{session("create_listing_subcategory")}}';
        let subsubcategory = '{{session("create_listing_subsubcategory")}}';
        if (subcategory) {
            $(`input[type="radio"][id="${subcategory}"]`).prop('checked', true);
        }
        if (subsubcategory) {
            $('li[data-id=' + subsubcategory + ']').click();
        }
    });
</script>
@endif

<script>

    // if user clicks on a radio input, clear all other input values with name subcategory-input
    $('input[type="radio"]').click(function () {
        $('input[name="subcategory-input"]').val('').attr('data-id', '');
    })

    let chooseOption = (option, writeTo, id, subsubid) => {

        $(writeTo).val(option).attr('data-id', subsubid);
        $(`#subcategory-${id}`).modal('hide');

        // clear other inputs
        $('input[name="subcategory-input"]').not(writeTo).val('').attr('data-id', '');
        // clear radio inputs too
        $('input[type="radio"]').prop('checked', false);




    }
</script>
<script>
    $(() => {
        $('#next_step').click(() => {
            // subcategory is either radio or input
            let subcategory = $('input[type="radio"]:checked').length > 0 ? $('input[type="radio"]:checked').attr('id') : $('input[name=subcategory-input]').filter(function () { return $(this).val().trim() != ""; }).data('id');
            let category = $('input[type="radio"]:checked').length > 0 ? $('input[type="radio"]:checked').attr('id') : $('input[name=subcategory-input]').filter(function () { return $(this).val().trim() != ""; }).data('category-id');
            if (subcategory == undefined) {
                alert('Lütfen bir alt kategori seçiniz');
                return;
            }

            $.ajax({
                method: "POST",
                url: "/api/create-listing/step-3",
                data: {
                    _token: "{{csrf_token()}}",
                    subcategory: subcategory,
                    category: category
                },
                success: data => {
                    if (data.success) {
                        window.location.href = '/ilan-yukle/4';
                    }
                }
            })
        })
    })
</script>
</body>

</html>
