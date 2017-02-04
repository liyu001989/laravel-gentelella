@extends('layouts.base')

@section('body')

<body class="nav-md">

    <div class="container body">

        <div class="main_container">

            @include('admin.layouts.sidebar')

            @include('admin.layouts.header')

            @yield('container')

            @include('admin.layouts.footer')
        </div>

    </div>

</body>
