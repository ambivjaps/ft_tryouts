<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title> Error 404 | {{ setting('site.title') }} </title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta property="og:title"              content="Error 404 | {{ setting('site.title') }}" />
		<meta property="og:description"        content="{{ setting('site.description') }}" />
		<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
		<meta name="twitter:card"              content="summary_large_image">

		<link rel="icon" href="{{ URL::asset('/favicon.png') }}" type="image/x-icon"/>
		<link rel="icon" href="{{ URL::asset('/favicon-128.png') }}" type="image/x-icon" sizes="128x128">
		<link rel="apple-touch-icon" href="{{ URL::asset('/favicon-152.png') }}" type="image/x-icon" sizes="152×152">
		<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('/favicon-192.png') }}" type="image/x-icon" sizes="192x192">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}?<?php echo time(); ?>">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>

	<body class="d-flex flex-column min-vh-100">
		<div class="container-xxl my-5">
			<center>
				<img src="{{ URL::asset('/img/ft_icon.png') }}">
				<div class="ft-emcee mt-3 mb-4"><h1> ERROR 404 </h1></div>
				<h4> Page not found. </h4>
				<i> The page you are looking for does not exist, <br> is changed, or currently not available. </i>
				<br><br>
				<a class="btn btn-warning mb-5" href="{{ URL::asset('/') }}" role="button">Go back to website</a>
			</center>
		</div>

	@include('layouts.footer')