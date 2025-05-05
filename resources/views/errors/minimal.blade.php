<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">


</head>
<style>
    footer ul li a:hover {
        color: #ffc107;
        /* Hover rengi */
        text-decoration: underline;
    }

    footer ul li {
        margin-top: 5px;
    }

    footer {
        background-color: #820933;
        /* Koyu kırmızı */

    }

    /* Buton Normal Durumu */
    .btn-hesap {
        border: 1px solid white;
        color: white;
        transition: all 0.3s ease;
        /* Hover geçiş animasyonu */
    }

    /* Hover Durumu */
    .btn-hesap:hover {
        background-color: transparent;
        /* Hover'da arka plan rengi */
        color: #1a1b41;
        /* Metin rengi */
        border-color: #1a1b41;
        /* Hover'da mavi ton border */
        transform: translateY(-5px);
        /* Butonu yukarı hareket ettir */
    }
</style>

<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="d-flex align-items-center">
            <h1 style="border-right: 3px solid #820933; padding-right: 40px; margin-right: 40px;">@yield('code')</h1>
            <div>
                <h2>@yield('title')</h2>
                <h6 class="mt-2">@yield('message')</h6>
            </div>
        </div>
    </div>


    @include('partials.footer')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script></body>

</html>
