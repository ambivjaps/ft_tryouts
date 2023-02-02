@extends('layouts.app')

@section('title')
<title> Registration Form | {{ setting('site.title') }} </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://tryouts.fliptop.com.ph/form" />
<meta property="og:title"              content="{{ setting('site.title') }}" />
<meta property="og:description"        content="{{ setting('site.description') }}" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card"              content="summary_large_image">
<meta name="description"               content="{{ setting('site.description') }}" />
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

<div class="container-xxl my-5">
    <div class="ft-bcrumb">
        <small>
            <ol class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                <li class="breadcrumb-item"><a href="{{ URL::asset('/') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Step#1 - Personal Information</li>                
            </ol>
        </small>
    </div><hr>

    <form class="row g-3">

        <h3> Step#1 - Personal Information </h3>
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="(ex. Juan)">
        </div>

        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" placeholder="(ex. Dela Cruz)">
        </div>

        <div class="col-md-6">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control">
        </div>

        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="(ex. Gangsterville, Mandaluyong)">
        </div>

        <div class="col-md-4">
            <label for="cred_email" class="form-label">E-mail Address</label>
            <input type="email" class="form-control" placeholder="Enter your e-mail address here.">
        </div>

        <div class="col-md-4">
            <label for="cred_fb" class="form-label">Facebook Account</label>
            <input type="text" class="form-control" placeholder="Enter your Facebook account link here.">
        </div>

        <div class="col-md-4">
            <label for="cred_cp" class="form-label">Cellphone No.</label>
            <input type="text" class="form-control" placeholder="Enter your cellphone number here.">
        </div><hr>

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Next </i></button>
        </div>

    </form>

</div>

@endsection