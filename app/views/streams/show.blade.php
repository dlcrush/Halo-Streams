@extends('template/template')

@section('content')
  {{-- <h3>{{ $stream->channel->status }}</h3> --}}

  <div class="row" style="margin-bottom: 20px;">
      {{-- <div class="col-xs-12">
        <p><a href="#">{{ $stream->channel->status }}</a></p>
      </div> --}}
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <h3>{{ $stream->channel->status }}</h3>
        {{-- <p><a href="#">{{ $stream->channel->status }}</a></p> --}}
        <div class="embed-container">
          @include('streams.partials._player', ['channel' => $stream->channel->name, 'autoplay' => 'true', 'volume' => '50'])
        </div>
      <p>
        <i class="fa fa-twitch"></i> <a href="#">{{ $stream->channel->display_name }}</a>
        <span class="pull-right"><i class="fa fa-eye"></i> {{ $stream->viewers }}</span>
      </p>
    </div>
    {{-- For right now, no chat --}}
    {{-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <div class="embed-container">
        @include('streams.partials._chat', ['channel' => $stream->channel->name])
      </div>
    </div> --}}
  </div>
@endsection
