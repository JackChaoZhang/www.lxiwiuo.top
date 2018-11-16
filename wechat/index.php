<?php

    $mysqli = new mysqli("127.0.0.1", "root", "mySQL_zhch2004"); 

    if(!$mysqli)  { 
        echo"database error"; 
    }else{

        echo "connection successfully!"

    }

    $mysqli->close(); 
?> 
