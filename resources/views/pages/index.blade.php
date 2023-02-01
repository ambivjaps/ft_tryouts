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

<div class="container-xxl my-5">
    <div class="h-100 p-5 text-white bg-dark rounded-2 ft-card-ins" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.9) 100%), url('img/battles2.jpg');">
        <div class="row">
            <div class="col-md-4">
                <img src="img/POI7_3.jpg" class="rounded" width="100%">
            </div>
            <div class="col-md-8">
                <h1 class="my-3 lh-1" style="text-shadow: #000 1px 0 6px;"> #FlipTopPOI7 </h1><hr>
                <i> Submissions have ended. </i> <p> Stay tuned for upcoming announcements! </p>
                <a class="btn btn-warning mt-3" href="https://www.fliptop.com.ph" role="button">Back to main website</a>
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