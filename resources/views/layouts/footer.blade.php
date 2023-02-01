<footer class="mt-auto">
  <div class="container">
   	<div class="row">
        <div class="col-12 col-md-3">
        	<a href="{{ URL::asset('/') }}"><img class="mb-2" src="{{ URL::asset('img/logo.png') }}" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}"></a>
        	<small class="d-block mb-3">{{ setting('site.description') }}</small>
          <p class="d-block mb-3 text-muted">&copy; {{ now()->year }} FlipTop Kru Corp.</p>
        </div>
        <div class="col-6 col-md">
          <h5>Explore</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/') }}">Home</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/articles') }}">Articles</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees') }}">Emcees</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/tournaments') }}">Tournaments</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos') }}">Videos</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/lyrics') }}">Lyrics</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Emcees</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees/division/metro-manila') }}">Metro Manila</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees/division/central-luzon') }}">Central Luzon</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees/division/calabarzon') }}">Calabarzon</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees/division/visayas') }}">Visayas</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees/division/mindanao') }}">Mindanao</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Videos</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos/battle') }}">Battles</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos/perf') }}">Performances</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos/segment') }}">Segments</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/about') }}">The League</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="https://tryouts.fliptop.com.ph">Tryouts</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/promos') }}">Promos</a></li>
          </ul>
        </div>
        <div class="col-12 col-md mt-2">
          <div class="ft-soc">
  				  <a href="{{ setting('site.fb_link') }}" target="_blank"> <i class="fab fa-facebook fa-lg me-2"></i></a>
  				  <a href="{{ setting('site.tw_link') }}" target="_blank"> <i class="fab fa-twitter fa-lg me-2"></i></a>
  				  <a href="{{ setting('site.yt_link') }}" target="_blank"> <i class="fab fa-youtube fa-lg me-2"></i></a>
  				  <a href="{{ setting('site.ig_link') }}" target="_blank"> <i class="fab fa-instagram fa-lg me-2"></i></a>
  				  <a href="{{ setting('site.patreon_link') }}" target="_blank"> <i class="fab fa-patreon fa-lg me-2"></i></a>
          </div>
    			<hr>
    			<small class="d-block">Become a partner:</small>
    			<h5 class="ft-part">partner@fliptop.com.ph</h5>
        </div>
    </div>
  </div>
</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	
	</body>
</html>