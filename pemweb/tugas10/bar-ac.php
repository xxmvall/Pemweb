<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "select * from covid_data");
while ($row = mysqli_fetch_array($data)) {
    $negara[] = $row['country'];

    $query = mysqli_query($koneksi, "select sum(active_cases) as active_cases from covid_data where id='" . $row['id'] . "'");
    $row = $query->fetch_array();
    $cases[] = $row['active_cases'];
}
?>
<html>
<head>
	<title>Total Active Cases Bar Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($negara); ?>,
				datasets: [{
					label: 'Grafik Active Cases',
					data: <?php echo json_encode($cases); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>