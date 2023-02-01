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
                <li class="breadcrumb-item active" aria-current="page">Registration Form</li>                
            </ol>
        </small>
    </div><hr>

    <form class="row g-3">

        <h3> Personal Information </h3>
        <div class="col-md-4">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="(ex. Juan)">
        </div>

        <div class="col-md-4">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" placeholder="(ex. Dela Cruz)">
        </div>

        <div class="col-md-4">
            <label for="alias" class="form-label">Alias/Emcee Name</label>
            <input type="text" class="form-control" placeholder="(ex. MC Hotdog)">
        </div>

        <div class="col-md-4">
            <label for="reppin" class="form-label">Reppin/Affiliations</label>
            <input type="text" class="form-control" placeholder="Enter your crew/affiliations here.">
        </div>

        <div class="col-md-4">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control">
        </div>

        <div class="col-md-4">
            <label for="division" class="form-label">Division</label>
            <select id="division" class="form-select">
            <option selected>Select division</option>
            <option>Metro Manila</option>
            <option>Calabarzon</option>
            <option>Central Luzon</option>
            <option>Visayas</option>
            <option>Mindanao</option>
            </select>
        </div>
        
        <div class="col-12">
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

        <h3> Lyrics </h3>
        
        <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Lyrics (16 Bars for Song)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Can be same as video link."></textarea>
        </div>

        <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Lyrics (16 Bars for Imaginary Battle of FlipTop Emcee)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Can be same as video link."></textarea>
        </div><hr>

        <h3> Video Links </h3>

        <div class="col-md-6">
            <label for="link_song" class="form-label">Video Link (16 Bars for Song)</label>
            <input type="text" class="form-control" placeholder="Use #FlipTopPOI7.">
        </div>

        <div class="col-md-6">
            <label for="link_battle" class="form-label">Video Link (16 Bars for Battle, Acapella)</label>
            <input type="text" class="form-control" placeholder="Use #FlipTopPOI7.">
        </div>

        <div class="col-md-12">
            <label for="link_others" class="form-label">Video Links (Past Music & Battles)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter relevant links here."></textarea>
        </div><hr>

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Submit Application</button>
        </div>

    </form>

</div>

@endsection