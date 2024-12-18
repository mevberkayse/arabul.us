<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/profile.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">
    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">

</head>
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    /* Radio butonlar arasında gri çizgi */
    .form-check {
        border-bottom: 1px solid #ddd;
        font-size: 18px;
    }

    /* Son form-check için çizgi kaldır */
    .form-check:last-of-type {
        border-bottom: none;
    }

    .report-btn {
        color: white;
        background-color: #820933;
        border-color: #820933;
    }

    .report-btn:hover {
        color: #820933;
        background-color: white;
        border-color: #820933;
    }

    .reason-radio:checked {
        accent-color: red;
    }

    /* Custom Radio Button */
    .custom-radio .form-check-input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .custom-radio .form-check-label {
        position: relative;
        padding-left: 30px;
        cursor: pointer;
        user-select: none;
    }

    .custom-radio .form-check-label::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        border: 2px solid #ddd;
        border-radius: 50%;
        background-color: white;
    }

    .custom-radio .form-check-input:checked+.form-check-label::before {
        border-color: #ddd;
        background-color: #820933;
    }

    .custom-radio .form-check-label::after {
        content: '';
        position: absolute;
        left: 6px;
        top: 50%;
        transform: translateY(-50%);
        width: 10px;
        height: 10px;
        background-color: #820933;
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
    }

    .custom-radio .form-check-input:checked+.form-check-label::after {
        opacity: 1;
    }

    /* Şikayet Nedeni sola hizalı */
    .modal-title {
        text-align: left;
        margin-left: 0;
    }

    /* Modal genişlik */
    .modal-lg {
        max-width: 500px;
        max-height: 500px;
    }

    .bildir-btn {
        color: white;
        background-color: #820933;
        border-color: #820933;
        width: 500px;
    }

    .bildir-btn:hover {
        color: #820933;
        background-color: white;
        border-color: #820933;
        width: 500px;
    }
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

<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')
    <div class="container mt-5">
        <div class="row p-3">
            <div class="col-md-4">
                <div class="container border p-3 rounded" style="border: 1px solid #ccc !important;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-5">
                            @if ($user->profile_picture)
                            <img src="{{ asset(($user->profile_picture ?? 'default.png')) }}" alt="Profil Fotoğrafı"
                                width="100" height="100" class="rounded-circle" style="object-fit: cover;">
                            @else
                            <div class="rounded-circle"
                                style="width: 100px; height: 100px; background-color: #f0f0f0; display: flex; justify-content: center; align-items: center; font-size: 24px; color: #ccc;">
                                <i class="fas fa-user"></i>
                            </div>
                            @endif
                        </div>
                        <div>
                            <p style="font-size:20px;" class="mb-2 mt-2"><strong>{{$user->name}}</strong></p>
                        </div>
                    </div>

                    <!-- Başarı Mesajı -->
                    @if (session('success'))
                    <div id="success-message" class="alert alert-success"
                        style="position: fixed; top: 20px; right: 20px; z-index: 1050; width: 300px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="d-flex mt-5">
                        <!-- Üyelik Tarihi -->
                        <p><i class="fa-regular fa-calendar-check " style="color:a1a1a1; margin-right:5px;"></i>
                            {{$user->created_at->format('d F Y')}}
                        </p>
                        <span class="ms-2">tarihinden beri üye</span> <!-- 'ms-2' ile margin ekledik -->
                    </div>

                    <!-- Takipçi ve Takip Edilen -->
                    <div class="d-flex  mt-3">
                        <p><i class="fa-solid fa-people-group" style="color:a1a1a1; "></i>
                            <strong>{{$user->followers->count()}}</strong> takipçi
                        </p>
                        <div class="mx-2" style="border-left: 1px solid #ddd; height: 20px;"></div>
                        <p><strong>{{$user->followings->count()}}</strong> takip edilen</p>
                    </div>
                </div>
               <!-- Profili Paylaş ve Takip Et Butonları -->
<div class="text-center mt-3 d-flex justify-content-center align-items-center">
    <!-- Profili Paylaş Butonu -->
    <button class="btn btn-outline-custom me-3" id="share-button">Profili Paylaş</button>
    
    <!-- Takip Et Butonu -->
    @if($user->id !== Auth::id())
        @if(Auth::user()->isFollowing($user))
        <button class="btn btn-danger" id="follow-button" data-user-id="{{ $user->id }}">
            <i class="fa-solid fa-xmark"></i> Takipten Çık
        </button>
        @else
        <button class="btn btn-outline-custom" id="follow-button" data-user-id="{{ $user->id }}">
            <i class="fa-solid fa-user-plus"></i> Takip Et
        </button>
        @endif
    @endif
