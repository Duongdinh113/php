<?php 
    require "../modal/connect.php";

    $naems = $_POST["names"];
    $images = $_FILES["images"]["name"];
    $cate = $_POST["category"];
//    var_dump($_POST);die;

    $query = "INSERT INTO food (names,images,category) VALUES ('$naems','$images','$cate')";
    move_uploaded_file($_FILES["images"]["tmp_name"],"../image/".$_FILES["images"]["name"]);
    connect($query);

    header("location:../view/admin/index.php");
?>