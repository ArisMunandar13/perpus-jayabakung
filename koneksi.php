<?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $dbname = "db_perpustakaan";
 $con = mysqli_connect($host, $user, $password, $dbname);

if(!$con){
    die("error:(");
}

?>