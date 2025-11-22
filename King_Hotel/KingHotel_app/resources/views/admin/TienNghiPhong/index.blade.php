@extends('layout.admin')

@section('body')
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tiện nghi Phòng</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fa fa-bath"></i> Danh sách Tiện nghi</span>
            
            <a href="#" class="btn btn-primary btn-sm shadow-sm">
                <i class="fa fa-plus"></i> Thêm Tiện nghi
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th width="25%">Tên Tiện Nghi</th>
                            <th>Mô tả</th>
                            
                            <th class="text-center" width="10%">Sửa</th>
                            <th class="text-center" width="10%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($tienNghis->count() > 0)
                            @foreach($tienNghis as $tn)
                            <tr>
                                <td class="align-middle text-center">{{ $tn->id }}</td>
                                <td class="align-middle">
                                    <span class="text-primary font-weight-bold">{{ $tn->ten_tien_nghi }}</span>
                                </td>
                                
                                {{-- 👇 ĐÃ SỬA: Bỏ class 'small' để chữ to hơn --}}
                                <td class="align-middle">
                                    {{ $tn->mo_ta ?? '---' }}
                                </td>
                                
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Sửa">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Xóa" onclick="alert('Chức năng đang cập nhật!');">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center text-muted py-5">
                                    <i class="fa fa-bath fa-3x mb-3"></i><br>
                                    Chưa có dữ liệu tiện nghi.<br>
                                    Vui lòng thêm tiện nghi mới.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="card-footer small text-muted">
            Tổng số tiện nghi: {{ $tienNghis->count() }}
        </div>
    </div>
</div>
@endsection