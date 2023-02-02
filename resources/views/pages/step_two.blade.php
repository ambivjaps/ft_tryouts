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
                <li class="breadcrumb-item active" aria-current="page">Step#2 - Emcee Information</li>             
            </ol>
        </small>
    </div><hr>

    <form class="row g-3">
        <h3> Step#2 - Emcee Information </h3>

        <div class="col-md-4">
            <label for="alias" class="form-label">Alias/Emcee Name</label>
            <input type="text" id="alias" class="form-control" placeholder="(ex. MC Hotdog)">
        </div>

        <div class="col-md-4">
            <label for="reppin" class="form-label">Reppin/Affiliations</label>
            <input type="text" id="reppin" class="form-control" placeholder="Enter your crew/affiliations here.">
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
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Next </i></button>
        </div>
    </form>
</div>

@endsection