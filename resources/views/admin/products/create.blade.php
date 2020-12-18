@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Mới Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        {{--                        <li class="breadcrumb-item active">Danh Sách Khách Hàng</li>--}}
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
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="post" action="{{ route('product.store') }}"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Nơi Sản Xuất</label>
                                                    <select class="form-control" name="brand" id="">
                                                        @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                        @endforeach
                                                    </select>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Ảnh Sản Phẩm</label>
                                                <input type="file" class="form-control" name="image" >
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Ảnh Chi Tiết</label>
                                                <input type="file" class="form-control" name="image_detail" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Số Lượng</label>
                                                <input type="number" class="form-control" name="quantity" min="0"  placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label for="cost_price">Giá Nhập Vào</label>
                                                <input type="text" class="form-control" name="cost_price"  placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Giá Bán Ra</label>
                                                <input type="text" class="form-control" name="price"  placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Nồng Độ</label>
                                                <input type="text" class="form-control" name="concentration"  placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Kích Thước</label>
                                                <input type="text" class="form-control" name="size"  placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Mô Tả</label>
{{--                                                <textarea  name="description" rows="4" cols="50"></textarea>--}}
                                                <textarea class="ckeditor" id="ckeditor" name="description"></textarea>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- /.card-header -->

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
