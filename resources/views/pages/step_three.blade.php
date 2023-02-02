@extends('layouts.app')

@section('title')
<title> Registration Form | {{ setting('site.title') }} </title>
@endsection

@section('content')

<div class="container my-5">
    <div class="ft-bcrumb">
        <small>
            <ol class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
                <li class="breadcrumb-item" aria-current="page">Step#1 - Personal Information</li>
                <li class="breadcrumb-item" aria-current="page">Step#2 - Emcee Information</li>
                <li class="breadcrumb-item active" aria-current="page">Step#3 - Lyrics (Song & Battle)</li>       
            </ol>
        </small>
    </div><hr>

    <form class="row g-3">
        <h3> Step#3 - Lyrics (Song & Battle) </h3>

        <div class="col-md-6">
            <label for="lyric_song" class="form-label">Lyrics (16 Bars for Song)</label>
            <textarea class="form-control" id="lyric_song" rows="10" placeholder="Can be same as video link."></textarea>
        </div>

        <div class="col-md-6">
            <label for="lyric_battle" class="form-label">Lyrics (16 Bars for Imaginary Battle of FlipTop Emcee)</label>
            <textarea class="form-control" id="lyric_battle" rows="10" placeholder="Can be same as video link."></textarea>
        </div><hr>

        <h3> Video Links </h3>

        <div class="col-md-6">
            <label for="link_song" class="form-label">Video Link (16 Bars for Song)</label>
            <input type="text" id="link_song" class="form-control" placeholder="Use #FlipTopPOI7.">
        </div>

        <div class="col-md-6">
            <label for="link_battle" class="form-label">Video Link (16 Bars for Battle, Acapella)</label>
            <input type="text" id="link_battle" class="form-control" placeholder="Use #FlipTopPOI7.">
        </div>

        <div class="col-md-12">
            <label for="link_others" class="form-label">Video Links (Past Music & Battles)</label>
            <textarea class="form-control" id="link_others" rows="3" placeholder="Enter relevant links here."></textarea>
        </div><hr>

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Next </i></button>
        </div>
    </form>
</div>

@endsection