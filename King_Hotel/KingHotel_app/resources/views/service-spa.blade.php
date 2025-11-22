  @extends('layout/home')

  @section('css_rieng') 
    <link rel="stylesheet" href="{{ asset('asset/css/service-detail.css') }}">
@endsection
@section('body') 

<!-- Navbar Chính -->
  <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top border-bottom border-danger ">
    <div class="container sticky-top">
      <a class="navbar-brand fw-bold text-danger" href="{{ route('home') }}">
        <img src="{{ asset('asset/images/logo.png') }}" alt="KingHotel Logo" height="40" class="me-2">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <div class="navbar-nav mx-auto">
          <div class="nav-item me-3"> <a class="nav-link" href="{{ route('home') }}">Home</a></div>
          <div class="nav-item me-3"> <a class="nav-link" href="{{ route('about') }}">About</a></div>
          <div class="nav-item me-3"> <a class="nav-link active" href="{{ route('service') }}">Dịch vụ</a></div>
          <div class="nav-item me-3"> <a class="nav-link" href="{{ route('contact') }}">Contact</a></div>
        </div>
        <a class="btn btn-danger ms-lg-3 mt-3 mt-lg-0" href="{{ route('rooms') }}">Đặt Ngay</a>

      </div>
    </div>
  </nav>


  <!-- Banner -->

  <section class="bg-light py-5 text-center">
    <div class="container">
      <h1 class="text-danger fw-bold mb-3">Spa & Yoga</h1>
      <p class="lead text-muted">Tái tạo năng lượng, cân bằng cơ thể và tâm trí trong không gian yên tĩnh</p>
    </div>
  </section>


  <section class="container my-5">
    <div class="row mb-4">
      <div class="col-lg-6 mb-4">
        <img src="{{ asset('asset/images/spa.jpg') }}" class="img-fluid rounded" alt="Spa">
      </div>
      <div class="col-lg-6">
        <h2 class="text-danger">Thư giãn tuyệt đối</h2>
        <p>KingHotel mang đến dịch vụ spa và massage chuẩn quốc tế, giúp du khách tái tạo năng lượng sau những ngày bận
          rộn.</p>
        <p>Không gian thư giãn với hương thơm nhẹ nhàng, âm nhạc du dương và đội ngũ chuyên viên tay nghề cao.</p>
        <p>Liệu trình đa dạng: massage Thụy Điển, đá nóng, trị liệu tinh dầu... giúp chăm sóc toàn diện cơ thể và tinh
          thần.</p>
        <p>Chúng tôi cam kết sử dụng các sản phẩm tự nhiên, an toàn cho sức khỏe, mang lại trải nghiệm thư giãn tuyệt
          vời nhất cho bạn.</p>
        <p>Đặc biệt, dịch vụ spa của chúng tôi còn có các gói chăm sóc sức khỏe, bao gồm liệu trình detox và chăm sóc da
          mặt, giúp bạn luôn tươi trẻ và tràn đầy sức sống.</p>

        <div class="row mt-4">
          <div class="col-6 mb-3"><i class="fas fa-spa text-danger"></i> Phòng trị liệu riêng tư</div>
          <div class="col-6 mb-3"><i class="fas fa-water text-danger"></i> Bồn tắm thủy lực</div>
          <div class="col-6 mb-3"><i class="fas fa-couch text-danger"></i> Ghế massage cao cấp</div>
          <div class="col-6 mb-3"><i class="fas fa-heartbeat text-danger"></i> Liệu trình sức khỏe</div>
        </div>
        <a href="{{ route('rooms') }}" class="btn btn-danger mt-3">Đặt phòng để trải nghiệm</a>
      </div>
    </div>
    <div class="row align-items-center mt-5">
      <div class="col-lg-6 order-lg-2 mb-4">
        <img src="{{ asset('asset/images/spa2.jpg') }}" class="img-fluid rounded" alt="Phòng Massage Riêng Tư">
      </div>
      <div class="col-lg-6 order-lg-1">
        <h3 class="text-danger">Phòng Massage Riêng Tư Cao Cấp</h3>
        <p>Phòng massage được thiết kế sang trọng, yên tĩnh với ánh sáng dịu nhẹ và âm nhạc thư giãn, mang đến không
          gian riêng tư hoàn hảo cho mỗi khách hàng. Bạn sẽ cảm nhận được sự chăm sóc tận tâm trong từng liệu trình, đảm
          bảo phục hồi năng lượng hiệu quả nhất.</p>
        <ul>
          <li>Thiết bị hiện đại, tiện nghi cao cấp</li>
          <li>Dịch vụ cá nhân hóa theo yêu cầu</li>
          <li>Đội ngũ nhân viên chuyên nghiệp, tận tâm</li>
        </ul>
        <a href="{{ route('service') }}" class="btn btn-danger mt-4">Quay lại Dịch Vụ</a>

      </div>
    </div>
  </section>

@endsection

@section('js_rieng') 
    <script src="{{ asset('asset/js/service-detail.js') }}"></script>
@endsection