</div>

<!-- Kullanıcıyı Şikayet Et Butonu -->
@if($user->id !== Auth::id())
<div class="text-center mt-4">
    <button class="btn report-btn" data-bs-toggle="modal" data-bs-target="#reportModal">
        <i class="fa-solid fa-circle-exclamation"></i> Kullanıcıyı Şikayet Et
    </button>
</div>
@endif
</div>
            <!-- Şikayet Modal -->
            <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-3" id="reportModalLabel">Şikayet Nedeni</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- Şikayet Nedenleri -->
                                <div class="mb-4 mt-3">

                                    <!-- Radio 1 -->
                                    <div class="form-check border-bottom py-2 custom-radio">
                                        <input class="form-check-input reason-radio" type="radio" name="reason"
                                            id="reason1" value="spam">
                                        <label class="form-check-label" for="reason1">Spam</label>
                                    </div>

                                    <!-- Radio 2 -->
                                    <div class="form-check border-bottom py-2 custom-radio">
                                        <input class="form-check-input reason-radio" type="radio" name="reason"
                                            id="reason2" value="offensive">
                                        <label class="form-check-label" for="reason2">Hakaret</label>
                                    </div>

                                    <!-- Radio 3 -->
                                    <div class="form-check border-bottom py-2 custom-radio">
                                        <input class="form-check-input reason-radio" type="radio" name="reason"
                                            id="reason3" value="fraud">
                                        <label class="form-check-label" for="reason3">Dolandırıcılık</label>
                                    </div>

                                    <!-- Radio 4 -->
                                    <div class="form-check border-bottom py-2 custom-radio">
                                        <input class="form-check-input reason-radio" type="radio" name="reason"
                                            id="reason4" value="misleading">
                                        <label class="form-check-label" for="reason4">Yanıltıcı Bilgi</label>
                                    </div>

                                    <!-- Radio 5 -->
                                    <div class="form-check border-bottom py-2 custom-radio">
                                        <input class="form-check-input reason-radio" type="radio" name="reason"
                                            id="reason5" value="harassment">
                                        <label class="form-check-label" for="reason5">Taciz</label>
                                    </div>

                                    <!-- Radio 6 -->
                                    <div class="form-check py-2 custom-radio">
                                        <input class="form-check-input reason-radio" type="radio" name="reason"
                                            id="reason6" value="other">
                                        <label class="form-check-label" for="reason6">Diğer</label>
                                    </div>
                                </div>

                                <!-- Detaylı Açıklama -->
                                <div class="mb-2">
                                    <label for="details" class="form-label">Detaylı Açıklama</label>
                                    <textarea class="form-control" id="details" rows="4"
                                        placeholder="Açıklamanızı buraya yazın..."></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bildir-btn" id="bildir" >Bildir</button>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Soldaki Ürünler Bölümü -->
            <div class="col-md-8">
                <h4 class="text-center mb-3">Satıştaki Ürünler</h4>
                <!-- Ürün Kartları -->
                <div class="row justify-content-center gap-0">
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
                                        <p class="location  me-5" style="word-wrap: break-word; font-size: 14px;">
                                            {{$listing->location}}</p>
                                        <p class="time" style="font-size: 14px;">
                                            {{$listing->created_at->diffForHumans()}}</p>
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
    <!-- Daha fazla ürün eklemek için benzer yapıları çoğaltın -->
    </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
<footer class="text-light text-center text-lg-start py-5 mt-5">
    <div class="container">
        <!-- Kategoriler ve Arabul Başlığı -->
        <div class="row">
            <!-- Kategoriler -->
            <div class="col-md-6 text-center">
                <h5 class=" mb-4 px-3 py-2" style="display: inline-block; border:1px solid white; border-radius:10px;">Kategoriler</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Telefon & Aksesuar</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Bilgisayar & Tablet</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Çevre Birimleri</a></li>
                </ul>
            </div>

            <!-- Arabul Başlığı -->
            <div class="col-md-6 text-center">
                <h5 class="mb-4 px-3 py-2" style="display: inline-block; border:1px solid white; border-radius:10px;">arabul.us</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Kullanıcı Sözleşmesi</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Gizlilik Politikası</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Çerez Politikası</a></li>
                </ul>
            </div>
        </div>

        <!-- Sosyal Medya Linkleri -->
