<?php 
    require "../modal/connect.php";
    $id = $_POST["id"];
    $naems = $_POST["names"];
    $images = $_FILES["images"]["name"];
    $cate = $_POST["category"];
    // var_dump($_POST);die;
    if(empty($_FILES["images"]["name"])){
        $images = $_POST["old"];
    }else{
        $images = $_FILES["image"]["name"];
        move_uploaded_file($_FILES["images_tmp"]["name"],"../image/".$_FILES["image"]["name"]);
    }

    $query = "UPDATE food SET names='$naems',images='$images',category='$cate' WHERE id = $id";
    move_uploaded_file($_FILES["images"]["tmp_name"],"../image/".$_FILES["images"]["name"]);
    connect($query);

    header("location:../view/admin/index.php");
?>