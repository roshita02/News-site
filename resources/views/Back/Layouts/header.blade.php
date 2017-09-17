@section('header')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/_all-skins.min.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @stop