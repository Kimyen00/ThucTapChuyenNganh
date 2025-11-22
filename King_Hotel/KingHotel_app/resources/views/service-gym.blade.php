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
      <h1 class="text-danger fw-bold mb-3">Gym & Yoga</h1>
      <p class="lead text-muted">Phòng tập hiện đại, lớp yoga thư giãn mỗi sáng.</p>
    </div>
  </section>


  <section class="container my-5">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="asset/images/gym.jpg" alt="Phòng gym & yoga" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <h3 class="text-danger mb-3">Không gian tập luyện đẳng cấp</h3>
        <p>
          Tại KingHotel, chúng tôi hiểu rằng sức khỏe là điều quý giá. Trung tâm Gym & Yoga được thiết kế hiện
          đại,
          với trang thiết bị nhập khẩu cùng huấn luyện viên chuyên nghiệp.
        </p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Phòng gym máy móc hiện đại</li>
          <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Lớp yoga sáng & tối</li>
          <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Miễn phí cho khách đặt phòng
          </li>
          <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Khăn & nước suối miễn phí</li>
        </ul>
        <a href="{{ route('rooms') }}" class="btn btn-danger mt-3">Đặt phòng để trải nghiệm</a>
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