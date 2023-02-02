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

    <form class="row g-3" action="{{ route('pages.step_two.post') }}" method="post">
        @csrf
        <h3> Step#2 - Emcee Information </h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-12">
            <label for="alias" class="form-label">Alias/Emcee Name</label>
            <input type="text" value="{{ $applicant->alias ?? '' }}" id="alias" name="alias" class="form-control" placeholder="(ex. MC Hotdog)">
        </div>

        <div class="col-md-6">
            <label for="reppin" class="form-label">Reppin</label>
            <input type="text" value="{{ $applicant->reppin ?? '' }}" id="reppin" name="reppin" class="form-control" placeholder="Enter your crew/affiliations here.">
        </div>

        <div class="col-md-6">
            <label for="division" class="form-label">Division</label>
            <select id="division" name="division" value="{{ $applicants->division ?? '' }}" class="form-select">
                <option selected>Metro Manila</option>
                <option>Central Luzon</option>
                <option>Calabarzon</option>
                <option>Visayas</option>
                <option>Mindanao</option>
            </select>
        </div>

        <div class="col-12">
            <a href="{{ route('pages.step_one') }}" class="btn btn-danger pull-right">Previous</a>
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Next</button>
        </div>
    </form>
</div>

@endsection