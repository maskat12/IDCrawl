@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
        
        @if(isset($breadcrumb))
            @include('layouts.modules.breadcrumb')
        @endif

        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
</div>
<div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard @yield('')</h4>
        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>

    <div class="header-elements d-none mb-3 mb-md-0">
        <div class="d-flex justify-content-center">
            <a href="{{url('dashboard')}}" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-indigo-400"></i> <span>Results</span></a>
            <a href="{{url('dashboard/statistic')}}" class="btn btn-link btn-float text-default"><i class="icon-calculator text-indigo-400"></i> <span>Statistic</span></a>
            <a href="{{url('dashboard/reports')}}" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-indigo-400"></i> <span>Reports</span></a>
        </div>
    </div>
</div>                                                                                                                                                  
    @include('dashboard.tables')
@endsection
