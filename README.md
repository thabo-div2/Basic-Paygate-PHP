# Basic-Paygate-PHP

Must have mysql
create a database.php
include this code:

<?php 
    $servername = "localhost";
    $username = <username>;
    $password = <password>;
    $dbname = <database name>;

    $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn -> connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

?>
