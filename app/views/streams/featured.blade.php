@extends('template/template')

@section('content')
  <h1>Featured Streams</h1>
  <div class="row" style="margin-bottom: 20px;">
      {{-- <div class="col-xs-12">
        <p><a href="{{ action('StreamController@show', ['id' => $streams[0]->channel->name]) }}">{{ $streams[0]->channel->status }}</a></p>
      </div> --}}
      <div class="clearfix"></div>
      {{-- For right now, we're going to force it to assume no flash and not show chat --}}
      @if (stripos($_SERVER['HTTP_USER_AGENT'],"iPhone") || stripos($_SERVER['HTTP_USER_AGENT'],"iPad") || stripos($_SERVER['HTTP_USER_AGENT'],"Android") || true)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
          <p><a href="{{ action('StreamController@show', ['id' => $streams[0]->channel->name]) }}">{{ $streams[0]->channel->status }}</a></p>
          <div class="embed-container">
            @include('streams.partials._player', ['channel' => $streams[0]->channel->name, 'autoplay' => 'true', 'volume' => '50'])
          </div>
          <p>
            <i class="fa fa-twitch"></i> <a href="#">{{ $streams[0]->channel->display_name }}</a>
            <span class="pull-right"><i class="fa fa-eye"></i> {{ $streams[0]->viewers }}</span>
          </p>
        </div>
      @else
        <div class="col-xs-12">
          <p><a href="{{ action('StreamController@show', ['id' => $streams[0]->channel->name]) }}">{{ $streams[0]->channel->status }}</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="embed-container">
            @include('streams.partials._player', ['channel' => $streams[0]->channel->name, 'autoplay' => 'true', 'volume' => '50'])
          </div>
          <p>
            <i class="fa fa-twitch"></i> <a href="#">{{ $streams[0]->channel->display_name }}</a>
            <span class="pull-right"><i class="fa fa-eye"></i> {{ $streams[0]->viewers }}</span>
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="embed-container">
            @include('streams.partials._chat', ['channel' => $streams[0]->channel->name])
          </div>
        </div>
      @endif
    </div>
  <div class="row" style="margin-bottom: 20px">
    <?php $i = 0 ?>
    @foreach(array_splice($streams, 1) as $stream)
      <?php $i ++; ?>

      <div class="col-xs-6 col-sm-6 col-md-4" style="margin-bottom: 10px;">
        @include('streams.partials._preview', ['stream' => $stream])
      </div>

      @if ($i % 3 == 0)
        <div class="clearfix visible-md visible-lg"></div>
      @elseif ($i % 2 == 0)
        <div class="clearfix visible-xs visible-sm"></div>
      @endif
    @endforeach
  </div>

  <div class="row" style="margin-bottom: 20px">
    <div class="col-xs-12">
      <button class="btn btn-block"><i class="fa fa-list"></i> View All Streams</button>
    </div>
  </div>
@endsection
