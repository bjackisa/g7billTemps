{* ROTARY — floating live-audio player *}
<script type="text/javascript" src="/libs/amplitude.js"></script>
<div class="amplitude-play-pause amplitude-paused rt-player" amplitude-song-index="0" role="button" tabindex="0" aria-label="Play / pause live audio" title="Live audio"></div>
<script type="text/javascript">
	Amplitude.init({
		"songs": [
			{
				"url": "{Extended::Value(['name'=>'music_player'])}",
				"live": true
			}
		]
	});
</script>
