{* ROTARY — webcam capture *}
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<div class="rt-cam">
  <div class="rt-cam-pane">
    <span class="rt-cam-label"><i class="fas fa-video"></i> Live camera</span>
    <div id="my_camera" class="rt-cam-view"></div>
    <button type="button" onclick="take_snapshot()" class="btn rt-btn-gold rt-cam-btn"><i class="fas fa-camera"></i> Take Snapshot</button>
    <input type="hidden" name="document" class="image-tag">
    <input type="hidden" name="base64" value="true">
  </div>
  <div class="rt-cam-pane">
    <span class="rt-cam-label"><i class="far fa-image"></i> Snapshot</span>
    <div id="results" class="rt-cam-view rt-cam-result"><span class="rt-cam-empty"><i class="far fa-user-circle"></i>Your snapshot will appear here…</span></div>
  </div>
</div>
<script type="text/javascript">
    Webcam.set({
        width: 390,
        height: 290,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach( '#my_camera' );
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'" alt="Snapshot"/>';
        } );
    }
</script>
