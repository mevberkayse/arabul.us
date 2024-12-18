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

    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{time();}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>


</head>

<style>
    /* @import kuralı en üstte olmalı */
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    body {
        font-family: 'Nunito', sans-serif;
    }

    /* Şikayet Nedeni sola hizalı */
    .modal-title {
        text-align: center;
        margin-left: 0;

    }

    /* Modal genişlik */
    .modal-lg {
        max-width: 500px;
        max-height: 500px;
    }



    .dropdown-menu-1 {
        width: 550px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(35%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
        /* Varsayılan padding değerini artırabilirsiniz */
        margin-bottom: 0.2rem;
        /* Alt kısma küçük bir boşluk ekleyin */
        font-family: "Nunito", "arial", "sans-serif";
        font-size: 18px;
    }

    .dropdown-menu-2 {
        width: 550px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(35%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-menu-3 {
        width: 550px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(35%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-menu-4 {
        width: 380px !important;
        height: 400px !important;
        right: 40%;
        /* Sol kenarı ortalamak için %50'ye ayarla */
        transform: translateX(30%);
        /* Sol kenarı merkeze doğru kaydır */
        background-color: #fff;
        border-radius: 0px;
    }

    .dropdown-item {
        transition: all 0.3s ease-in-out;
        /* Geçiş süresi ve animasyon stili */
        position: relative;
        /* Sağ kaydırmak için pozisyonlamayı ayarla */
    }

    .dropdown-item:hover {
        background-color: transparent !important;
        /* Arka plan rengini transparan yap */
        transform: translateX(10px);
        /* Yazıyı sağa kaydır */
    }

    .searchw {
        min-width: 400px;
        /* Maksimum genişlik isteğe bağlı olarak ayarlanabilir */
    }


    .category-list-content {
        list-style-type: none;
        /* Başındaki noktaları kaldırır */
        padding: 0;
        /* Varsayılan padding'i kaldırır */
    }

    .category-item a {
        color: black;
        /* Rengi siyah yapar */
        text-decoration: none;
        /* Alt çizgiyi kaldırır */
        padding: 0.5rem 1rem;
        /* Varsayılan padding değerini artırabilirsiniz */
        margin-bottom: 0.2rem;
        /* Alt kısma küçük bir boşluk ekleyin */
    }

    .category-item {
        transition: all 0.3s ease-in-out;
        /* Geçiş süresi ve animasyon stili */
        position: relative;
        /* Sağ kaydırmak için pozisyonlamayı ayarla */
    }

    .category-item:hover {
        background-color: transparent !important;
        /* Arka plan rengini transparan yap */
        transform: translateX(10px);
        /* Yazıyı sağa kaydır */
    }


    .input-group {
        align-items: center;
        /* İkon ve inputu aynı hizada tut */
    }

    .input-group-text {
        display: flex;
        /* İkonu ortalamak için */
        align-items: center;
        /* İkonu dikeyde ortala */
    }

    .btn-outline-custom {
        --bs-btn-color: #1a1b41;
        --bs-btn-border-color: #1a1b41;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #1a1b41;
        --bs-btn-hover-border-color: #1a1b41;
        --bs-btn-focus-shadow-rgb: 25, 135, 84;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #1a1b41;
        --bs-btn-active-border-color: #1a1b41;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #1a1b41;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: #1a1b41;
        --bs-gradient: none;
    }

    .btn-custom {
        --bs-btn-color: #fff;
        --bs-btn-bg: #1a1b41;
        --bs-btn-border-color: #1a1b41;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #1a1b41;
        --bs-btn-hover-border-color: #1a1b41;
        --bs-btn-focus-shadow-rgb: 49, 132, 253;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #1a1b41;
        --bs-btn-active-border-color: #1a1b41;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #fff;
        --bs-btn-disabled-bg: #0d6efd;
        --bs-btn-disabled-border-color: #1a1b41;
    }

    ul.list-unstyled li:first-child a {
        color: #000;
        /* Rengi siyah yapmak için */
    }

    /* İkonun sağda görünmesi için hizalama */
    .position-relative {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }

    @media only screen and (min-width: 600px) {
        .navbar {
            height: 90px !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .navbar {
            height: 70px !important;
        }
    }

    @media only screen and (max-width: 768px) {
        .col-3 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .toggle-password {
        pointer-events: auto;
        /* Tıklanabilir yap */
    }
    .checkboxbildirim {
        font-size: 18px;
    }
    .toggle-icon {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 24px; /* İkon boyutunu ayarlamak için */
    color: #28a745; /* İkon rengi (isteğe bağlı) */
}
.rounded-circle {
    object-fit: cover; /* Profil resmini düzgün şekilde kesmek için */
}
.bildir-btn {
        color: white;
        background-color: #820933;
        border-color: #820933;
        width: 100px;
    }

    .bildir-btn:hover {
        color: #820933;
        background-color: white;
        border-color: #820933;
        width: 100px;
    }
    .custom-list li{
        margin-bottom: 15px;
    }
    .content-section p {
    margin-top: 1.5rem; /* 3 satır boşluk (1rem ≈ 16px) */
    padding-left: 1.5rem; /* Cevabın sorudan daha içerde başlaması için */
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


    <div class="container mt-2">
        <!-- Başlık -->
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="">Yardım Merkezi</h2>
            </div>
        </div>

        <div class="row mt-4" >
            <!-- 3'lü sütun: Yasal ve gizlilik bilgileri -->
            <div class="col-3" style="margin-right:100px;">
            <ul class="list-unstyled custom-list">
                    <li><a href="#" id="tab-1" class="text-dark text-decoration-none"  onclick="openTab(1);" data-opener="1">Yasal ve Gizlilik Bilgileri</a></li>
                    <li><a href="#" id="tab-2" class="text-dark text-decoration-none"  onclick="openTab(2);" data-opener="2">Hesap</a></li>
                    <li><a href="#" id="tab-3" class="text-dark text-decoration-none"  onclick="openTab(3);" data-opener="3">Nasıl Kullanırım</a></li>
                    <li><a href="#" id="tab-4" class="text-dark text-decoration-none"  onclick="openTab(4);" data-opener="4">Güvenlik ve Emniyet</a></li>
                    <li><a href="#" id="tab-5" class="text-dark text-decoration-none"  onclick="openTab(5);" data-opener="5">Mesajlaşma</a></li>
                    <li><a href="#" id="tab-6" class="text-dark text-decoration-none"  onclick="openTab(6);" data-opener="6">Satış</a></li>
                </ul>
            </div>

            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
              <!-- Sağ taraftaki 6 kolonluk içerik -->
            <div class="col-6">
            <div id="content-1" class="content-section">
            <ul class="list-unstyled custom-list">
                    <li><a href="#" class="text-dark text-decoration-none">Bireysel Üyelik Sözleşmesi Aydınlatma Metni</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Aydınlatma Metni</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Müşteri Açık Rıza Metni</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Şartlar ve Koşullar</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Site Kullanım Koşulları</a></li>
                </ul>
            </div>
            <div id="content-2" class="content-section none">
    <h5>Profil Hakkında</h5>
    <ul class="list-unstyled custom-list">
        <li>
            <a href="#" class="text-dark text-decoration-none"  id="question-1" onclick="toggleAnswer(this, 'answer-1')">Tüm cihazlardan nasıl çıkış yapılır?</a>
            <p id="answer-1" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
        </li>
        <li>
            <a href="#" class="text-dark text-decoration-none"  id="question-2" onclick="toggleAnswer(this, 'answer-2')">Kullanıcı profilimi nasıl düzenleyebilirim?</a>
            <p id="answer-2" class="d-none">Profilinizi düzenlemek için Profilim bölümüne giderek bilgilerinizi güncelleyebilirsiniz.</p>
        </li>
        <li>
            <a href="#" class="text-dark text-decoration-none"  id="question-3" onclick="toggleAnswer(this, 'answer-3')">Bulunduğum konumu nasıl değiştirebilirim?</a>
            <p id="answer-3" class="d-none">Konumunuzu değiştirmek için Profilim > Konum Ayarları sekmesine gidin.</p>
        </li>
        <li>
            <a href="#" class="text-dark text-decoration-none"  id="question-4" onclick="toggleAnswer(this, 'answer-4')">Profilimi nasıl paylaşabilirim?</a>
            <p id="answer-4" class="d-none">Profil paylaşım linkinizi Profilim > Paylaş seçeneğinden alabilirsiniz.</p>
        </li>
        <li>
            <a href="#" class="text-dark text-decoration-none" id="question-5" onclick="toggleAnswer(this, 'answer-5')">Hesabımı nasıl silebilirim?</a>
            <p id="answer-5" class="d-none">Hesabınızı silmek için Ayarlar > Hesap Silme seçeneğini kullanabilirsiniz.</p>
        </li>
    </ul>
</div>


                <div  id="content-3" class="content-section d-none">
                <ul class="list-unstyled custom-list">
                <h5>Nasıl Kullanırım</h5>
                <ul class="list-unstyled custom-list">
                        <li>
                            <a href="#" class="text-dark text-decoration-none"  id="question-6" onclick="toggleAnswer(this, 'answer-6')">Başka birinin profiline nasıl bakabilirim?</a>
                            <p id="answer-6" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
                        </li>
                        <li>
                            <a href="#" class="text-dark text-decoration-none"  id="question-7" onclick="toggleAnswer(this, 'answer-7')">Uygulama dilini nasıl değiştirebilirim?</a>
                            <p id="answer-7" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
                        </li>
                        <li>
                            <a href="#" class="text-dark text-decoration-none"  id="question-8"onclick="toggleAnswer(this, 'answer-8')">Bildirim ayarlarımı nasıl yönetebilirim?</a>
                            <p id="answer-8" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
                        </li>
                        <li>
                            <a href="#" class="text-dark text-decoration-none"  id="question-9"onclick="toggleAnswer(this, 'answer-9')">Program hataları ve teknik destek</a>
                            <p id="answer-9" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
                        </li>
                        <li>
                            <a href="#" class="text-dark text-decoration-none" id="question-10" onclick="toggleAnswer(this, 'answer-10')">Bir hatayı nasıl bildirebilirim?</a>
                            <p id="answer-10" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
                    </li>
                </ul>
                </div>


            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div id="content-4" class="content-section d-none">
            <ul class="list-unstyled custom-list">
                <h5>Güvenlik ve emniyet</h5>
                <ul class="list-unstyled custom-list ">
    <li><a href="#" class="text-dark text-decoration-none">Topluluk kuralları</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Güvenlik önerilerimiz</a></li>
    <li><a href="#" class="text-dark text-decoration-none">Reklam Politikası</a></li>
    <li><a href="#" class="text-dark text-decoration-none" id="question-11" onclick="toggleAnswer(this, 'answer-11')">Ürünleri kargolamak mümkün mü?</a>
    <p id="answer-11" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p></li>
    <li><a href="#" class="text-dark text-decoration-none">Gizlilik</a></li>
    <li><a href="#" class="text-dark text-decoration-none"  id="question-12" onclick="toggleAnswer(this, 'answer-12')">Adresimi gösterecek misiniz?</a>
    <p id="answer-12" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p></li>
</li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-13" onclick="toggleAnswer(this, 'answer-13')">Bir kullanıcıyı nasıl şikayet edebilirim?</a>
    <p id="answer-13" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p></li>
    <li><a href="#" class="text-dark text-decoration-none" id="question-14" onclick="toggleAnswer(this, 'answer-14')" >Bir kullanıcının kanunları çiğnediğini düşünüyorsam ne yapmalıyım?</a>
    <p id="answer-14" class="d-none">Tüm cihazlardan çıkış yapmak için Ayarlar > Tüm hesaplardan çıkış yap seçeneğini kullanabilirsiniz.</p>
</li>
</ul>
                </div>


            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div id="content-5" class="content-section d-none">
            <ul class="list-unstyled custom-list">
                <h5>Mesajlaşma</h5>
                <ul class="list-unstyled custom-list">
    <li><a href="#" class="text-dark text-decoration-none" id="question-15" onclick="toggleAnswer(this, 'answer-15')">Diğer alıcı/satıcılar ile nasıl mesajlaşabilirim?</a>
    <p id="answer-15" class="d-none">Satıcı profilinde Sohbet butonuna tıklayarak satıcı ve alıcı arasında sohbet sağlanır.</p></li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-16" onclick="toggleAnswer(this, 'answer-16')">Mesajlar nasıl silinir?</a>
    <p id="answer-16" class="d-none">Sohbet kutusunda kullanıcı sohbet kutusunun en sağında bulunan çarpıya tıklarsanız mesaj silinir ama geri getiremezsiniz.</p>
</li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-17" onclick="toggleAnswer(this, 'answer-17')">Sohbet bölümü aracılığıyla fotoğraf ve ek dosya gönderebilir miyim?</a>
    <p id="answer-17" class="d-none">Hayır,sohbet kutumuz sadece metinlere izin veriyor.</p></li>
</ul>

                </div>
            <!-- 6'lık sütun: Yasal ve gizlilik metinleri -->
            <div id="content-6" class="content-section d-none">
            <ul class="list-unstyled custom-list">
                <h5>Satış</h5>
                <ul class="list-unstyled custom-list">
    <li><a href="#" class="text-dark text-decoration-none"id="question-18" onclick="toggleAnswer(this, 'answer-18')">Nasıl ilan yayınlayabilirim?</a>
    <p id="answer-18" class="d-none">Anasayfadaki artı butonuna tıklayarak ilan sayfasına gidebilirsiniz.</p></li></li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-19" onclick="toggleAnswer(this, 'answer-19')">Yayınladığım veya favorilerime eklediğim ilanların hepsini nerede görebilirim?</a>
    <p id="answer-19" class="d-none">Profiliniz üzerinden hesabıma giderek yayınladığınız ürünleri,favorilerimden favorilerinizi görebilirsiniz</p></li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-21" onclick="toggleAnswer(this, 'answer-21')">İlanım neden hala yayınlanmadı?</a>
    <p id="answer-21" class="d-none">Muhtemelen ekibimiz tarafından inceleme altına alınmıştır.Daha fazla bilgi için lütfen bizimle iletişime geçiniz</p></li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-22" onclick="toggleAnswer(this, 'answer-22')">Yayınladığım ilan neden yayından kaldırıldı?</a>
    <p id="answer-22" class="d-none">İlanınız hakkında şikayet olabilir.Bilgi için bizimle iletişime geçiniz.</p></li>
    <li><a href="#" class="text-dark text-decoration-none"id="question-23" onclick="toggleAnswer(this, 'answer-23')">Nasıl ürün satın alırım?</a>
    <p id="answer-23" class="d-none">Satıcı ile konuşarak fiyat belirleyip kargolama veya elden teslim tercih edebilirsiniz.</p></li>

</ul>

                </div>

        </div>
    </div>
    </div>
        <!-- Footer -->
        @include('partials.footer')
                <script>
   document.addEventListener("DOMContentLoaded", () => {
    // Sayfa yüklendiğinde varsayılan olarak tab-1'i aktif yap
    openTab(1);
});

function openTab(tabId) {
    // 1. Tüm içerik bölümlerini gizle
    const allContents = document.querySelectorAll(".content-section");
    allContents.forEach(content => content.classList.add("d-none"));

    // 2. Aktif içerik bölümünü göster
    document.getElementById(`content-${tabId}`).classList.remove("d-none");

    // 3. Tüm sekmelerin bold sınıfını kaldır
    const allTabs = document.querySelectorAll('ul.list-unstyled a');
    allTabs.forEach(tab => {
        tab.classList.remove("fw-bold");
    });

    // 4. Aktif sekmeye bold sınıfını ekle
    const activeTab = document.getElementById(`tab-${tabId}`);
    activeTab.classList.add("fw-bold");
}

function toggleAnswer(element, answerId) {
    // Sorunun içeriğini al
    const answerElement = document.getElementById(answerId);

    // Tüm cevapları gizle
    const allAnswers = document.querySelectorAll('.custom-list p');
    allAnswers.forEach(answer => answer.classList.add('d-none'));

    // Tıklanan cevabı göster
    answerElement.classList.toggle('d-none');

    // Tüm bağlantılardan koyu yazıyı kaldır
    const allLinks = document.querySelectorAll('.custom-list a');
    allLinks.forEach(link => {
        link.classList.remove('fw-bold');
    });

    // Tıklanan soruya koyu yazıyı ekle
    element.classList.add('fw-bold');
}


    </script>
</body>

</html>
