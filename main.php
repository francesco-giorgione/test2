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

    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo "PROBLEMA";
    else
        echo "OK";

    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ("Nuovo risultato");
    }

    echo 'Sono alla fine';

?>
