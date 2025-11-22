@extends('layout.admin')

@section('body')
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Danh sách Nhân viên</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>
                <i class="fa fa-user-secret"></i> Quản lý Nhân viên
            </span>
            
            <a href="#" class="btn btn-primary btn-sm shadow-sm">
                <i class="fa fa-user-plus"></i> Thêm Nhân viên
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
                            <th class="text-center" width="15%">Chức vụ</th>
                            
                            {{-- TÁCH THÀNH 2 CỘT --}}
                            <th class="text-center" width="10%">Sửa</th>
                            <th class="text-center" width="10%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($nguoiQuanLys->count() > 0)
                            @foreach($nguoiQuanLys as $nql)
                            <tr>
                                <td class="align-middle text-center">{{ $nql->id }}</td>
                                <td class="align-middle">
                                    <span class="font-weight-bold text-primary">{{ $nql->ten_quan_ly }}</span>
                                </td>
                                <td class="align-middle">{{ $nql->email }}</td>
                                <td class="align-middle">{{ $nql->so_dien_thoai ?? '---' }}</td>
                                <td class="align-middle text-center">
                                    <span class="badge badge-info p-2">{{ $nql->chuc_vu }}</span>
                                </td>
                                
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Sửa thông tin">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Xóa nhân viên">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-muted py-5">
                                    <i class="fa fa-user-secret fa-3x mb-3"></i><br>
                                    Chưa có dữ liệu nhân viên.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="card-footer small text-muted">
            Tổng số nhân viên: {{ $nguoiQuanLys->count() }}
        </div>
    </div>
</div>
@endsection