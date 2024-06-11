<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">

</head>
<body class="hold-transition layout-top-nav" >
<div class="wrapper" > 
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: black">
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                    <a href="{{ auth()->user()->is_admin ? url('dashboard') : url('/standard_users/dashboard') }}" class="nav-link" style="color: gray">Control board</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link" style="color:rgb(152, 158, 163)">Log in</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link" style="color:rgb(151, 151, 151)">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"  style=" background-image:url(https://images.unsplash.com/photo-1483232539664-d89822fb5d3e?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D) ; background-size:100%" >
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid" >
                <div class="row justify-content-center align-items-center" style="height: 80vh; ">
                    <div class="col-md-8" >
                        <div  class="card" style="background-image:url(https://media.istockphoto.com/id/170958625/tr/foto%C4%9Fraf/dark-blue-grunge-background.jpg?s=2048x2048&w=is&k=20&c=j-kU88uyCY0FUJk6W24pyAvRWDGfPMEZsVUIyqdvfN4=) ; background-size:100%">
                            <div class="card-header">
                                <h3 class="card-title" style="color:aliceblue">Welcome to the Products Management System</h3>
                            </div>
                            <div class="card-body" style="color:aliceblue" >
                                <p>
                                    This is a Product management system developed using Bootstrap, Laravel, and phpMyAdmin database. The system has two user roles: Administrator and Employee.
                                </p>
                                <div class="form-group row d-flex flex-column"  style="color:aliceblue" >
                                    <div class="col-12"><strong>Project Developer:</strong></div>
                                    <div class="col-md-6 col-12">AHMED ALAHMADI   2110206631</div>
                                </div>
                                </div>
                        <div class="card-footer text-center">
                            @auth
                                <a href="{{ auth()->user()->is_admin ? url('dashboard') : url('/standard_users/dashboard') }}" class="btn btn-primary">Control board</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    @include('partials.admin.footer')
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
