@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Khách Hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Danh Sách Khách Hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('customer.create') }}">
                                <button type="button" class="btn btn-primary" >
                                    Thêm Mới
                                </button></a>
{{--                            class="btn btn-primary" data-toggle="modal" data-target="#exampleModal--}}
                        </div>

                        <div class="col-12">
                            @if (Session::has('success'))
                                <p class="text-success">
                                    <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                                </p>
                            @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ Và Tên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Email</th>
                                    <th>Địa Chỉ</th>
                                    <th>Hành Động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($customers) == 0)
                                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                                @else
                                    @foreach($customers as $key => $customer)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->phone }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->address }}</td>
                                            <td><a href="{{ route('customer.edit',$customer->id) }}">
                                                    <button type="button" class="btn btn-warning">Sửa</button></a> ||
                                                <a href="{{ route('customer.delete',$customer->id) }}">
                                                    <button type="button" class="btn btn-danger">Xóa</button></a></td>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
