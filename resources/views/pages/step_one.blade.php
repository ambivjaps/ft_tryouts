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
                <li class="breadcrumb-item active" aria-current="page">Step#1 - Personal Information</li>                
            </ol>
        </small>
    </div><hr>

    <form class="row g-3">

        <h3> Step#1 - Personal Information </h3>
        <div class="col-md-6">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" id="first_name" class="form-control" placeholder="(ex. Juan)">
        </div>

        <div class="col-md-6">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" id="last_name" class="form-control" placeholder="(ex. Dela Cruz)">
        </div>

        <div class="col-md-6">
            <label for="bday" class="form-label">Birthday</label>
            <input type="date" id="bday" class="form-control">
        </div>

        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" class="form-control" placeholder="(ex. Gangsterville, Mandaluyong)">
        </div>

        <div class="col-md-4">
            <label for="cred_email" class="form-label">E-mail Address</label>
            <input type="email" id="cred_email" class="form-control" placeholder="Enter your e-mail address here.">
        </div>

        <div class="col-md-4">
            <label for="cred_fb" class="form-label">Facebook Account</label>
            <input type="text" id="cred_fb" class="form-control" placeholder="Enter your Facebook account link here.">
        </div>

        <div class="col-md-4">
            <label for="cred_cp" class="form-label">Cellphone No.</label>
            <input type="text" id="cred_cp" class="form-control" placeholder="Enter your cellphone number here.">
        </div><hr>

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-warning float-end my-3">Next </i></button>
        </div>
    </form>
</div>

@endsection