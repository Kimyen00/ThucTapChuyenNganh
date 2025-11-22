  @extends('layout/home')
  @section('css_rieng') 
    <link rel="stylesheet" href="{{ asset('asset/css/xemphong.css') }}">
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
          <div class="nav-item me-3"> <a class="nav-link" href="{{ route('service') }}">Dịch vụ</a></div>
          <div class="nav-item me-3"> <a class="nav-link" href="{{ route('contact') }}">Contact</a></div>
        </div>
        <a class="btn btn-danger ms-lg-3 mt-3 mt-lg-0" href="{{ route('rooms') }}">Đặt Ngay</a>
      </div>
    </div>
  </nav>

  <section class="container my-5">
    <div class="row">
    <!-- Form đơn đặt phòng -->
      <div class="col-lg-4">
        <div class="card shadow p-4 sticky-top" style="top: 80px;" id="bookingForm">
          <h4 class="text-danger mb-4">Đơn đặt phòng của tôi</h4>

          <form>
            <div class="mb-3">
              <label for="checkin" class="form-label">Ngày nhận phòng</label>
              <input type="date" class="form-control" id="checkin">
            </div>

            <div class="mb-3">
              <label for="checkout" class="form-label">Ngày trả phòng</label>
              <input type="date" class="form-control" id="checkout">
            </div>

            <div class="mb-3">
              <label for="roomType" class="form-label">Loại phòng</label>
              <select class="form-select" id="roomType">
                <option selected>Chọn phòng...</option>
                <option value="standard">Standard Room</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="suite">Suite Room</option>
              </select>
            </div>

            <!-- Thêm phần tử hiển thị tổng tiền -->
            <p id="totalPrice" class="text-danger fw-bold"></p>

            <button type="submit" class="btn btn-danger w-100">Xác nhận đặt phòng</button>
          </form>
        </div>
      </div>
      <div class="col-lg-8">
        <h3 class="text-danger mb-4 ">Chọn phòng</h3>

        <!-- Phòng 1 -->
        <div class="room-card card mb-4 shadow-sm" data-price="1400000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong1.jpg') }}" class="img-fluid rounded-start" alt="King Lite Queen">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger">King Lite Queen</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 2 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 20m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 1 Giường Queen</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-phone"></i> Điện thoại</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>
              </div>

              <p class="room-description">
                Phòng King Lite Queen tầng thấp, không gian tiện nghi tối ưu cho 2 khách lưu trú.
              </p>

              <p class="text-danger fw-bold">1.400.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Lite Queen" data-price="1400000">Chọn</button>
            </div>
          </div>
        </div>

        <!-- Phòng 2 -->
        <div class="room-card card mb-4 shadow-sm" data-price="1400000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong2.jpg') }}" class="img-fluid rounded-start" alt="King Lite Twin">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger">King Lite Twin</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 2 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 20m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 1 Giường đôi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-phone"></i> Điện thoại</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>
              </div>

              <p class="room-description">
                Phòng Twin rộng rãi, phù hợp cho bạn bè hoặc người yêu đi cùng.
              </p>

              <p class="text-danger fw-bold">1.400.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Lite Twin" data-price="1400000">Chọn</button>
            </div>
          </div>
        </div>

        <!-- Phòng 3 -->
        <div class="room-card card mb-4 shadow-sm" data-price="1850000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong3.jpg') }}" class="img-fluid rounded-start" alt="King Lite+ Queen Cityview">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger">King Lite+ Queen Cityview</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 2 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 20m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 2 Giường đơn</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-phone"></i> Điện thoại</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-tv"></i> Ti vi</div>

              </div>

              <p class="room-description">
                Phòng King Lite+ Queen Cityview của chúng tôi ở tầng cao được thiết kế tinh tế để mang lại sự thoải mái
                tối đa. Hoàn hảo cho du khách đi một mình và các cặp đôi.
              </p>

              <p class="text-danger fw-bold">1.850.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Lite+ Queen Cityview" data-price="1850000"
                data-price="1850000">Chọn</button>
            </div>
          </div>
        </div>

        <!-- Phòng 4 -->
        <div class="room-card card mb-4 shadow-sm" data-price="2750000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong4.jpg') }}" class="img-fluid rounded-start" alt="King Luxe Cityview">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger">King Luxe Cityview</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 3 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 30m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 2 Giường</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-phone"></i> Điện thoại</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-tv"></i> Ti vi</div>

              </div>

              <p class="room-description">
                King Luxe Cityview với 1 giường King + 1 giường tầng. Đến với nhau, ở lại với nhau. 1 trẻ tới 6 tuổi có
                thể ở chung không cần phòng riêng.
              </p>

              <p class="text-danger fw-bold">2.750.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Luxe Cityview" data-price="2750000"
                data-price="2750000">Chọn</button>
            </div>
          </div>
        </div>


        <!-- Phòng 5 -->
        <div class="room-card card mb-4 shadow-sm" data-price="2205000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong5.jpg') }}" class="img-fluid rounded-start" alt="King Lite+ Twin Cityview">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger">King Lite+ Twin Cityview</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 2 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 25m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 2 Giường đơn</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-phone"></i> Điện thoại</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-tv"></i> Ti vi</div>

              </div>

              <p class="room-description">
                King Lite+ Twin Cityview mang đến trải nghiệm nghỉ dưỡng đẳng cấp với 2 giường đơn thoải mái, phù hợp
                cho 2 khách.
                Tọa lạc ở tầng cao với tầm nhìn hướng thành phố rực rỡ, đây là lựa chọn lý tưởng cho cặp đôi bạn bè hoặc
                đồng nghiệp tìm kiếm sự riêng tư và tiện nghi.
              </p>

              <p class="text-danger fw-bold">2.205.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Lite+ Twin Cityview"
                data-price="2205000">Chọn</button>
            </div>
          </div>
        </div>

        <!-- Phòng 6 -->
        <div class="room-card card mb-4 shadow-sm" data-price="900000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong6.jpg') }}" class="img-fluid rounded-start" alt="King Solo Smart">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger">King Solo Smart</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 1 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 20m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 1 Giường đơn</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>
              </div>

              <p class="room-description">

                King Solo là lựa chọn tối ưu cho khách du lịch một mình.
                Phòng được trang bị 1 giường đơn thoải mái, không gian gọn gàng, đầy đủ tiện nghi cơ bản với mức giá rất
                hợp lý.
              </p>

              <p class="text-danger fw-bold">900.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Solo Smart" data-price="900000"
                data-price="900000">Chọn</button>
            </div>
          </div>-
        </div>
        <!-- Phòng 7 -->
        <div class="room-card card mb-4 shadow-sm" data-price="780000">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
              <div class="room-image-wrapper">
                <img src="{{ asset('asset/images/phong7.jpg') }}" class="img-fluid rounded-start" alt="King Cozy Mini">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <h5 class="room-title text-danger"> King Cozy Mini</h5>
              <div class="room-info mb-3">
                <span><i class="fas fa-user-friends"></i> 1 khách</span>
                <span class="ms-3"><i class="fas fa-expand"></i> 20m²</span>
              </div>

              <div class="room-features mb-3 d-flex flex-wrap">
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-wifi"></i> Wi-Fi</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-snowflake"></i> Điều hòa</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fas fa-bed"></i> 1 Giường đơn</div>
                <div class="feature-box bg-body-secondary m-1 "><i class="fa-solid fa-wind"></i> Máy sấy tóc</div>

              </div>

              <p class="room-description">
                Phòng đơn tiết kiệm – tiện nghi nhỏ xinh dành cho người thích yên tĩnh.
                Với 1 giường đơn, máy lạnh, Wi-Fi và không gian ấm cúng, bạn có thể tận hưởng kỳ nghỉ hoặc chuyến công
                tác một cách nhẹ nhàng và hiệu quả.
              </p>

              <p class="text-danger fw-bold">780.000đ/đêm</p>
              <button class="btn btn-danger select-room" data-room="King Cozy Mini" data-price="780000">Chọn</button>
            </div>
          </div>-
        </div>
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
    <script src="{{ asset('asset/js/xemphong.js') }}"></script>
@endsection