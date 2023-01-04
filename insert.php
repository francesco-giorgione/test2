
<?php
	$serverName = "ilike.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "iLike", // update me
        "Uid" => "CloudSAe14a0d66", // update me
        "PWD" => "iLike_2022" // update me
    );
   

    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
	$tsql = $_POST['query'];
	echo($tsql);
	
	if ($conn->query($tsql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $tsql . "<br>" . $conn->error;
	}

	$conn->close();
?>
