  @extends('layout/home')
  @section('css_rieng') 
    <link rel="stylesheet" href="{{ asset('asset/css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/about.css') }}">
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
                    <div class="nav-item me-3"> <a class="nav-link active" href="{{ route('service') }}">Dịch vụ</a></div>
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('contact') }}">Contact</a></div>
                </div>
                <a class="btn btn-danger ms-lg-3 mt-3 mt-lg-0" href="{{ route('rooms') }}">Đặt Ngay</a>

            </div>
        </div>
    </nav>


    <section class="banner-small p-0 justify-content-center align-content-center "
        style="background-image: url('asset/images/baner.jpg')">
        <h1 class=" justify-content-center align-content-center fw-bold mb-5 text-light">Dịch vụ của chúng tôi</h1>
    </section>




    <section class="container my-5">
        <h2 class="text-center text-danger mb-5 " style="font-weight: bolder;">Dịch Vụ Nổi Bật</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card text-center p-4 shadow-sm">
                    <i class="fas fa-spa fa-3x text-danger mb-3"></i>
                    <h5 class="mb-3">Spa & Massage</h5>
                    <p>
                        Thư giãn cơ thể, tinh thần với dịch vụ spa chuẩn 5 sao. Chúng tôi cung cấp các
                        liệu pháp massage chuyên nghiệp giúp bạn xua tan căng thẳng.
                    </p>
                    <a href="{{ route('service-spa') }}" class="btn btn-outline-danger btn-sm">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center p-4 shadow-sm">
                    <i class="fas fa-utensils fa-3x text-danger mb-3"></i>
                    <h5 class="mb-3">Ẩm Thực 5 Sao</h5>
                    <p>
                        Buffet sáng, bữa tối sang trọng với thực đơn quốc tế. Đội ngũ đầu bếp tài năng
                        của chúng tôi sẽ mang đến cho bạn những món ăn tuyệt vời nhất.
                    </p>
                    <a href="{{ route('service-foods') }}" class="btn btn-outline-danger btn-sm">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center p-4 shadow-sm">
                    <i class="fas fa-swimmer fa-3x text-danger mb-3"></i>
                    <h5 class="mb-3">Hồ Bơi Vô Cực</h5>
                    <p>
                        Đây là nơi lý tưởng để thư giãn và tận hưởng ánh nắng mặt trời. Ngắm hoàng hôn và thư giãn giữa
                        trời nước bao la tuyệt đẹp.
                    </p>
                    <a href="{{ route('service-pool') }}" class="btn btn-outline-danger btn-sm">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center p-4 shadow-sm">
                    <i class="fas fa-dumbbell fa-3x text-danger mb-3"></i>
                    <h5 class="mb-3">Gym & Yoga</h5>
                    <p>
                        Phòng tập hiện đại, lớp yoga thư giãn mỗi sáng. Chúng tôi cung cấp các thiết bị
                        tập luyện tiên tiến và không gian yên tĩnh cho yoga.
                    </p>
                    <a href="{{ route('service-gym') }}" class="btn btn-outline-danger btn-sm">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center p-4 shadow-sm">
                    <i class="fas fa-car fa-3x text-danger mb-3"></i>
                    <h5 class="mb-3">Đưa Đón Sân Bay</h5>
                    <p>
                        Dịch vụ xe đưa đón tiện lợi, an toàn 24/7. Chúng tôi cam kết mang đến cho bạn trải
                        nghiệm di chuyển thoải mái và an toàn nhất.
                    </p>
                    <a href="{{ route('service-car') }}" class="btn btn-outline-danger btn-sm">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center p-4 shadow-sm">
                    <i class="fas fa-map-marked-alt fa-3x text-danger mb-3"></i>
                    <h5 class="mb-3">Tour Nội Thành</h5>
                    <p>
                        Khám phá các điểm du lịch hấp dẫn tại địa phương, tham quan nhiều nơi mới lạ với hướng dẫn viên
                        nhiệt tình và
                        am hiểu địa bàn.
                    </p>
                    <a href="{{ route('service-tour') }}" class="btn btn-outline-danger btn-sm">
                        Xem chi tiết
                    </a>
                </div>
            </div>



        </div>
    </section>

@endsection
@section('js_rieng') 
    <script src="{{ asset('asset/js/about.js') }}"></script>
@endsection