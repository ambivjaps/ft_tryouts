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
                <li class="breadcrumb-item" aria-current="page">Step#3 - Lyrics (Song & Battle)</li>   
                <li class="breadcrumb-item active" aria-current="page">Step#4 - Verify Information</li> 
            </ol>
        </small>
    </div><hr>

    <form class="row g-3">
        <h3> Step#4 - Verify Information </h3>

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Submit Application </i></button>
        </div>
    </form>
</div>

@endsection