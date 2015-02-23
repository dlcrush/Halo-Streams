<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Watch the top Halo players in the world stream live."/>
    <meta property="og:title" content="Halo Streams"/>
    <meta property="og:url" content="http://halostreams.com/"/>
    <meta property="og:image" content="{{ asset('assets/img/halostreams.png') }}"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halo Streams</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/stylesheets/application.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script src=" {{ asset('assets/javascripts/application.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @include('template.partials._navigation')

    <div class="container-fluid main-content">
      @yield('content')
    </div>

    <footer class="container-fluid">
      @include('template.partials._footer')
    </footer>
  </body>
</html>
