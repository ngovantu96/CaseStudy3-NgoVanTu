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
                                        <h1>Thêm Mới Người  Dùng</h1>
                                    </div>
                                    <div class="col-12">
                                        <form method="post" action="{{ route('user.store') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Họ Và Tên</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" >
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" >
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Mật Khẩu</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label>Chức Vụ</label>
                                                        <select name="role" id="">
                                                            @foreach($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                            @endforeach
                                                        </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
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
