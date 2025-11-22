@extends('layout.admin')

@section('body')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Danh sách Phòng</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fa fa-building"></i> Quản lý Phòng</span>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm Phòng Mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="10%">ID</th>
                            <th class="text-center" width="15%">Số Phòng</th>
                            <th>Loại Phòng</th>
                            <th>Giá niêm yết</th>
                            <th class="text-center">Trạng thái</th>
                            
                            <th class="text-center" width="10%">Sửa</th>
                            <th class="text-center" width="10%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($phongs->count() > 0)
                            @foreach($phongs as $p)
                            <tr>
                                <td class="text-center align-middle">{{ $p->id }}</td>
                                <td class="text-center align-middle">
                                    <span class="text-center align-middle" style="font-size: 1.1em;">{{ $p->ten_phong }}</span>
                                </td>
                                <td class="align-middle">
                                    {{ $p->loaiPhong->ten_loai ?? 'Chưa phân loại' }}
                                </td>
                                <td class="align-middle text-success font-weight-bold">
                                    {{ number_format($p->loaiPhong->don_gia ?? 0, 0, ',', '.') }} đ
                                </td>
                                <td class="text-center align-middle">
                                    @if($p->trang_thai == 0)
                                        <span class="badge badge-success">Phòng Trống</span>
                                    @elseif($p->trang_thai == 1)
                                        <span class="badge badge-danger">Có Khách</span>
                                    @else
                                        <span class="badge badge-warning text-white">Đang Dọn/Bảo trì</span>
                                    @endif
                                </td>
                                
                                {{-- CỘT SỬA --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-warning btn-sm text-white" title="Sửa thông tin">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>

                                {{-- CỘT XÓA --}}
                                <td class="text-center align-middle">
                                    <a href="#" class="btn btn-danger btn-sm" title="Xóa phòng">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">Chưa có dữ liệu phòng.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection