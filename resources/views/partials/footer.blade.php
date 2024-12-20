<footer class="text-light text-center text-lg-start py-5 mt-5">
    <div class="container">
        <!-- Kategoriler ve Arabul Başlığı -->
        <div class="row">
            <!-- Kategoriler -->
            <div class="col-md-6 text-center">
                <h5 class=" mb-4 px-3 py-2" style="display: inline-block; border:1px solid white; border-radius:10px;">Kategoriler</h5>
                <ul class="list-unstyled">
                    @php
                    $arr = [];
                    // add 3 of each $firstCategorySubCategories, $secondCategorySubCategories,$thirdCategorySubCategories to $arr
                    for ($i = 0; $i < 3; $i++) {
                        $arr[] = $firstCategorySubCategories[$i];
                        $arr[] = $secondCategorySubCategories[$i];
                        $arr[] = $thirdCategorySubCategories[$i];
                    }

                    @endphp
                    @foreach ($arr as $subCategory)
                    <li><a href="{{route('listings.by_category', $subCategory->id)}}" class="text-light text-decoration-none">{{$subCategory->name}}</a></li>
                    @endforeach
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
        <p class="text-muted mt-4 mb-0 fw-bold" style="font-size:15px;">&copy; {{date('Y')}} arabul.us. Tüm hakları saklıdır.</p>
    </div>
</footer>
