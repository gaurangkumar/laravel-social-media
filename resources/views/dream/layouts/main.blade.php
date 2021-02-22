<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.head')

@yield('styles')
</head>
<body>
@yield('content')
@include('layouts.javascript')

@yield('scripts')
</body>
</html>
