@extends('admin.master')
@section('page-title','Danh Sách Chuc Vu')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Thể Loại</h1>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Thể Loại</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('category.create') }}" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Thể Loại</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" >
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu</button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        {{--                    <a class="btn btn-primary" href="{{ route('customers.create') }}">Lưu</a>--}}

                    </form>
                </div>

            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Thêm Mới
                            </button>
                        </div>

                        <div class="col-12">
                            {{--                            @if (Session::has('success'))--}}
                            {{--                                <p class="text-success">--}}
                            {{--                                    <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}--}}
                            {{--                                </p>--}}
                            {{--                            @endif--}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Thể Loại</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $key => $categorie)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $categorie->name }}</td>
                                            <td><a  data-toggle="modal" data-target="#editModal{{$categorie->id}} " href="{{$categorie->id}}">
                                                    <button type="button" class="btn btn-warning" >
                                                        Chỉnh Sửa
                                                    </button></a> ||
                                                <a href="{{ route('category.delete',$categorie->id) }}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button></a></td>
                                            <div class="modal fade" id="editModal{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Chỉnh  Sửa Thể Loại</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{ route('category.update',$categorie->id) }}" >
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="name">Tên Thể Loại </label>
                                                                    <input type="text" class="form-control" name="name" value="{{ $categorie->name }}" required>
                                                                    @error('name')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <button type="submit" class="btn btn-primary">Cập Nhật</button>

                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                                                {{--                    <a class="btn btn-primary" href="{{ route('customers.create') }}">Lưu</a>--}}

                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
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
