@extends('layouts.app')

@section('content')


<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>COMPUTER </b>MSDE</a>
            </div>
            <div class="card-body">

                <p class="login-box-msg">Sign in to start your session</p>

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="username" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    @if (session('error'))
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong> {{ session('error') }}</strong>
                            </div>
                        </div>
                    </div>
                    @enderror

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block form-control">
                                <i class="fas fa-sign-in-alt"></i> Sign In</button>
                        </div>

                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="{{route('register')}}" class="btn btn-block btn-success">
                        <i class="fab fa-facebook mr-2"></i> Register a new user
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>

                <!--p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Register a new user</a>
      </p--->
            </div>

        </div>

    </div>


    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>






@endsection