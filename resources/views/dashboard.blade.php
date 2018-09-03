@extends('layouts.base')

@section('title', 'Home')

@section('content')
<!-- DASHBOARD HEADER ELEMENTS -->
<div class="breadcrumb-line navbar-dark header-elements-md-inline">
    <div class="d-flex">
        
        @if(isset($breadcrumb))
            @include('layouts.modules.breadcrumb')
        @endif

        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
</div>

<!-- /DASHBOARD HEADER ELEMENTS -->

<!-- DASHBOARD CONTENT -->
    @yield('dashboardcontent')

@endsection