<div class="mt-4 d-flex justify-content-center gap-3">
    <!-- LinkedIn Butonu -->
    <a href="https://linkedin.com" target="_blank" class="btn-hesap rounded-circle p-3 d-flex align-items-center justify-content-center"
        style="width: 50px; height: 50px;">
        <i class="fa-brands fa-linkedin" style="font-size: 1.5rem;"></i>
    </a>
    <!-- GitHub Butonu -->
    <a href="https://github.com" target="_blank" class="btn-hesap rounded-circle p-3 d-flex align-items-center justify-content-center"
        style="width: 50px; height: 50px;">
        <i class="fa-brands fa-github" style="font-size: 1.5rem;"></i>
    </a>
</div>
        <!-- Alt Bilgi -->
        <p class="text-muted mt-4 mb-0 fw-bold" style="font-size:15px;">&copy; 2024 Şirket Adı. Tüm hakları saklıdır.</p>
    </div>
</footer>
</body>

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
</script>
<script>
    document.getElementById('share-button').addEventListener('click', () => {
        // Laravel'den gelen dinamik URL'yi alın
        const profileUrl = "{{ route('profile.show', ['id' => $user->id]) }}";

        // URL'yi kopyala
        navigator.clipboard.writeText(profileUrl)
            .then(() => {
                PNotify.success({
                    text: 'Profil URL\'si başarıyla kopyalandı!'
                });
            })
            .catch(err => {
                console.error('URL kopyalanırken hata oluştu:', err);
                alert('URL kopyalanamadı. Lütfen tekrar deneyin.');
            });
    });
</script>

<script>
    document.getElementById('follow-button').addEventListener('click', function () {
        const button = this;
        const userId = button.getAttribute('data-user-id');

        // Takip isteğini gönder
        fetch(`/api/follow/${userId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Takipçi sayısını güncelle

                    const followersElement = document.querySelector('.fa-people-group').nextElementSibling;
                    followersElement.textContent = `Takipçi: ${data.followersCount}`;
                    if (data.action == "follow") {
                        button.innerHTML = '<i class="fa-solid fa-xmark"></i> Takipten Çık';
                        button.classList.remove('btn-outline-custom');
                        button.classList.add('btn-danger');
                    } else {
                        button.innerHTML = '<i class="fa-solid fa-user-plus"></i>';
                        button.classList.remove('btn-danger');
                        button.classList.add('btn-outline-custom');
                    }
                    // Butonu "Takip Ediliyor" olarak değiştir

                } else {
                    alert(data.message || 'Bir hata oluştu.');
                }
            })
            .catch(error => {
                console.error('Takip işlemi sırasında hata oluştu:', error);
                alert('Bir hata oluştu. Lütfen tekrar deneyin.');
            });
    });
</script>

<script>
    // Modalı manuel açma ve kapatma örneği
    document.addEventListener('DOMContentLoaded', () => {
        const reportButton = document.querySelector('.report-btn');
        const modal = new bootstrap.Modal(document.getElementById('reportModal'));

        // Butona tıklandığında modalı aç
        reportButton.addEventListener('click', () => {
            modal.show();
        });

        // Kullanıcıyı Bildir butonuna basıldığında (örnek işlem)
        document.querySelector('.btn-danger').addEventListener('click', () => {
            alert('Şikayetiniz iletildi.'); // Örnek bir geri bildirim
            modal.hide(); // Modalı kapat
        });
    });

    $('#bildir').click(() => {
        let checked = $('input[name="reason"]:checked').val();
        let details = $('#details').val();

        if (!checked || details == null) {
            PNotify.error({
                text: 'Tüm alanlar zorunludur.'
            })
            return;
        }

        $.ajax({
            url: '/api/profile/report',
            method: 'POST',
            data: {
                _token: "{{csrf_token()}}",
                user_id: "{{$user->id}}",
                reason: checked,
                details: details
            },
            success: (data) => {
                if (data.success) {
                    const modal = new bootstrap.Modal(document.getElementById('reportModal'));
                    modal.hide();
                    PNotify.success({
                        text: 'Şikayetiniz alınmıştır.'
                    })
                } else {
                    PNotify.error({
                        text: 'Bir hata oluştu. Lütfen daha sonra tekrar deneyin.'
                    })
                }
            }
        })
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.transition = 'opacity 0.5s ease';
                successMessage.style.opacity = '0';
                setTimeout(() => successMessage.remove(), 500); // Elementi DOM'dan tamamen kaldır
            }, 3000); // 3 saniye bekleme süresi
        }
    });
</script>
<script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>

</html>
