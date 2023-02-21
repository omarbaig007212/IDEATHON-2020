<?php
    $server="sql306.epizy.com";
    $username="epiz_25653733";
    $password="aRwjyTWH9pDNu";
    $dbname="epiz_25653733_hospital_management";

    $conn= mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
      die("connection Failed:".mysqli_connect_error());
    }

?>
