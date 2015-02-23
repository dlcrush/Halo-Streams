
{{-- Use the iframe HTML5 player for iOS and Android devices --}}
<iframe id="player" type="text/html"
src="http://www.twitch.tv/{{ $channel }}/embed"
frameborder="0"></iframe>

{{-- Use the standard, flash player for non-iOS and Android devices --}}
{{-- <object bgcolor="#000000"
        data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf"
        type="application/x-shockwave-flash"
        >
  <param name="allowFullScreen"
          value="true" />
  <param name="allowNetworking"
          value="all" />
  <param name="allowScriptAccess"
          value="always" />
  <param name="movie"
          value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
  <param name="flashvars"
          value="channel={{ $channel }}&auto_play={{ $autoplay }}&start_volume={{ $volume }}" />
</object> --}}
