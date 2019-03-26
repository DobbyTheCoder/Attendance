<html>
<head></head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$tableClass = "table table-dark table-stripped";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Failed to connect : " . mysqli_connect_error());
}

$val = intval($_GET["id"]);

$sql = "select id, name, attendance FROM info WHERE id='".$val."'";

$res = mysqli_query($conn, $sql);

echo "<table class='table table-stripped table-success rounded table-bordered'>
<thead>
<tr>
<th>Name</th>
<th>ID</th>
<th>Attendance</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($res)){
	echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['attendance'] . "</td>";
}

echo "</tbody>
</table>";

mysqli_close($conn);
?>

</body>
</html>



	