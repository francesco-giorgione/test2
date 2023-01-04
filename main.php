<?php
    $serverName = "ilike.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "iLike", // update me
        "Uid" => "CloudSAe14a0d66", // update me
        "PWD" => "iLike_2022" // update me
    );

    echo 'Ora provo a connettermi al db';    

    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $getResults= sqlsrv_query($conn, $tsql);

    echo 'Sono alla fine';

?>
