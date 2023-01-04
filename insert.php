
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
		echo "true"; 
	} else {  
		echo "false"; 
	}  
	  
	/* Free statement and connection resources. */  
	sqlsrv_close($conn); 
	sqlsrv_free_stmt($stmt);  
	
?>  
