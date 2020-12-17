@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Chỉnh Sửa Sản Phẩm</h1>
                                    </div>
                                    <div class="col-12">
                                        <form method="post" action=""  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Nơi Sản Xuất</label>
                                                <select class="form-control" name="brand" id="">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"{{ ($category->name==$product->category->name)?'selected' :''}}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Ảnh Sản Phẩm</label>
                                                <input type="file" class="form-control" name="image" value="{{ $product->image }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Ảnh Chi Tiết</label>
                                                <input type="file" class="form-control" name="image_detail" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Số Lượng</label>
                                                <input type="number" class="form-control" name="quantity" min="0" value="{{$product->quantity}}"  placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label for="cost_price">Giá Nhập Vào</label>
                                                <input type="number" class="form-control" name="cost_price" min="0" value="{{$product->costPrice}}" placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Giá Bán Ra</label>
                                                <input type="number" class="form-control" name="price" min="0" value="{{$product->price}}"  placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Nồng Độ</label>
                                                <input type="text" class="form-control" name="concentration"  value="{{ $product->concentration }}" placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Kích Thước</label>
                                                <input type="number" class="form-control" name="size" value="{{ $product->size }}" placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Mô Tả</label>
                                                {{--                                                <textarea  name="description" rows="4" cols="50"></textarea>--}}
                                                <textarea class="ckeditor" id="ckeditor" name="description" >{!! $product->description !!}</textarea>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
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
