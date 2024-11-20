<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/create_listing.css">
</head>
<body class="ilansayfasi3">
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
                <hr>
                @else 
                <a href="#" class="custom-checkbox custom-checkbox-2 d-flex justify-content-between align-items-center">
                    <span>{{$subCategory->name}}</span>
                    <i class="fa fa-arrow-right"></i>
                </a>
                <hr>
                @endif
                @endforeach
            </div>
        </div>
        <button class="btn btn-outline-custom mt-3 w-25">Devam Et</button>
    </div>
    
    

</body>

<script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
<script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
</body>
</html>