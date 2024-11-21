<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AraBulus</title>
  <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/profile.css">

</head>

<body>
  @include('partials.navbar')
  <div class="container mt-5">
    <div class="row p-3">
      <!-- Sağdaki Profil Bilgileri Bölümü -->
      <div class="col-md-4">
        <div class="text-center mb-3">
          <img src="{{$user->profile_picture}}" alt="mdo" width="100" height="100" class="rounded-circle">
        </div>
        <div class="text-center">
          <p><strong>{{$user->name}}</strong></p>
          <p><i class="fa-regular fa-calendar-check"></i> <strong>Üyelik Tarihi:</strong> {{$user->created_at->format('d F Y')}}</p>
          <div class="d-flex justify-content-center align-items-center">
            <p><i class="fa-solid fa-people-group"></i> <strong>Takipçi:</strong> 0</p>
            <div class="mx-2" style="border-left: 1px solid #ddd; height: 20px;"></div>
            <p><strong>Takip Edilen:</strong> 0</p>
          </div>
        </div>
        <div class="text-center mt-3">
          <button class="btn btn-outline-custom me-3"id="share-button">Profili Paylaş</button>
          <button class="btn btn-outline-custom"id="follow-button" data-user-id="{{ $user->id }}"><i class="fa-solid fa-user-plus"></i></button>

        </div>
        <!-- Toast -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; top: 25%;">
          <div id="copyToast" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
              <div class="toast-body">
                Profil URL'si başarıyla kopyalandı!
              </div>
              <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Kapat"></button>
            </div>
          </div>
        </div>
        <div class="text-center mt-3">
          <button class="btn report-btn"><i class="fa-solid fa-circle-exclamation"></i> Kullanıcıyı Şikayet Et</button>
        </div>

      </div>

      <!-- Soldaki Ürünler Bölümü -->
      <div class="col-md-8">
        <h4 class="text-center mb-3">Satıştaki Ürünler</h4>
        <!-- Ürün Kartları -->
        <div class="row justify-content-center gap-0">
          @foreach($listings as $listing)
          <div class="col-md-4 mb-3">
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
    </div>
  </div>
  <!-- Daha fazla ürün eklemek için benzer yapıları çoğaltın -->
  </div>
  </div>
  </div>
  </div>
  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start mt-auto py-3 sticky-bottom">
    <div class="container">
      <p class="text-muted mb-0">&copy; 2024 Şirket Adı. Tüm hakları saklıdır.</p>
    </div>
  </footer>
</body>


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



<script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>

</html>