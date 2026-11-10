{* ROTARY — SMS traffic chart card *}
<section class="rt-list-card rt-chart-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-chart-line"></i></span><span>VienSMS Traffic</span></h2>
    <div class="rt-list-actions"><a href="dfile.php?mode=c&c=stats&fn=vsms.traffic" class="btn btn-default btn-sm hide"><i class="fas fa-download"></i> Download</a></div>
  </header>
  <div class="rt-list-body">
    <div id="traffic" class="rt-chart-canvas"></div>
  </div>
</section>
<script type="text/javascript">
{ldelim}
	window.addEventListener("load", function(evt) {
		var chart = new CanvasJS.Chart("traffic", {
			animationEnabled: true,
			title: { text: "{$vsms.traffic.title}", fontFamily: "Plus Jakarta Sans, Inter, sans-serif", fontSize: 16, fontColor: "#121A2B" },
			axisX: { interval: 1, labelFontColor: "#66728A", lineColor: "#E4E9F2", tickColor: "#E4E9F2" },
			axisY: { labelFontColor: "#66728A", gridColor: "#EEF3FC", lineThickness: 0, tickLength: 0 },
			data: [{
				type: "line",
				color: "#17458F",
				lineThickness: 3,
				markerColor: "#F7A81B",
				markerSize: 8,
				dataPoints: {$vsms.traffic.results}
			}]
		});
		chart.render();
	})
{rdelim}
</script>
