@extends('layout.admin')

@section('body')
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Quản lý Loại Phòng</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fa fa-bed"></i> Danh sách các Hạng phòng</span>
            
            <a href="#" class="btn btn-primary btn-sm shadow-sm">
                <i class="fa fa-plus-circle"></i> Thêm Loại Phòng
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th width="20%">Tên Hạng Phòng</th>
                            <th width="10%">Giá (VNĐ)</th>
                            <th class="text-center" width="10%">Sức chứa</th>
                            <th>Mô tả</th>
                            
                            <th class="text-center" width="5%">Sửa</th>
                            <th class="text-center" width="5%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($loaiPhongs->count() > 0)
                            @foreach($loaiPhongs as $lp)
                            <tr>
                                <td class="align-middle text-center">{{ $lp->id }}</td>
                                <td class="align-middle">
                                    <span class=" font-weight-bold">{{ $lp->ten_loai }}</span>
                                </td>
                                <td class="align-middle text-success font-weight-bold">
                                    {{ number_format($lp->don_gia, 0, ',', '.') }}
                                </td>
                                <td class="align-middle text-center">{{ $lp->so_nguoi }} người</td>
                                
                                <td class="align-middle">{{ $lp->mo_ta }}</td>
                                
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Chỉnh sửa">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>

                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-muted py-5">
                                    <i class="fa fa-inbox fa-3x mb-3"></i><br>
                                    Hiện chưa có loại phòng nào.                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="card-footer small text-muted">
            Tổng số loại phòng: {{ $loaiPhongs->count() }}
        </div>
    </div>
</div>
@endsection