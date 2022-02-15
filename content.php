<?php
	$conn = mysqli_connect("172.19.0.2", "root", "UAS", "Trucorp");
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan></th></tr>";
		while ($row = $result->fectch_assoc()){
			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Nama"] . "</td><td>" . $row["Alamat"] . "</td><td>" . $row["Jabatan"] . "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "NO DATA";
	}
	mysqli_close($conn);
?>
