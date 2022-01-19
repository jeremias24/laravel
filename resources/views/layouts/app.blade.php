<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Computer MSDE') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.cs')}}s">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    @livewireStyles
</head>

@if(Auth::check())

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- 1. Top Menu --}}
        @include('layouts.topnavbar')

        {{-- 2. Left Menu --}}
        @include('layouts.leftsidebar')

        {{-- 3. Main Content --}}

        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                @yield('content')
                @yield('scripts')
            </section>

        </div>



        {{-- 4. Right Menu --}}
        @include('layouts.rightsidebar')
        {{-- 5. Footer --}}
        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

    @livewireScripts
</body>

@else
<div>
    <section class="content">
        @yield('content')
    </section>
</div>

@endif
</html>