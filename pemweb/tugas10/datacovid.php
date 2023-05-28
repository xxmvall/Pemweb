<h2>DATA COVID</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>COUNTRY</th>
        <th>TOTAL CASES</th>
        <th>TOTAL DEATHS</th>
        <th>TOTAL RECOVERED</th>
        <th>ACTIVE CASES</th>
        <th>TOTAL TESTS</th>
        <th>POPULATION</th>
    </tr>
    <?php
    include 'koneksi.php';
    $covid_data = mysqli_query($koneksi, "SELECT * FROM covid_data");
    foreach ($covid_data as $row){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['country']."</td>
            <td>".$row['total_cases']."</td>
            <td>".$row['total_deaths']."</td>
            <td>".$row['total_recovered']."</td>
            <td>".$row['active_cases']."</td>
            <td>".$row['total_tests']."</td>
            <td>".$row['population']."</td>
            <tr>";

    }
    ?>
</table>
