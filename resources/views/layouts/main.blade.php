<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.head')
</head>
<body>
@yield('content')
@include('layouts.javascript')
</body>
