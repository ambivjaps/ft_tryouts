@extends('layouts.app')

@section('title')
<title> Registration Form | {{ setting('site.title') }} </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.tryouts.fliptop.com.ph/form" />
<meta property="og:title"              content="Registration Form | {{ setting('site.title') }}" />
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

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="h-100 p-3 text-white bg-dark rounded-2 ft-poi-ins">
                <div class="card-header">
                    <h2 class="row justify-content-center">Tryouts Registration Form</h2>
                </div>
                <div class="card-body">
                @livewire('wizard')
                </div>
            </div>
        </div>
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
@livewireScripts

@endsection