@extends('layouts.app')

@section('title')
<title> Home | {{ setting('site.title') }} </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.tryouts.fliptop.com.ph" />
<meta property="og:title"              content="{{ setting('site.title') }}" />
<meta property="og:description"        content="{{ setting('site.description') }}" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card"              content="summary_large_image">
<meta name="description"               content="{{ setting('site.description') }}" />
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

<div class="container-xxl my-5">

    <div class="row my-3">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2716613754101420" crossorigin="anonymous"></script>
      <ins class="adsbygoogle"
            style="display:block; text-align:center;"
            data-ad-layout="in-article"
            data-ad-format="fluid"
            data-ad-client="ca-pub-2716613754101420"
            data-ad-slot="5987436965"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>

    <div class="h-100 p-5 text-white bg-dark rounded-2 ft-poi-ins">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ URL::asset('img/POI7_remix.png') }}" class="rounded img-fluid">
            </div>
            <div class="col-md-7">
                <h1 class="my-3 lh-1" style="text-shadow: #000 1px 0 6px;"> #POI7Remix </h1><hr>
                <p>A. Requirements:</p>
                <ol>
                    <li>Fill up required information.</li>
                    <li>Prepare (1) set of 16 Bars for a Song (any topic).</li>
                    <li>Prepare (1) set of 16 Bars for Battle against any imaginary opponent.</li>
                    <li>Prepare Audio/Video links of all previous battles, songs, and live performances.</li>
                </ol>
                <p>B. Deadline of submissions: <strong> March 11, 2023. </strong></p>
                <p>C. Stay tuned for details and updates on the Second Leg of the Tryouts - Regional Tournaments!</p>
                <a class="btn btn-lg btn-warning mt-3" href="/form" role="button">Apply for Tryouts</a>
            </div>
        </div>
    </div>
    <div class="my-5">
        <center>
            <img src="{{ URL::asset('img/POI7_poster.jpg') }}" class="rounded img-fluid">
        </center>
    </div>

    <div class="row my-3">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2716613754101420" crossorigin="anonymous"></script>
      <ins class="adsbygoogle"
            style="display:block; text-align:center;"
            data-ad-layout="in-article"
            data-ad-format="fluid"
            data-ad-client="ca-pub-2716613754101420"
            data-ad-slot="5987436965"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
</div>

@endsection