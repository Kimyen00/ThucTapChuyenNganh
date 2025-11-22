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
        <h2 class="text-center mb-4 text-danger fw-bold">Đăng Ký Hội Viên</h2>

        <div id="alertContainer" aria-live="assertive" aria-atomic="true"></div>

        <form id="registerForm" novalidate>

            <div class="mb-3">
                <label for="fullname" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ và tên..."
                    required autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label">Giới tính</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Nam" required>
                        <label class="form-check-label" for="male">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Nữ">
                        <label class="form-check-label" for="female">Nữ</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại..."
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email..." required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Tạo tên đăng nhập..."
                    required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Tạo mật khẩu..."
                    required>
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    placeholder="Xác nhận mật khẩu..." required>
            </div>

            <button type="submit" class="btn btn-danger w-100 fw-semibold">Đăng Ký</button>

            <div class="text-center m-3">
                Đã có tài khoản? <a href="{{ route('login-h') }}"> Đăng nhập ngay</a>
            </div>
        </form>
    </main>
@endsection
@section('js_rieng') 
    <script src="{{ asset('asset/js/hoivien.js') }}"></script>
@endsection