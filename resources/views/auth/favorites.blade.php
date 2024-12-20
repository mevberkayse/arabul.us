<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/profile.css">
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
    .container.mt-5 {
  padding-bottom: 60px; /* Footer'ın yüksekliği kadar boşluk bırakın */
}
.container.mt-3 {
  display: flex;
  justify-content: center;  /* Yatayda ortalama */
  flex-direction: column;
  align-items: center;  /* Dikeyde ortalama */
}
h4.text-center.mb-2 {
  text-align: center;  /* Yalnızca başlık ortalanacak */
  white-space: nowrap;

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
    <div class="container mt-3">
        <div class="row p-3">
            <h4 class="text-center mb-2">Favori İlanlarım</h4>

                <!-- Ürün Kartları -->
                <div class="row gap-3 mt-2 justify-content-center">
                    @foreach($listings as $listing)
                        <div class="col-3">
                            <div class="card" style="width: 100%; text-decoration: none;">
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
                                        <div class="d-flex justify-content-between align-items-center mt-5">
                                            <p class="location  me-5" style="word-wrap: break-word; font-size: 14px;">{{$listing->location}}</p>
                                            <p class="time" style="font-size: 14px;">{{$listing->created_at->diffForHumans()}}</p>
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
    @include('partials.footer')
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
                const toastElement = document.getElementById('copyToast');
                const toast = new bootstrap.Toast(toastElement);
                toast.show();
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
        fetch(`/follow/${userId}`, {
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

                    // Butonu "Takip Ediliyor" olarak değiştir
                    button.innerHTML = '<i class="fa-solid fa-check"></i> Takip Ediliyor';
                    button.classList.remove('btn-outline-custom');
                    button.classList.add('btn-success');
                    button.disabled = true;
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
