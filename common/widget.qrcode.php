{* ROTARY — QR code scanner *}
<div class="rt-qr">
  <div class="rt-qr-head"><span class="rt-list-ico"><i class="fas fa-qrcode"></i></span><div><strong>Scan a QR code</strong><small>Point your camera at the code — we'll open it automatically.</small></div></div>
{literal}
  <div id="qr-reader" class="rt-qr-reader" style="width:100%"></div>
</div>
<script src="/libs/qrcode.js"></script>
<script>
    function docReady(fn) {
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
				window.open("{/literal}{$url}{literal}"+lastResult, "_self");
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: {width: '100%', height: '100%'} });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
{/literal}
