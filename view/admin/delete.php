<?php 
    require "../../modal/connect.php";

    $aaa = $_GET["id"];

    $query = "DELETE FROM food WHERE id = $aaa";
    connect($query);
    header("location:index.php");
?>