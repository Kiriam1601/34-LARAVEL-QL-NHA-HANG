<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{ asset('/backend/img/Ảnh_login.jpg') }}" width="95%">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng nhập !</h1>
                                    </div>

                                    <!-- Hiển thị thông báo lỗi -->
                                    @if (session('mess'))
                                        <div class="alert alert-danger text-center">
                                            {{ session('mess') }}
                                        </div>
                                    @endif
                                   
                                    <form class="user" method="POST" action="{{ url('admin/login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                placeholder="Nhập email..."  name="admin_email">
                                        </div>
                                        @error('admin_email')
                                        <div class="text-sm " style="color: red">{{ $message}}</div>
                                    @enderror
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                placeholder="Nhập password..." name="admin_password">
                                        </div>
                                        @error('admin_password')
                                        <div class="text-sm " style="color: red">{{ $message}}</div>
                                    @enderror
                                        <input type="submit" class="btn btn-primary btn-user btn-block"
                                            value="Đăng nhập">
                                    </form>
                                    <hr>
                                    {{-- <div class="text-center">
                                        <a class="small" href="{{url('/forget-password')}}">Quên mật khẩu?</a>
                                    </div> --}}
                                    {{-- <div class="text-center">
                                        <a class="small" href="{{url('/register-auth')}}">Tạo tài khoản!</a>
                                    </div> --}}
                                    <div class="text-center">
                                        <a class="small" href="{{url('/fogret-auth')}}">Quên mật khẩu!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/backend/js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
