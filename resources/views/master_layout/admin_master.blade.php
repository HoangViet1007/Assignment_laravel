<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public_admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('public_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public_admin/dist/css/adminlte.min.css')}}">
    <!-- ---- link datable css ------ -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <style>
        .nav-header{
           color: #ffc107 !important;
        }
    </style>

    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                <i class="fas fa-search"></i>
                            </a> -->
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        @if(Auth::check())
                        Hi : {{Auth::user()->name}}
                        @else
                         Hi:
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <a href="#" class="dropdown-item">
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            Setting
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('admin.logout')}}" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất ?')" class="dropdown-item">
                            Logout
                        </a>

                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            {{-- <a href="#" class="brand-link">
                <img src="{{ url('') }}{{$websetting->image}}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8;width:90%;">
                <span class="brand-text font-weight-light">Electtonic</span>
            </a> --}}

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if(Auth::check())
                        <img src="{{Auth::user()->image}}" class="img-circle elevation-2" alt="User Image" width="50" height="50px">
                        @else
                        <img src="{{asset('public_admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                        @endif
                    </div>
                    <div class="info">
                        @if(Auth::check())
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                        @else
                        <a href="#" class="d-block">Alexander Pierce</a>
                        @endif
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{route('admin.dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>

                        @canany(['category_list','product_list'])
                            <li class="nav-header">QUẢN LÝ NỘI DUNG</li>
                        @endcanany
                        @can('category_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-accusoft"></i>
                                    <p>
                                        Quản lí danh mục
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách danh mục</p>
                                    </a>
                                </li>
                                @can('category_add')
                                <li class="nav-item">
                                    <a href="{{route('category.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới danh mục</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        @can('product_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    Quản lý sản phẩm
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('product.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách sản phẩm</p>
                                    </a>
                                </li>
                                @can('product_add')
                                <li class="nav-item">
                                    <a href="{{route('product.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới sản phẩm</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan
                        <li class="nav-header">QUẢN LÝ ĐƠN HÀNG</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Quản lý đơn hàng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('invioce.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách đơn hàng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @can(['user_list'])
                        <li class="nav-header">QUẢN LÝ NGƯỜI DÙNG</li>
                        @endcan
                        @can('user_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>
                                    Quản lý người dùng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('user.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách người dùng</p>
                                    </a>
                                </li>
                                @can('user_list')
                                <li class="nav-item">
                                    <a href="{{route('user.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới người dùng</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        @can('role_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-ruler-vertical"></i>
                                <p>
                                    Quản lý chức vụ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('role.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách chức vụ</p>
                                    </a>
                                </li>
                                @can('role_add')
                                <li class="nav-item">
                                    <a href="{{route('role.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới chức vụ</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        @can('permission_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-drum-steelpan"></i>
                                <p>
                                    Quản lý quyền
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('permission.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách quyền</p>
                                    </a>
                                </li>
                                @can('permission_add')
                                <li class="nav-item">
                                    <a href="{{route('permission.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới quyền</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        @canany(['type_attribute_list','attribute_list'])
                        <li class="nav-header">QUẢN Lý THUỘC TÍNH</li>
                        @endcanany
                        @can('type_attribute_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-ankh"></i>
                                <p>
                                    Quản  lý loại thuộc tính
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('type_attribute.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách loại</p>
                                    </a>
                                </li>
                                @can('type_attribute_add')
                                <li class="nav-item">
                                    <a href="{{route('type_attribute.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới loại</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        @can('attribute_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-air-freshener"></i>
                                <p>
                                    Quản lí thuộc tính
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('attribute.list')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách thuộc tính</p>
                                    </a>
                                </li>
                                @can('attribute_add')
                                <li class="nav-item">
                                    <a href="{{route('attribute.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới thuộc tính</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        <li class="nav-header">THÔNG TIN WEBSITE</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Quản lý thông tin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('websetting.list')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách thông tin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('websetting.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới thông tin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-star-half-alt"></i>
                                <p>
                                    Quản lý đánh giá
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('product_review.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách đánh giá</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @canany(['category_post_list','post_list'])
                        <li class="nav-header">BÀI ĐĂNG</li>
                        @endcanany

                        @can('category_post_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-blog"></i>
                                <p>
                                    Quản lí danh mục
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('category_post.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách danh mục</p>
                                    </a>
                                </li>
                                @can('category_post_add')
                                <li class="nav-item">
                                    <a href="{{route('category_post.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới danh mục</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan

                        @can('post_list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-paste"></i>
                                <p>
                                     Quản lý bài viết
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('post.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách bài viết</p>
                                    </a>
                                </li>
                                @can('post_add')
                                <li class="nav-item">
                                    <a href="{{route('post.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới bài viết</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan


                        <li class="nav-header">HÌNH ẢNH</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-images"></i>
                                <p>
                                    Quản lí slide ảnh
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('banner.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách slide</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('banner.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới slide ảnh</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.file')}}" class="nav-link">
                                <i class="nav-icon far fa-file-image"></i>
                                <p>
                                    Quản lí thư mục ảnh
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> @yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active"> @yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- @yield('main_admin') --}}

                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">@yield('title')</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!------------------- phần để cho các layout khác kế thừa vào  ------------------->
                                    @yield('main_admin')
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0-rc
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{asset('public_admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('public_admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('public_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public_admin/dist/js/adminlte.min.js')}}"></script>

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <script src="//cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>



    <!-- AdminLTE for demo purposes -->
    @yield('js')
</body>

</html>
