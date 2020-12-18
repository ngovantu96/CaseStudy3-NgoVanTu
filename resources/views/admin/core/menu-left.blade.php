<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Quản Lý Sản Phẩm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- cắt chuỗi để view chạy đến các dường dẫn tùy ý-->

{{--    @if (url()->current())--}}
{{--               {{dd(url()->current())}}--}}
{{--    @endif--}}
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Quản Lý Người Dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('role.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Chức Vụ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('customer.list') }}" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Quản Lý Khách Hàng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Danh Sách Sản Phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('category.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Danh Sách Thể Loại</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Danh Sách Đơn Hàng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <p>Đăng Xuất</p>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
