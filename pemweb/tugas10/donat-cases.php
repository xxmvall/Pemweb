<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "select * from covid_data");
while ($row = mysqli_fetch_array($data)) {
    $negara[] = $row['country'];

    $query = mysqli_query($koneksi, "select total_cases from covid_data where id='" . $row['id'] . "'");
    $row = $query->fetch_array();
    $cases[] = $row['total_cases'];
}
?>
<!doctype html>
<html>

<head>
    <title>Total Recovered Doughnut Chart</title>
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
<h1 style= "text-align : center">Total Recovered</h1>
    <div id="canvas-holder">
        <canvas id="chart-area"></canvas>
    </div>
<script>
		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($cases); ?>,
					backgroundColor: [
					'aqua',
					'silver',
					'maroon',
					'yellow',
					'black',
					'red',
					'green',
					'magenta',
					'orange',
					'blue'
					],
					borderColor:[
					'black',
					'black',
					'black',
					'black',
					'black',
					'black',
					'black',
					'black',
					'black',
					'black'	
					],
					label: 'Total Recovered'
				}],
				labels: <?php echo json_encode($negara); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
	</script>
</body>