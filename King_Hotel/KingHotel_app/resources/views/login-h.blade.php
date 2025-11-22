  @extends('layout/home')
    @section('css_rieng') 
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
@endsection
@section('body') 

    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top border-bottom border-danger ">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ route('home') }}">
                <img src="asset/images/logo.png" alt="KingHotel Logo" height="40" class="me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <div class="navbar-nav mx-auto">
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('home') }}">Home</a></div>
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('about') }}">About</a></div>
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('service') }}">Dịch vụ</a></div>
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('contact') }}">Contact</a></div>
                </div>
                <a class="btn btn-danger ms-lg-3 mt-3 mt-lg-0" href="{{ route('rooms') }}">Đặt Ngay</a>

            </div>
        </div>
    </nav>


    <main class="login-container">
        <h2 class="text-center mb-4 text-danger fw-bold">Đăng nhập</h2>

        <div id="alertContainer" aria-live="assertive" aria-atomic="true"></div>

        <form id="loginForm" novalidate>
            <div class="mb-3">
                <label for="tendn" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="tendn" name="tendn" placeholder="Nhập tên đăng nhập..." required
                    autofocus>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu..."
                    required>
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-semibold">Đăng nhập</button>

            <div class="text-center m-3">
                <a class="me-3" href="#"> Quên mật khẩu</a>
                <a href="{{ route('register-h') }}"> Đăng kí</a>

            </div>
        </form>
    </main>
@endsection
@section('js_rieng') 
    <script src="{{ asset('asset/js/login.js') }}"></script>
@endsection