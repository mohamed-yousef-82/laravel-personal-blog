{{-- 
@section('content') --}}

{{-- @section('sidebar')
This is the master sidebar.
@show --}}
@include('website.includes.header')
@include('website.includes.sidebar')
@yield('content')
@include('website.includes.footer')