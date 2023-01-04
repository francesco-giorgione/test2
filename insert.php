
<?php
	$serverName = "ilike.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "iLike", // update me
        "Uid" => "CloudSAe14a0d66", // update me
        "PWD" => "iLike_2022" // update me
    );
   

	if ($conn === false) {  
    echo "Could not connect.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  
   
	$tsql = $_POST['query'];
	  
	/* Prepare and execute the query. */  
	$stmt = sqlsrv_query($conn, $tsql);  
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
