{* ROTARY — enrolments chart card *}
<section class="rt-list-card rt-chart-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-chart-bar"></i></span><span>Enrollments</span></h2>
    <div class="rt-list-actions"><a href="?dad=bulk&jc=reports&a=download&t=enrollments" class="btn btn-default btn-sm ignore hide"><i class="fas fa-download"></i> Download</a></div>
  </header>
  <div class="rt-list-body">
    <div id="encrollments" class="rt-chart-canvas"></div>
  </div>
</section>
<script type="text/javascript">
{ldelim}
	window.addEventListener("load", function(evt) {
		var chart = new CanvasJS.Chart("encrollments", {
			animationEnabled: true,
			title: { text: "{$enrollments.title}", fontFamily: "Plus Jakarta Sans, Inter, sans-serif", fontSize: 16, fontColor: "#121A2B" },
			axisX: { interval: 1, labelFontColor: "#66728A", lineColor: "#E4E9F2", tickColor: "#E4E9F2" },
			axisY: { labelFontColor: "#66728A", gridColor: "#EEF3FC", lineThickness: 0, tickLength: 0 },
			data: [{
				type: "column",
				color: "#17458F",
				dataPoints: {$enrollments.results}
			}]
		});
		chart.render();
	})
{rdelim}
</script>
