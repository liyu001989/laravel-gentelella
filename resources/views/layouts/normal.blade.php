@extends('layouts.app')

@section('container')

<div class="right_col" role="main">

    <div class="page-title">
      <div class="title_left">
        <h3>@yield('page-title')</h3>
      </div>
      {{-- <div class="title_right">
      </div> --}}
    </div>
    <div class="clearfix"></div>

    @yield('content')
</div>

@endsection
