<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="/assets/admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">arabul.us</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            @php
            $admin = \App\Models\AdminUser::where('id', session()->get('admin_id'))->first();
        @endphp
            @include('admin.partials.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ana Sayfa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Hoş Geldiniz, {{$admin->username}}</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <div class="small text-uppercase">Kayıtlı Kullanıcı Sayısı</div>
                                        <div class="display-5 fw-bold">{{$userCount}}</div>
                                    </div>
                                    <div class="position-absolute top-50 end-0 translate-middle-y me-3">
                                        <i class="fas fa-user fa-3x"></i>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <div class="small text-uppercase">Yayınlanmamış İlan Sayısı/Yayınlanmış İlan Sayısı</div>
                                        <div class="display-5 fw-bold">{{$unlistedListingCount}}/{{$totalListingCount}}</div>
                                    </div>
                                    <div class="position-absolute top-50 end-0 translate-middle-y me-3">
                                        <i class="fas fa-user fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <div class="small text-uppercase">Şikayet Sayısı</div>
                                        <div class="display-5 fw-bold">{{$reportCount}}</div>
                                    </div>
                                    <div class="position-absolute top-50 end-0 translate-middle-y me-3">
                                        <i class="fas fa-circle-exclamation fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Welcome Text -->
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Hoşgeldiniz
                                    </div>
                                    <div class="card-body">
                                        <p>Merhaba, {{$admin->username}}. Bu sayfada site üzerindeki genel verilere ulaşabilirsiniz.</p>
                                    </div>
                                </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/assets/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/assets/admin/assets/demo/chart-area-demo.js"></script>
        <script src="/assets/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="/assets/admin/js/datatables-simple-demo.js"></script>
    </body>
</html>
