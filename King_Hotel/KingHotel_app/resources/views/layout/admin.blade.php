<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hệ thống Quản lý Khách sạn">
    <meta name="author" content="">
    <title>Admin - Quản lý Khách sạn</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">🏨 Quản lý Khách sạn</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Tổng quan (Dashboard)</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Nghiệp vụ Lễ tân">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseOperations" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="nav-link-text">Nghiệp vụ Lễ tân</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseOperations">
                        <li>
                            <a href="{{ route('admin.datphongs.index') }}">
                                <i class="fa fa-fw fa-calendar-check-o"></i> Đặt Phòng (Booking)
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.hoadons.index') }}">
                                <i class="fa fa-fw fa-money"></i> Hóa đơn & Thanh toán
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.phongs.index') }}">
                                <i class="fa fa-fw fa-building"></i> Trạng thái Phòng
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quản lý Dữ liệu">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDataManagement" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-database"></i>
                        <span class="nav-link-text">Quản lý Dữ liệu</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseDataManagement">
                        
                        {{-- Con người --}}
                        <li>
                            <a href="{{ route('admin.khachhangs.index') }}">
                                <i class="fa fa-fw fa-users"></i> Khách hàng
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.nguoiquanlys.index') }}">
                                <i class="fa fa-fw fa-user-secret"></i> Nhân viên / Admin
                            </a>
                        </li>

                        {{-- Cấu hình Phòng --}}
                        <li>
                            <a href="{{ route('admin.loaiphongs.index') }}">
                                <i class="fa fa-fw fa-bed"></i> Loại Phòng & Giá
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.tiennghis.index') }}">
                                <i class="fa fa-fw fa-bath"></i> Tiện nghi Phòng
                            </a>
                        </li>

                        {{-- Dịch vụ --}}
                        <li>
                            <a href="{{ route('admin.dichvus.index') }}">
                                <i class="fa fa-fw fa-coffee"></i> Dịch vụ Khách sạn
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Báo cáo">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Báo cáo Doanh thu</span>
                    </a>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cài đặt">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSettings" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-cog"></i>
                        <span class="nav-link-text">Cấu hình Hệ thống</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseSettings">
                        <li><a href="#">Thông tin Khách sạn</a></li>
                        <li><a href="#">Quy tắc & Chính sách</a></li>
                    </ul>
                </li>
                
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container-fluid">
            
            @yield('body') 
            
        </div>
    </div>

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Quản lý Khách sạn 2024</small>
            </div>
        </div>
    </footer>
    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <div class="modal fade" id="exampleModal" tabadmin="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận Đăng xuất?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Đăng xuất" bên dưới để kết thúc phiên làm việc hiện tại.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    
                    {{-- Nút Logout kích hoạt form POST --}}
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form-modal').submit();">
                        Đăng xuất
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Form Logout ẩn --}}
    <form id="logout-form-modal" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-charts.min.js') }}"></script>
</body>

</html>