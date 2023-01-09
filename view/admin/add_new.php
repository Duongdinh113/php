<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../controler/control_addNew.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="names" id="" placeholder="ten san pham" required="" minlength="6"> <br>
        <input type="file" name="images" id=""><br>
        <select name="category" id=""> <br>
        <?php 
                    require "../../modal/connect.php";
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