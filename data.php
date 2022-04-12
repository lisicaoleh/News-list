<?php

require_once 'class.php';
$con = mysqli_connect("localhost", "root", "", "news");
mysqli_set_charset($con, "utf8");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL" . mysqli_connect_error();
}

$publication = [];
$result = mysqli_query($con, "SELECT * FROM news;");
$count = mysqli_affected_rows($con);
if($count){
    while($row = mysqli_fetch_array($result)){
        $publication[] = new $row['type']($row);
    }
}
    

