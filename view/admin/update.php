<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require "../../modal/connect.php";
        $id = $_GET["id"];
        $query = "SELECT * FROM food WHERE id = $id";
        $prod = getOne($query);

    ?>
<form action="../../controler/control_update.php" method="POST" enctype="multipart/form-data">
        <input type="text" value="<?php echo $id?>" name="id">
        <input type="text" name="names" id="" placeholder="ten san pham" required="" minlength="6" value="<?php echo $prod["names"]?>"> <br>
        <input type="file" name="images" id=""><br>
        <input type="text" value="<?php echo $prod["images"]?>" name="old">
        <select name="category" id=""> <br>
        <?php 
                    require_once "../../modal/connect.php";
                    $query = "SELECT * FROM category";
                    $dinh = getAll($query); 
                ?>
                <?php foreach($dinh as $dinhh):?>
            <option value="<?php echo $dinhh["id"]?>"><?php echo $dinhh["names"]?></option>    
                    <?php endforeach?>
        </select>
        <button>add new</button> 
    </form>
</body>
</html>