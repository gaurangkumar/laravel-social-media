<!DOCTYPE html>
<html class="loading" lang="{{ app()->getLocale() }}" data-textdirection="ltr">
<head>
@include('admin.layouts.head')

@yield('styles')
</head>
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

@yield('content')
@include('admin.layouts.javascript')

@yield('scripts')
</body>
</html>
