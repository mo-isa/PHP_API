<?php

$connection = mysqli_connect("localhost" , "root" , "", "ISSA_PHP");

$query = "select * from students";

$result = mysqli_query($connection, $query);

$students = [];

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		// $students[] = $row;
		array_push($students, $row);
	}
}

echo json_encode($students);


?>