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
        <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">

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
                        <h1 class="mt-4">İlanlar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bu sayfada henüz yayınlanmamış ilanları görebilir ve onaylayabilirsiniz ya da reddedebilirsiniz.</li>
                        </ol>
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>İlan Başlığı</th>
                                        <th>İlan Sahibi</th>
                                        <th>İlan Tarihi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($listings as $listing)
                                    <tr>
                                        <td>{{$listing->id}}</td>
                                        <td>{{$listing->title}}</td>
                                        <td>{{$listing->user->name}}</td>
                                        <td>{{$listing->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a onclick="popup({{$listing->id}});" class="btn btn-primary">İncele</a>
                                            <a onclick="act('approve', {{$listing->id}})" class="btn btn-success">Onayla</a>
                                            <a onclick="act('deny', {{$listing->id}})"  class="btn btn-danger">Reddet</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Henüz yayınlanmamış ilan bulunmamaktadır.</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $listings->links('vendor.pagination.bootstrap-5') }}

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


        <script>
            let popup = id => {
                window.open(`/admin/ilan-preview/${id}`, 'popup', 'width=1200,height=1200');
            }

            let act = (action,id) => {
                fetch(`/admin/ilanlar/${id}/${action}`, {
                    method: 'GET'
                }).then(response => {
                    if(response.ok) {
                        PNotify.success({
                            text: 'İşlem başarılı',
                            delay: 2000
                        });
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        </script>
    </body>
</html>
