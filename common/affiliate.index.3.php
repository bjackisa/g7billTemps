{* ROTARY — affiliate statistics chart *}
<section class="rt-list-card rt-chart-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-chart-line"></i></span><span>Affiliate statistics</span></h2>
    <div class="rt-legend"><span class="rt-legend-item is-credit">Sales</span><span class="rt-legend-item is-fee">Hits</span><span class="rt-legend-item is-debit">Earnings</span></div>
  </header>
  <div class="rt-list-body"><div id="chartContainer" class="rt-chart-canvas"></div></div>
</section>
<script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
	backgroundColor: "transparent",
	title: { text: "{$year} Monthly Traffic Data", fontFamily: "Plus Jakarta Sans, Inter, sans-serif", fontSize: 16, fontWeight: "bold", fontColor: "#0B1F44" },
	axisX: { labelFontFamily: "Inter, sans-serif", labelFontColor: "#5B6B86", lineColor: "#E3E9F3", tickColor: "#E3E9F3" },
	axisY: { labelFontFamily: "Inter, sans-serif", labelFontColor: "#5B6B86", gridColor: "#EEF2F8", lineThickness: 0, tickLength: 0 },
	toolTip: { shared: true, cornerRadius: 10, borderColor: "#17458F", fontFamily: "Inter, sans-serif" },
	legend: { cursor: "pointer", fontFamily: "Inter, sans-serif", fontColor: "#1F2A44" },
	data: [
	{ type: "column", name: "Monthly Sales", color: "#17458F", showInLegend: true, dataPoints: {$stats.S.results} },
	{ type: "line", name: "Monthly Hits", color: "#F7A81B", lineThickness: 3, markerSize: 7, showInLegend: true, dataPoints: {$stats.S.results} },
	{ type: "area", name: "Monthly Earnings", color: "rgba(0,165,172,.35)", lineColor: "#00A5AC", markerBorderColor: "white", markerBorderThickness: 2, showInLegend: true, yValueFormatString: "$#,##0", dataPoints: {$stats.E.results} }
	]
});
chart.render();
}
</script>
