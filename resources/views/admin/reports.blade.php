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
                            <li class="breadcrumb-item active">Bu sayfada kullanıcılar hakkında yapılan şikayetleri inceleyip aksiyon alabilirsiniz.</li>
                        </ol>
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şikayet Edilen Kullanıcı</th>
                                        <th>Şikayet Eden Kullanıcı</th>
                                        <th>Şikayet Kategorisi</th>
                                        <th>Tarih</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($reports as $report)
                                    <tr>
                                        <td>{{$report->id}}</td>
                                        <td>{{$report->reported->name}} (ID: {{$report->reported->id}})</td>
                                        <td>{{$report->reporter->name}} (ID: {{$report->reporter->id}})</td>
                                        <td>{{$report->report_category}}</td>
                                        <td>{{$report->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a onclick="popup({{$report->id}});" class="btn btn-primary">İncele</a>
                                            <a onclick="deleteReport({{$report->id}})" class="btn btn-danger">Şikayeti Sil</a>
                                            <a onclick="userInfo({{$report->reporter->id}})" class="btn btn-secondary">Şikayet Eden Kullanıcı Bilgisi</a>
                                            <a onclick="userInfo({{$report->reported->id}})" class="btn btn-secondary">Şikayet Edilen Kullanıcı Bilgisi</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Şikayet bulunamadı.</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $reports->links('vendor.pagination.bootstrap-5') }}

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
            let userInfo = id => {
                window.open(`/admin/users/${id}`, 'popup', 'width=1200,height=1200');
            }

            let popup = id => {
                window.open(`/admin/sikayet-preview/${id}`, 'popup', 'width=1200,height=1200');
            }
            let deleteReport = (id) => {
        if (confirm('Şikayeti silmek istediğinize emin misiniz?')) {
            fetch('/admin/sikayet/delete', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    _token: '{{ csrf_token() }}',
                    id: id
                })
            }).then(() => {

            });
        }
    }
        </script>
    </body>
</html>
