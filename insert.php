
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
	echo ($tsql);
    $stmt= sqlsrv_query($conn, $tsql);
	echo ($stmt);
	
	if ($stmt) {  
		echo "Row successfully inserted.\n";  
	} else {  
		echo "Row insertion failed.\n";  
		die(print_r(sqlsrv_errors(), true));  
	}  
	  
	/* Free statement and connection resources. */  
	sqlsrv_free_stmt($stmt);  
	sqlsrv_close($conn);  
	
?>  
