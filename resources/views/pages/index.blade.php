@extends('layouts.app')

@section('title')
<title> Home | {{ setting('site.title') }} </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://tryouts.fliptop.com.ph" />
<meta property="og:title"              content="{{ setting('site.title') }}" />
<meta property="og:description"        content="{{ setting('site.description') }}" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card"              content="summary_large_image">
<meta name="description"               content="{{ setting('site.description') }}" />
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

<div class="container my-5">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <div class="h-100 p-5 text-white bg-dark rounded-2 ft-poi-ins">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ URL::asset('img/POI7_3.jpg') }}" class="rounded" width="100%">
            </div>
            <div class="col-md-8">
                <h1 class="my-3 lh-1" style="text-shadow: #000 1px 0 6px;"> #FlipTopPOI7 </h1><hr>
                <p>A. Submission of requirements for the First Leg of the Tryouts will be accepted on March 29, 2018.</p>
                <p>B. Requirements:</p>
                <ol>
                    <li>Fill up required information.</li>
                    <li>Prepare (2) sets of 16 Bars for Battle against any imaginary opponent.</li>
                    <li>Prepare (1) set of 16 Bars for a Song (any topic).</li>
                    <li>Prepare Audio/Video links of all previous battles, songs, and live performances.</li>
                </ol>
                <p>C. Cut off for submissions is on April 28, 2018.</p>
                <p>D. Stay tuned for details and updates on the Second Leg of the Tryouts - Regional Tournaments!</p>
                <a class="btn btn-lg btn-warning mt-3" href="{{ route('pages.step_one') }}" role="button">Apply for Tryouts</a>
            </div>
        </div>
    </div>
    <div class="my-5">
        <center>
            <iframe class="embedvid" width="100%" height="600" src="https://www.youtube.com/embed/UK0twoDs5pY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
    </div>
</div>

@endsection