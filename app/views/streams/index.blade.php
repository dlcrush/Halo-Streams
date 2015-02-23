@extends('template/template')

@section('content')
  <h1>All Streams</h1>
  <div class="row" style="margin-bottom: 20px">
    <?php $i = 0 ?>
    @foreach($streams as $stream)
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
@endsection
