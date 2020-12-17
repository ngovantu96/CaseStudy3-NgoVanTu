@extends('admin.master')
@section('page-title','Danh Sách Sản Phẩm')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
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

                            <a href="{{ route('product.create') }}"> <button type="button" class="btn btn-primary">
                                    Thêm Mới
                                </button></a>
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
                                    <th>Tên Sản Phẩm</th>
                                    <th>Nhãn Hiệu</th>
                                    <th>Ảnh Sản phẩm</th>
                                    <th>Ảnh Chi Tiết</th>
                                    <th>Số Lượng</th>
                                    <th>Giá Nhập Vào</th>
                                    <th>Giá Bán Ra</th>
{{--                                    <th>Mô Tả</th>--}}
                                    <th>Nồng Độ</th>
                                    <th>Kích Thước</th>
                                    <th>Hành Động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td><img src="{{ asset('storage/'.substr($product->image,7))}}" alt="" width="100px" height="150px"></td>
                                            <td><img src="{{ asset('storage/'.substr($product->imageDetail,7))}}" alt="" width="100px" height="150px"></td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ number_format($product->costPrice) }}đ</td>
                                            <td>{{ number_format($product->price) }}đ</td>
{{--                                            <td>{!!$product->description !!}</td>--}}
                                            <td>{{ $product->concentration }}%</td>
                                            <td>{{ $product->size }}ml</td>
                                            <td><a href="{{route('product.edit',$product->id)}}">
                                                    <button type="button" class="btn btn-warning" >
                                                         Sửa
                                                    </button></a>
                                                <a href="{{ route('product.delete',$product->id) }}">
                                                    <button type="button" class="btn btn-danger mt-2" >
                                                        Xoá
                                                    </button></a>
                                            </td>

                                        </tr>
                                    @endforeach
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
