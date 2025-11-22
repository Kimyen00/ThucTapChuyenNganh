@extends('layout.admin')

@section('body')
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Quản lý Dịch vụ</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>
                <i class="fa fa-coffee"></i> Danh sách Dịch vụ
            </span>
            
            {{-- NÚT THÊM MỚI --}}
            <a href="#" class="btn btn-primary btn-sm shadow-sm">
                <i class="fa fa-plus-circle"></i> Thêm Dịch vụ
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th width="25%">Tên Dịch vụ</th>
                            <th width="15%">Đơn giá (VNĐ)</th>
                            <th class="text-center" width="10%">Đơn vị</th>
                            <th class="text-center" width="15%">Trạng thái</th>
                            
                            {{-- TÁCH THÀNH 2 CỘT THAO TÁC --}}
                            <th class="text-center" width="10%">Sửa</th>
                            <th class="text-center" width="10%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dichVus->count() > 0)
                            @foreach($dichVus as $dv)
                            <tr>
                                <td class="align-middle text-center">{{ $dv->id }}</td>
                                <td class="align-middle">
                                    <span class="font-weight-bold text-primary">{{ $dv->ten_dich_vu }}</span>
                                </td>
                                <td class="align-middle text-success font-weight-bold">
                                    {{ number_format($dv->don_gia, 0, ',', '.') }}
                                </td>
                                <td class="align-middle text-center">{{ $dv->don_vi_tinh }}</td>
                                <td class="align-middle text-center">
                                    @if($dv->trang_thai)
                                        <span class="badge badge-success p-2">Hoạt động</span>
                                    @else
                                        <span class="badge badge-secondary p-2">Ngừng</span>
                                    @endif
                                </td>
                                
                                {{-- CỘT SỬA --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Sửa">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>

                                {{-- CỘT XÓA --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Xóa" onclick="alert('Chức năng đang cập nhật!');">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-muted py-5">
                                    <i class="fa fa-coffee fa-3x mb-3"></i><br>
                                    Chưa có dữ liệu dịch vụ.<br>
                                    Vui lòng thêm dịch vụ mới.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="card-footer small text-muted">
            Tổng số dịch vụ: {{ $dichVus->count() }}
        </div>
    </div>
</div>
@endsection