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
      <h1 class="text-danger fw-bold mb-3">Ẩm Thực 5 Sao</h1>
      <p class="lead text-muted">Trải nghiệm hương vị tinh hoa từ các đầu bếp hàng đầu thế giới</p>
    </div>
  </section>



  <section class="container my-5">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <img src="asset/images/food.jpg" class="img-fluid rounded" alt="Ẩm thực">
      </div>
      <div class="col-lg-6">
        <h2 class="text-danger">Hành trình vị giác đẳng cấp</h2>
        <p>KingHotel tự hào mang đến hành trình ẩm thực phong phú, từ các món Á tinh tế đến các món Âu sang trọng.</p>
        <p>Đội ngũ đầu bếp tài năng, tận tâm sáng tạo nên những thực đơn hấp dẫn mỗi ngày cho du khách.</p>
        <p>Buffet sáng thịnh soạn, thực đơn gọi món đa dạng, tiệc BBQ ngoài trời, trải nghiệm ẩm thực 5 sao đích thực.
        </p>

        <div class="row mt-4">
          <div class="col-6 mb-3"><i class="fas fa-utensils text-danger"></i> Buffet sáng miễn phí</div>
          <div class="col-6 mb-3"><i class="fas fa-wine-glass-alt text-danger"></i> Nhà hàng cao cấp</div>
          <div class="col-6 mb-3"><i class="fas fa-concierge-bell text-danger"></i> Phục vụ tận phòng</div>
          <div class="col-6 mb-3"><i class="fas fa-glass-cheers text-danger"></i> Bar Lounge sang trọng</div>
        </div>
        <a href="{{ route('rooms') }}" class="btn btn-danger mt-4">Đặt phòng để trải nghiệm</a>

        <a href="{{ route('service') }}" class="btn btn-danger mt-4">Quay lại Dịch Vụ</a>
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