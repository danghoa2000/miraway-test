<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Giới thiệu') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Giải pháp') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Tin tức & Sự kiện') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Cơ hội nghề nghiệp') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Đăng nhập') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
                        </a>
                        <p>CÔNG TY CỔ PHẦN MIRAWAY GIẢI PHÁP CÔNG NGHỆ</p>

                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>VP Tại Hà Nội: Tầng 4 - Tòa nhà GTC, Số 69, phố Tố Hữu, Vạn Phúc, Hà Đông, Hà Nội</p>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>VP Tại Hà Nội: Tầng 4 - Tòa nhà GTC, Số 69, phố Tố Hữu, Vạn Phúc, Hà Đông, Hà Nội</p>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <p>Tel: 024 36 436 999</p>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <p>Hotline tư vấn 24/7: 0981 350 960</p>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p>contact@miraway.vn</p>
                        </div>
                    </div>
                    <div class="col-md-2 pt-5">
                        <a href="#" class="link">Giới thiệu Miraway</a>
                        <a href="#" class="link">Cơ hội nghệ nghiệp</a>
                        <a href="#" class="link">Lĩnh vực hoạt động</a>
                        <a href="#" class="link">Tin tức & Hoạt động</a>
                        <a href="#" class="link">Liên hệ</a>
                    </div>
                    <div class="col-md-2 pt-5">
                        <a href="#" class="link">Chính sách bảo mật</a>
                        <a href="#" class="link">Điều khoản sử dụng</a>
                    </div>
                    <div class="col-md-2 pt-5">
                        <p>Mạng xã hội</p>
                        <div class="media">
                            <a class="link" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="link" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="link" href="#">In</span>
                            <a class="link" href="#">Zalo</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
