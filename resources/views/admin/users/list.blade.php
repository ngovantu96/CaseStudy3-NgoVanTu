@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Người Dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh Sách Người dùng</li>
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

                           <a href="{{ route('user.create') }}"> <button type="button" class="btn btn-primary">
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
                                    <th>Họ Và Tên</th>
                                    <th>Email</th>
                                    <th>Chức Vụ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($users) == 0)
                                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                                @else
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{  $user->role->name }}</td>
                                            <td><a href="{{ route('user.edit',$user->id) }}"><button type="button" class="btn btn-warning">Sửa</button></a> ||
                                                <a href="{{ route('user.delete',$user->id) }}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')">Xóa</button></a></td>
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
