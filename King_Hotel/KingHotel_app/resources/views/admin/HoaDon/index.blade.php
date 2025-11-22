@extends('layout.admin')

@section('body')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Danh sách Hóa đơn</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fa fa-file-text"></i> Quản lý Doanh thu</span>
            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Lập Hóa đơn</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">Mã HĐ</th>
                            <th class="text-center">Mã Đơn</th>
                            <th>Khách hàng</th>
                            <th>Tổng tiền</th>
                            <th>Ngày thanh toán</th>
                            <th class="text-center">Trạng thái</th>
                            
                            {{-- TÁCH THÀNH 2 CỘT THAO TÁC --}}
                            <th class="text-center" width="10%">In</th>
                            <th class="text-center" width="10%">Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($hoaDons->count() > 0)
                            @foreach($hoaDons as $hd)
                            <tr>
                                <td class="text-center align-middle font-weight-bold">
                                    #HD{{ $hd->id }}
                                </td>
                                <td class="text-center align-middle">
                                    <a href="#" title="Xem đơn đặt phòng">#DP{{ $hd->dat_phong_id }}</a>
                                </td>
                                <td class="align-middle">
                                    {{ $hd->datPhong->khachHang->ten_khach_hang ?? 'Khách vãng lai' }}
                                </td>
                                <td class="align-middle text-success font-weight-bold">
                                    {{ number_format($hd->tong_tien, 0, ',', '.') }} đ
                                </td>
                                <td class="align-middle">
                                    {{ $hd->ngay_thanh_toan ? date('d/m/Y H:i', strtotime($hd->ngay_thanh_toan)) : '---' }}
                                </td>
                                <td class="text-center align-middle">
                                    @if($hd->trang_thai == 1)
                                        <span class="badge badge-success">Đã thanh toán</span>
                                    @elseif($hd->trang_thai == 2)
                                        <span class="badge badge-secondary">Hoàn tiền</span>
                                    @else
                                        <span class="badge badge-danger">Chưa thu tiền</span>
                                    @endif
                                </td>
                                
                                {{-- CỘT 1: IN HÓA ĐƠN --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-info btn-sm" title="In hóa đơn">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </td>

                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Sửa chi tiết">
                                        <i class="fa fa-pencil">  Sửa</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">Chưa có hóa đơn nào được tạo.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection