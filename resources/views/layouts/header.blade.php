<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Marcacao de Consultas</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="{{ asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body >