  @extends('layout/home')
  @section('css_rieng') 
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
                    <div class="nav-item me-3"> <a class="nav-link" href="{{ route('service') }}">Dịch vụ</a></div>
                    <div class="nav-item me-3"> <a class="nav-link active" href="{{ route('contact') }}">Contact</a></div>
                </div>
                <a class="btn btn-danger ms-lg-3 mt-3 mt-lg-0" href="{{ route('rooms') }}">Đặt Ngay</a>

            </div>
        </div>
    </nav>





    <section class="banner-small p-0 justify-content-center align-content-center "
        style="background-image: url('asset/images/baner.jpg')">
        <h1 class=" justify-content-center align-content-center fw-bold mb-5 text-light">Liên hệ với KingHotel</h1>
    </section>




    <section class="container my-5">
        <div class="row g-5">

            <div class="col-lg-6 mb-4">

                <div class="p-4 rounded-4 shadow mb-5"
                    style="background-color: #fcfbf8; border: 1px solid #efeae0; width: 80%;">
                    <h2 class="text-center mb-4 text-danger fw-bold">Gửi tin nhắn cho chúng tôi</h2>
                    <form id="contactForm">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-4 col-form-label">Họ và tên:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name">
                                <div class="text-danger mt-1" id="error-name"></div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email">
                                <div class="text-danger mt-1" id="error-email"></div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="message" class="col-sm-4 col-form-label">Tin nhắn:</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                <div class="text-danger mt-1" id="error-message"></div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger m-4" style="min-width: 50%;">Gửi</button>
                        </div>
                    </form>
                </div>

                <div class="p-4 rounded-4 shadow"
                    style="background-color: #fcfbf8; border: 1px solid #efeae0; width: 80%;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-3 rounded-circle me-3" style="background-color: #efeae0;">
                            <i class="fas fa-map-marker-alt" style="color: red;"></i>
                        </div>
                        <h5 class="mb-0" style="color: red; font-weight: 600;">Địa chỉ</h5>
                    </div>

                    <div class="mt-3 rounded" style="overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9616486333266!2d106.67510897480426!3d10.737439289408972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad3fb62a95%3A0xa9576c84a879d1fe!2zMTgwIENhbyBM4buXLCBQaMaw4budbmcgNCwgUXXhuq1uIDgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1762966459745!5m2!1svi!2s"
                            width="100%"
                            height="180"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="mb-0 mt-2" style="color: #5d4f3e; font-size: 0.9rem;">180 Cao Lỗ, Phường 4, Quận 8, Tp.HCM
                    </p>
                </div>

            </div>

            <div class="col-lg-6 mb-4">

                <div class="col-12 mb-4">
                    <div class="p-4 rounded-4 shadow"
                        style="background-color: #fcfbf8; border: 1px solid #efeae0; width: 80%;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="p-3 rounded-circle me-3" style="background-color: #efeae0;">
                                <i class="fas fa-envelope" style="color: red;"></i>
                            </div>
                            <h5 class="mb-0" style="color: red; font-weight: 600;">Liên hệ</h5>
                        </div>
                        <p class="ms-5 ps-3 mb-1" style="color: #5d4f3e;">Email: dh52201797@student.stu.edu.vn</p>
                        <p class="ms-5 ps-3 mb-1" style="color: #5d4f3e;">Số điện thoại: 0398711773</p>
                    </div>
                </div>


                <div class="col-12 mb-4" style="width: 80%">
                    <div id="contactCarousel" class="carousel slide rounded-4 shadow-sm" data-bs-ride="carousel"
                        data-bs-interval="2000" style="border: 1px solid #efeae0;">
                        <div class="carousel-inner rounded-4" style="height: 350px;">
                            <div class="carousel-item active">
                                <img src="asset/images/phong1.jpg" class="d-block w-100" alt="Ảnh 1"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/phong2.jpg" class="d-block w-100" alt="Ảnh 2"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/phong3.jpg" class="d-block w-100" alt="Ảnh 3"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/phong4.jpg" class="d-block w-100" alt="Ảnh 4"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/phong5.jpg" class="d-block w-100" alt="Ảnh 5"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/phong6.jpg" class="d-block w-100" alt="Ảnh 6"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4" style="width: 80%">
                    <div class="p-4 rounded-4 shadow" style="background-color: #fcfbf8; border: 1px solid #efeae0;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="p-3 rounded-circle me-5" style="background-color: #efeae0;">
                                <i class="fas fa-headphones-alt" style="color: red;"></i>
                            </div>
                            <h5 class="mb-0" style="color: red; font-weight: 600;">Giờ hoạt dộng</h5>
                        </div>
                        <p class="ms-5 ps-3 mb-1" style="color: #5d4f3e;">Thứ 2 - Thứ 6: 8h - 22h</p>
                        <p class="ms-5 ps-3 mb-0" style="color: #5d4f3e;">Chủ nhật: 7h - 24h</p>
                    </div>
                </div>

            </div>
        </div>

        </div>
    </section>

@endsection
@section('js_rieng') 
    <script src="{{ asset('asset/js/about.js') }}"></script>
@endsection