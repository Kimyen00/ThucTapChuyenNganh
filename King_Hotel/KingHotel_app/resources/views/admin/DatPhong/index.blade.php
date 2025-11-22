@extends('layout.admin')

@section('body')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Danh sách Đặt phòng</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fa fa-calendar-check-o"></i> Quản lý Đặt phòng</span>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tạo Đơn mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Mã Đơn</th>
                            <th>Khách hàng</th>
                            <th>Ngày đến - Đi</th>
                            <th>Tiền cọc</th>
                            <th>Trạng thái</th>
                            {{-- TÁCH THÀNH 2 CỘT RIÊNG --}}
                            <th class="text-center" width="10%">Chi tiết</th>
                            <th class="text-center" width="10%">Hủy đơn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($datPhongs->count() > 0)
                            @foreach($datPhongs as $dp)
                            <tr>
                                <td class="align-middle">#{{ $dp->id }}</td>
                                <td class="align-middle">
                                    <strong>{{ $dp->khachHang->ten_khach_hang ?? 'Khách vãng lai' }}</strong><br>
                                    <small>{{ $dp->khachHang->so_dien_thoai ?? '' }}</small>
                                </td>
                                <td class="align-middle">
                                    Check-in: {{ date('d/m/Y H:i', strtotime($dp->thoi_gian_den)) }}<br>
                                    Check-out: {{ date('d/m/Y H:i', strtotime($dp->thoi_gian_di)) }}
                                </td>
                                <td class="align-middle text-danger font-weight-bold">
                                    {{ number_format($dp->tien_coc) }} đ
                                </td>
                                <td class="align-middle">
                                    @if($dp->trang_thai == 0)
                                        <span class="badge badge-warning">Chờ xử lý</span>
                                    @elseif($dp->trang_thai == 1)
                                        <span class="badge badge-primary">Đã xác nhận</span>
                                    @elseif($dp->trang_thai == 2)
                                        <span class="badge badge-success">Đang ở</span>
                                    @elseif($dp->trang_thai == 3)
                                        <span class="badge badge-secondary">Đã trả phòng</span>
                                    @else
                                        <span class="badge badge-danger">Đã hủy</span>
                                    @endif
                                </td>
                                
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-info btn-sm" title="Xem chi tiết">
                                        <i class="fa fa-eye"></i> Xem
                                    </a>
                                </td>

                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Hủy đơn">
                                        <i class="fa fa-times"></i> Hủy
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">Chưa có đơn đặt phòng nào.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection