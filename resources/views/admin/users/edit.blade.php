@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh Sửa Người Dùng</h1>
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
                                        <form method="post" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Tên khách hàng</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Enter name" >
                                                @error('name')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">password</label>
                                                <input type="password" class="form-control" name="password" id="password" value="{{ $user->password }}" placeholder="Enter password" >
                                                @error('password')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="Enter email" >
                                                @error('email')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label>Chức Vụ : </label>
                                                <select name="role" id="">
                                                    @foreach($roles as $role)
                                                        <option value="{{ $role->id }}" {{ ($role->name==$user->role->name)?'selected' :''}}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
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
