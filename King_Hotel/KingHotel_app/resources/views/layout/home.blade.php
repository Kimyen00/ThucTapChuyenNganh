<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KingHotel - Trang Chủ</title>

  <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  <script src="{{ asset('asset/js/index.js') }}"></script>
  <script src="{{ asset('asset/js/preview.js') }}"></script>
  <script src="{{ asset('asset/js/contact.js') }}"></script>
@yield('css_rieng')
</head>

<body data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="70" class="bg-body">
  <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark " data-bs-theme="dark">
    <div class="container">
      <div class="text-white d-flex align-items-center gap-4">
        <span><i class="fa-solid fa-phone-volume me-1"></i> 038711111</span>
        <span><i class="fa-brands fa-rocketchat me-1"></i> Chat with Us</span>
      </div>
      <a class="link-light text-danger text-center" href="{{ route('home') }}">
        <img src="{{ asset('asset/images/logo1.png') }}" alt="Logo" style="height: 80px;">
      </a>
      <div class="d-flex">
        <a class="btn btn-light border-0" href="{{ route('login-h') }}"> <i class="fa-solid fa-user"></i>Đăng Nhập</a>
        <a class="btn btn-light ms-3 border-0" href="{{ route('register-h') }}">Đăng Ký Hội Viên</a>
      </div>

    </div>
  </nav>


  @yield('body')

   <footer class="bg-dark text-white text-center p-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 m-3">
          <h5 class="text-danger">Liên Hệ Chúng Tôi</h5>
          <p><i class="fas fa-map-marker-alt"></i> Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
          <p><i class="fas fa-envelope"></i> Email: dh52201797@student.stu.edu.vn</p>
          <p><i class="fas fa-phone"></i> Số điện thoại: 0398 711 773</p>
        </div>
        <div class="col-12 col-md-4 m-3">
          <h5 class="text-danger">Mạng Xã Hội</h5>
          <a href="https://www.facebook.com/" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="https://x.com/" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/" class="text-white me-3"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/" class="text-white"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="col-12 col-md m-3">
          <h5 class="text-danger">Thông Tin Cá Nhân</h5>
          <p>Thực tập chuyên ngành</p>
          <p>Mã Số Sinh Viên: DH52201797</p>
          <p>Họ Tên: Trần Thị Kim Yến</p>
        </div>
      </div>
      <div class="mt-4">
        &copy; 2024 KingHotel. All Rights Reserved.
      </div>
    </div>
  </footer>

  <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <img src="" id="modalImage" class="img-fluid rounded shadow" alt="Preview">
      </div>
    </div>
  </div>
@yield('js_rieng')
  <script src="{{ asset('asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>