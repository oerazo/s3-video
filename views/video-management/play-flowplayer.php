<a href="{videoFile}" style="display:block;width:{videoWidth}px;height:{videoHeight}px"  id="player"></a> 		
<script>
	flowplayer("player", '{flowplayerLocation}', {
		clip:  {
			autoBuffering: {videoAutoBuffer},
			autoPlayer: {videoAutoPlay},
			bufferLength: 5,				
		},
		{videoPlaylist}
	});
</script>