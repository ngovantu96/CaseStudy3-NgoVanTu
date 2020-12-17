@extends('admin.master')
@section('page-title','Danh Sách Chuc Vu')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Chức Vụ</h1>
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
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Chức Vụ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('role.create') }}" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Chức Vụ</label>
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
                                    <th>#</th>
                                    <th>Chức Vụ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($roles) == 0)
                                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                                @else
                                    @foreach($roles as $key => $role)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $role->name }}</td>
                                            <td><a  data-toggle="modal" data-target="#editModal{{$role->id}}">
                                                    <button type="button" class="btn btn-warning" >
                                                        Chỉnh Sửa
                                                    </button></a> ||
                                                <a href="{{ route('role.delete',$role->id) }}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button></a></td>
                                            <div class="modal fade" id="editModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Chỉnh  Sửa Chức Vụ</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{ route('role.update',$role->id) }}" >
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="name">Chức Vụ</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ $role->name }}" >
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
