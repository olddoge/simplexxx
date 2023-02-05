<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('lib/layui-v2.6.3/css/layui.css') }} " media="all">
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('lib/font-awesome-4.7.0/css/font-awesome.min.css') }}" media="all">
    @yield('styles')
</head>
<body>
@yield('content')
</body>
<script src="{{ asset('lib/layui-v2.6.3/layui.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/lay-config.js') }}" charset="utf-8"></script>
@yield('scripts')
