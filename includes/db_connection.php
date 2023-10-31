<?php

$connection = mysqli_connect("localhost", "root", "", "law_app_db");

if(mysqli_connect_errno()){
    echo " Connection fail". mysqli_connect_error();
}
?>