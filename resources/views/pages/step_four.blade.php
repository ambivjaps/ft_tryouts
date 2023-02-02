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

    <form class="row g-3" action="{{ route('pages.step_four.post') }}" method="post">
        <h3> Step#4 - Verify Information </h3>

        <p> First Name: {{ $applicant->first_name }} </p>
        <p> Last Name: {{ $applicant->first_name }} </p>
        <p> Birthday: {{ $applicant->bday }} </p>
        <p> Address: {{ $applicant->address }} </p>

        <p> E-mail Address: {{ $applicant->cred_fb }} </p>
        <p> Facebook Account: {{ $applicant->cred_fb }} </p>        
        <p> Cellphone Number: {{ $applicant->cred_cp }} </p>
        
        <p> Alias: {{ $applicant->alias }} </p>
        <p> Reppin: {{ $applicant->reppin }} </p>
        <p> Division: {{ $applicant->division }} </p>
        
        <p> Lyrics (Song): {{ $applicant->lyric_song }} </p>
        <p> Lyrics (Battle): {{ $applicant->lyric_battle }} </p>
        
        <p> Link (Song): {{ $applicant->link_song }} </p>
        <p> Link (Battle): {{ $applicant->link_battle }}</p>
        <p> Link (Others):  {{ $applicant->link_others }}</p>

        <div class="col-12">
            <a href="{{ route('pages.step_three') }}" class="btn btn-danger pull-right">Previous</a>
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Submit Application </i></button>
        </div>
    </form>
</div>

@endsection