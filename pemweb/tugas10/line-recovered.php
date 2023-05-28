<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "select * from covid_data");
while ($row = mysqli_fetch_array($data)) {
    $negara[] = $row['country'];

    $query = mysqli_query($koneksi, "select total_recovered from covid_data where id='" . $row['id'] . "'");
    $row = $query->fetch_array();
    $jumlah_recovered[] = $row['total_recovered'];
}
?>

<!doctype html>
<html>

<head>
    <title>Total Recovered Line Chart</title>
    <script type="text/javascript" src="Chart.js"></script>
    <style>
    #canvas-holder {
        display: flex;
        justify-content: center;
        /* Horizontally center */
        align-items: center;
        /* Vertically center */
        width: 100%;
        height: 100%;
        /* Adjust the height as needed */
    }
    </style>
</head>

<body>
    <div id="canvas-holder">
        <canvas id="chart-area"></canvas>
    </div>
    <script>
		var ctx = document.getElementById("chart-area").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($negara); ?>,
				datasets: [{
					label: 'Total Recovered ',
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