<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">

    <title>Modern Login Page</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{route('register')}}" method="post">
                <h1>Hesap Oluştur</h1>
                <div class="social-icons">
                    <a href="/login/google/redirect" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <span>veya kayıt için e-postanızı kullanın</span>
                <input type="text" name="name" placeholder="İsim">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Şifre">
                <input type="password" name="password_confirmation" placeholder="Şifre Tekrar">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button>Oluştur</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{route('login')}}" method="post">
                <h1>Hesabına Gir</h1>
                <div class="social-icons">
                    <a href="/login/google/redirect" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>

                </div>
                <span>veya e-mail şifreni kullan</span>

                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Şifre">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <a href="#">Şifreni mi unuttun?</a>
                <button>Giriş Yap</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hoşgeldin!</h1>
                    <p>Zaten hesabınız varsa giriş yapınız</p>
                    <button class="hidden" id="login">Giriş Yap</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hoşgeldin!</h1>
                    <p>Tüm site özelliklerini kullanmak için hesap oluşturunuz</p>
                    <button class="hidden" id="register">Hesap Oluştur</button>
                </div>
            </div>
        </div>
    </div>




    <script src="/assets/js/login.js"></script>
    @if(isset($errors))
    <script>
        // when document is ready
        document.addEventListener('DOMContentLoaded', function () {
            @foreach($errors -> all() as $error)
            PNotify.error({
                text: '{{$error}}',
                delay: 5000
            });
            @endforeach
        });
    </script>
    @endif
</body>

</html>
