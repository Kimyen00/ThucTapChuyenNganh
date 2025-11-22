@extends('layout.admin')

@section('body')
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Quản lý Khách hàng</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>
                <i class="fa fa-users"></i> Danh sách Khách hàng
            </span>
            
            {{-- NÚT THÊM MỚI --}}
            <a href="#" class="btn btn-primary btn-sm shadow-sm">
                <i class="fa fa-user-plus"></i> Thêm Khách hàng
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th width="20%">Họ và Tên</th>
                            <th width="20%">Email</th>
                            <th width="15%">Số điện thoại</th>
                            <th width="20%">Địa chỉ</th>
                            
                            {{-- TÁCH THÀNH 2 CỘT THAO TÁC --}}
                            <th class="text-center" width="10%">Sửa</th>
                            <th class="text-center" width="10%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($khachHangs->count() > 0)
                            @foreach($khachHangs as $kh)
                            <tr>
                                <td class="align-middle text-center">{{ $kh->id }}</td>
                                <td class="align-middle">
                                    <span class="font-weight-bold text-primary">{{ $kh->ten_khach_hang }}</span>
                                </td>
                                <td class="align-middle">{{ $kh->email }}</td>
                                <td class="align-middle">{{ $kh->so_dien_thoai ?? '---' }}</td>
                                <td class="align-middle small">{{ Str::limit($kh->dia_chi, 40) }}</td>
                                
                                {{-- CỘT SỬA --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Sửa thông tin">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>

                                {{-- CỘT XÓA --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Xóa khách hàng">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-muted py-5">
                                    <i class="fa fa-user-times fa-3x mb-3"></i><br>
                                    Chưa có dữ liệu khách hàng.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="card-footer small text-muted">
            Tổng số khách hàng: {{ $khachHangs->count() }}
        </div>
    </div>
</div>
@endsection