@php
use App\Role;
$notadmin = Role::where('name', 'not like', "%Admin%")->get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Fahmi Aulia Rahman">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/themes/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/themes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/themes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/themes/dist/css/themes.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/sweetalert.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/themes/plugins/jquery-ui/jquery-ui.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($judul === 'Dashboard') active @endif" data-widget="pushmenu" href="#"
                        role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline">Selamat datang, {{ Auth::user()->nama }}!</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#keluar">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar Aplikasi
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ asset('assets/images/alfidaa.png') }}" alt="Alfidaa Cendikia Logo"
                    class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light alfidaa">Al Fidaa Cendikia</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets') }}/images/profile/{{ Auth::user()->photo }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a class="d-block">{{ Auth::user()->nama }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Dashboard') active @endif" href="{{ url('/') }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Ganti Password') active @endif"
                                href="{{ route('password') }}">
                                <i class="nav-icon fas fa-key"></i>
                                <p>Ganti Password</p>
                            </a>
                        </li>

                        @hasrole('Super Admin')
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Manajemen Admin') active @endif"
                                href="{{ route('admin.index') }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>Manajemen Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Pengaturan Aplikasi') active @endif"
                                href="{{ route('settings.index') }}">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>Pengaturan Aplikasi</p>
                            </a>
                        </li>
                        @endhasrole

                        @hasanyrole('Admin SMP|Super Admin')
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Manajemen Siswa SMP') active @endif"
                                href="{{ route('mgtSMP.index') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manajemen Siswa SMP</p>
                            </a>
                        </li>
                        @endhasanyrole
                        @hasrole('Admin SMA|Super Admin')
                        {{-- bukan(bukanAdmin) = Admin --}}
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Manajemen Siswa SMA') active @endif"
                                href="{{ route('mgtSMA.index') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manajemen Siswa SMA</p>
                            </a>
                        </li>
                        @endhasrole
                        @hasrole('Admin SMK|Super Admin')
                        {{-- bukan(bukanAdmin) = Admin --}}
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Manajemen Siswa SMK') active @endif"
                                href="{{ url('/') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manajemen Siswa SMK</p>
                            </a>
                        </li>
                        @endhasrole
                        @hasrole('Admin Keuangan|Super Admin')
                        {{-- bukan(bukanAdmin) = Admin --}}
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Pembuatan Nota') active @endif"
                                href="{{ route('biaya.index') }}">
                                <i class="nav-icon fas fa-receipt"></i>
                                <p>Pembuatan Nota</p>
                            </a>
                        </li>
                        @endhasrole

                        @hasanyrole($notadmin)
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Biodata Calon Siswa') active @endif"
                                href="{{ route('biodata.index') }}">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>Biodata Calon Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Data Orang Tua / Wali') active @endif"
                                href="{{ route('orangtua.index') }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Data Orang Tua / Wali</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Cetak Kartu Ujian') active @endif"
                                href="{{ route('examcard') }}">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>Cetak Kartu Ujian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Informasi Kelulusan') active @endif"
                                href="{{ route('information') }}">
                                <i class="nav-icon fas fa-award"></i>
                                <p>Informasi Kelulusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Rincian Biaya') active @endif"
                                href="{{ route('rincian_biaya') }}">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Rincian Biaya</p>
                            </a>
                        </li>
                        @if (1 == 1)
                        <li class="nav-item">
                            <a class="nav-link @if($judul === 'Pembayaran') active @endif"
                                href="{{ route('pembayaransiswa.index') }}">
                                <i class="nav-icon fas fa-clipboard-check"></i>
                                <p>Data Pembayaran</p>
                            </a>
                        </li>
                        @endif
                        @endrole
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#keluar">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{ $judul }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    @yield('konten')
                </div>
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <p>Yayasan Pendidikan Islam Al Fidaa Cendikia.</p>
            </div>
            <strong>Copyright &copy; {{ date('Y') }}. All rights reserved.
        </footer>
    </div>

    <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="keluarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="keluarLabel">Keluar Aplikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Ananda Yakin Ingin Keluar Dari Aplikasi?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn bg-purple">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets') }}/themes/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/themes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/themes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/themes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/themes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets') }}/themes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ asset('assets') }}/themes/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('assets') }}/themes/dist/js/themes.min.js"></script>
    <script src="{{ asset('assets') }}/themes/dist/js/demo.js"></script>
    <script src="{{ asset('assets') }}/themes/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('assets') }}/js/sweetalert.min.js"></script>
    @include('sweet::alert')
    @yield('js')
</body>

</html>