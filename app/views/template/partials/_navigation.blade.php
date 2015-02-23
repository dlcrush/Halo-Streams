<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/halostreams.png') }}" class="img-responsive"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ action('StreamController@featured') }}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ action('StreamController@index') }}"><i class="fa fa-list"></i> All Streams</a></li>
        <li><a href="/contactus"><i class="fa fa-envelope"></i> Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
