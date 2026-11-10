{* ROTARY — clients chart card *}
<section class="rt-list-card rt-chart-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-users"></i></span><span>Clients</span></h2>
    <div class="rt-list-actions"><a href="?dad=bulk&jc=reports&a=download&t=clients" class="btn btn-default btn-sm ignore hide"><i class="fas fa-download"></i> Download</a></div>
  </header>
  <div class="rt-list-body">
    <div id="clients" class="rt-chart-canvas"></div>
  </div>
</section>
<script type="text/javascript">
{ldelim}
	window.addEventListener("load", function(evt) {
		var chart = new CanvasJS.Chart("clients", {
			animationEnabled: true,
			title: { text: "{$clients.title}", fontFamily: "Plus Jakarta Sans, Inter, sans-serif", fontSize: 16, fontColor: "#121A2B" },
			axisX: { interval: 1, labelFontColor: "#66728A", lineColor: "#E4E9F2", tickColor: "#E4E9F2" },
			axisY: { labelFontColor: "#66728A", gridColor: "#EEF3FC", lineThickness: 0, tickLength: 0 },
			data: [{
				type: "line",
				color: "#17458F",
				lineThickness: 3,
				markerColor: "#F7A81B",
				markerSize: 8,
				dataPoints: {$clients.results}
			}]
		});
		chart.render();
	})
{rdelim}
</script>
