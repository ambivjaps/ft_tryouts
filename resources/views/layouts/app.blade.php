<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@yield('title')

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		@yield('meta')

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-BF26XGKX0Q"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'G-BF26XGKX0Q');
		</script>

		<link rel="icon" href="{{ URL::asset('/favicon.png') }}" type="image/x-icon"/>
		<link rel="icon" href="{{ URL::asset('/favicon-128.png') }}" type="image/x-icon" sizes="128x128">
		<link rel="apple-touch-icon" href="{{ URL::asset('/favicon-152.png') }}" type="image/x-icon" sizes="152×152">
		<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('/favicon-192.png') }}" type="image/x-icon" sizes="192x192">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}?<?php echo time(); ?>">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
	</head>

	<body class="d-flex flex-column min-vh-100">

	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')