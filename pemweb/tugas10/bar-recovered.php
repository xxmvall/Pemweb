<?php
include('koneksi.php');
$covid = mysqli_query($koneksi, "select * from covid_data");
while ($row = mysqli_fetch_array($covid)) {
    $nama_negara[] = $row['country'];

    $query = mysqli_query($koneksi, "select sum(total_recovered) as total_recovered from covid_data where id='" . $row['id'] . "'");
    $row = $query->fetch_array();
    $jumlah_recovered[] = $row['total_recovered'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Recovered Bar Chart</title>
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
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Grafik Recovered',
					data: <?php echo json_encode($jumlah_recovered); ?>,
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