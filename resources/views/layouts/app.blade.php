<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom-login.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/sweetalert.css">
    <script src="{{ asset('assets') }}/js/app.js"></script>

    <title>{{ $judul }}</title>
</head>

<body class="image">
    <div class="imageBorder">
        <div class="container tengah">
            <div class="row justify-content-center">

                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-7 bagian-kiri">
                            <h2 class="alfidaa" style="color: #41295a">PPDB SIT Al Fidaa</h2>
                            <p>{{ $judul }}</p>
                            @yield('konten')
                        </div>
                        <div class="col-md-5 d-none d-md-block bagian-kanan m-auto">
                            <img src="{{ asset('assets') }}/images/alfidaa.png" alt="">
                            <h2 class="alfidaa" style="color: #41295a">Yayasan Pendidikan Islam Al Fidaa Cendikia</h2>
                            <p>Penerimaan Peserta Didik Baru TP.
                                <?php echo date('Y', strtotime("+1 year")) ?>/<?php echo date('Y', strtotime("+2 years")) ?>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.easing.min.js"></script>
    <script src="{{ asset('assets') }}/js/sb-admin-2.min.js"></script>
    <script src="{{ asset('assets') }}/js/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>

</html>