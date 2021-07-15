<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>登录页面</title>
    <link rel="icon" href="favicon.ico" type="image/ico">
    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">
    <meta name="csrf-token" content="{{csrf_token()}}" id="csrf-token">
    <link href="{{URL::asset('static/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/css/style.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/js/toastr/toastr.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('static/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/js/toastr/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/js/admin.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/js/main.min.js')}}"></script>
</head>