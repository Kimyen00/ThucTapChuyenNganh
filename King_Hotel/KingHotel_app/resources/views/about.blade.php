 
 <x:layout Home>
    
 @extends('layout/home')
  @section('css_rieng') 
    <link rel="stylesheet" href="{{ asset('asset/css/about.css') }}">
@endsection
@section('body') 

   <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top  border-bottom border-danger ">
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
                    <div class="nav-item me-3"> <a class="nav-link active" href="{{ route('about') }}">About</a></div>
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('service') }}">Dịch vụ</a></div>
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('contact') }}">Contact</a></div>
                </div>
                <a class="btn btn-danger ms-lg-3 mt-3 mt-lg-0" href="{{ route('rooms') }}">Đặt Ngay</a>
            </div>
        </div>
    </nav>



    <section class="banner-small p-0 justify-content-center align-content-center "
        style="background-image: url('asset/images/baner.jpg')">
        <h1 class=" justify-content-center align-content-center fw-bold mb-5 text-light">Giới thiệu về KingHotel</h1>
    </section>

    <section class="container my-5">

        <div class="row align-items-center mt-5 mb-5">
            <div class="col-lg-5 col-12 animate-left">
                <h2 class="text-danger">Khởi nguồn đam mê phục vụ</h2>
                <p>KingHotel được thành lập nhằm mang đến những trải nghiệm nghỉ dưỡng đẳng cấp...</p>
                <p>Chúng tôi không ngừng đổi mới, xây dựng hệ thống khách sạn chuẩn quốc tế.</p>
            </div>
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-5 col-12 animate-right">
                <div class="img-wrapper">
                    <img src="asset/images/about1.jpg" class="img-fluid rounded" alt="Giới thiệu KingHotel">
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-5 mb-5">
            <div class="col-lg-5 col-12 animate-left ">
                <div class="img-wrapper">
                    <img src="asset/images/about2.jpg" class="img-fluid rounded" alt="Dịch vụ KingHotel">
                </div>
            </div>
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-5 col-12 animate-right order-lg-1">
                <h2 class="text-danger">Vị trí vàng - Dịch vụ hoàn hảo</h2>
                <p>Tọa lạc tại trung tâm, KingHotel thuận tiện cho du khách khám phá mọi nơi.</p>
                <p>Hệ thống phòng hiện đại, tiện nghi và sang trọng.</p>
            </div>
        </div>

        <div class="row align-items-center mt-5 mb-5">
            <div class="col-lg-5 col-12 animate-left">
                <h2 class="text-danger">Nơi trải nghiệm thăng hoa</h2>
                <p>Không chỉ lưu trú, chúng tôi còn mang đến những dịch vụ giải trí, spa, sự kiện đẳng cấp.</p>
                <p>Trải nghiệm trọn vẹn từng khoảnh khắc tại KingHotel.</p>
            </div>
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-5 col-12 animate-right">
                <div class="img-wrapper">
                    <img src="asset/images/about3.jpg" class="img-fluid rounded" alt="Giới thiệu KingHotel">
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-5 mb-5">
            <div class="col-lg-5 col-12 animate-left ">
                <div class="img-wrapper">
                    <img src="asset/images/about4.jpg" class="img-fluid rounded" alt="Dịch vụ KingHotel">
                </div>
            </div>
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-5 col-12 animate-right order-lg-1">
                <h2 class="text-danger">Hướng tới tương lai bền vững</h2>
                <p>Ứng dụng công nghệ xanh, thông minh, phát triển khách sạn thân thiện môi trường.</p>
                <p>Khẳng định vị thế của KingHotel trong ngành dịch vụ cao cấp.</p>
            </div>
        </div>

    </section>

    <section class="container my-5">
        <h2 class="text-center text-danger mb-4">Thành Tựu Nổi Bật</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card p-3 border-0 shadow achievement">
                    <i class="fas fa-trophy fa-3x text-danger mb-3"></i>
                    <h5>Khách sạn xuất sắc nhất 2023</h5>
                    <p>Được trao giải thưởng danh giá chất lượng dịch vụ và sự hài lòng của khách hàng.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 border-0 shadow achievement">
                    <i class="fas fa-award fa-3x text-danger mb-3"></i>
                    <h5>Top 10 Resort Được Yêu Thích</h5>
                    <p>Khẳng định vị thế trên bản đồ du lịch quốc tế với phong cách nghỉ dưỡng đẳng cấp.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 border-0 shadow achievement">
                    <i class="fas fa-leaf fa-3x text-danger mb-3"></i>
                    <h5>Khách sạn Xanh Thân Thiện</h5>
                    <p>Tiên phong trong việc ứng dụng công nghệ xanh, bảo vệ môi trường sống.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js_rieng') 
    <script src="{{ asset('asset/js/about.js') }}"></script>
@endsection

</x:layout>