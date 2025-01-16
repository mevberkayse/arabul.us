<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link @if(last(request()->segments()) == 'admin') active @endif" href="/admin">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Ana Sayfa
                </a>
                <div class="sb-sidenav-menu-heading">Yönetim</div>
                <a class="nav-link @if(last(request()->segments()) == 'kullanicilar') active @endif" href="/admin/kullanicilar">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Kullanıcılar
                </a>
                <a class="nav-link @if(last(request()->segments()) == 'ilanlar') active @endif" href="/admin/ilanlar">
                    <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>
                    Onay Bekleyen İlanlar
                </a>
                <a class="nav-link @if(last(request()->segments()) == 'sikayetler') active @endif" href="/admin/sikayetler">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle-exclamation"></i></div>
                    Şikayetler
                </a>

                <a class="nav-link" target="_blank" href="/log-viewer">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-lines"></i></div>
                    Log Viewer
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Giriş Yapılan Kullanıcı:</div>

            {{ $admin->username }}
            <a href="/admin/logout" class="btn btn-danger btn-sm">Çıkış Yap</a>
        </div>
    </nav>
</div>
