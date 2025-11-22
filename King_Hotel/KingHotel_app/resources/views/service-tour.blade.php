  @extends('layout/home')
  @section('css_rieng') 
    <link rel="stylesheet" href="{{ asset('asset/css/service-detail.css') }}">
@endsection
@section('body') 
  <!-- Navbar Chính -->
  <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top border-bottom border-danger ">
    <div class="container sticky-top">
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
      <h1 class="text-danger fw-bold mb-3">Tour Nội Thành</h1>
      <p class="lead text-muted">Khám phá vẻ đẹp văn hóa – lịch sử ngay tại trung tâm thành phố</p>
    </div>
  </section>

  <section class="container my-5">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="asset/images/tour.jpg" alt="Tour nội thành" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <h3 class="text-danger mb-3">Trải nghiệm độc đáo cùng KingHotel</h3>
        <p>
          Tour nội thành của KingHotel mang đến cho bạn hành trình khám phá những địa điểm nổi bật nhất trong
          thành phố.
          Với đội ngũ hướng dẫn viên chuyên nghiệp, mỗi chuyến đi là một hành trình văn hóa sống động.
        </p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fa-solid fa-location-dot text-success me-2"></i>Tham quan Nhà thờ Đức Bà,
            Dinh Độc Lập, Bưu điện TP</li>
          <li class="mb-2"><i class="fa-solid fa-utensils text-success me-2"></i>Thưởng thức ẩm thực địa
            phương hấp dẫn</li>
          <li class="mb-2"><i class="fa-solid fa-users text-success me-2"></i>Hướng dẫn viên kinh nghiệm,
            nhiệt tình</li>
          <li class="mb-2"><i class="fa-solid fa-clock text-success me-2"></i>Tour nửa ngày hoặc cả ngày linh
            hoạt</li>
        </ul>
        <a href="{{ route('rooms') }}" class="btn btn-danger mt-3">Đặt Tour Ngay</a>
        <a href="{{ route('service') }}" class="btn btn-danger mt-3">Quay lại Dịch vụ</a>

      </div>
    </div>
  </section>


  <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <img src="" id="modalImage" class="img-fluid rounded shadow" alt="Preview">
      </div>
    </div>
  </div>

@endsection
@section('js_rieng') 
    <script src="{{ asset('asset/js/service-detail.js') }}"></script>
@endsection