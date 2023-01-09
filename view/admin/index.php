<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th,td{
        border: 1px solid orange;
    }
</style>
<body>
    <?php 
        require "../../modal/connect.php";
        $query = "SELECT * FROM food";
        $product = getAll($query);
    ?>
    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>name</th>
                <th>image</th>
                <th>category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product as $item):?>
            <tr>
                <td><?php echo $item["id"]?></td>
                <td><?php echo $item["names"]?></td>
                <td><img src="<?php echo "../../image/".$item["images"]?>" alt=""></td>
                <td>
                    <?php 
                        $cate = $item["category"];
                        
                        $query = "SELECT * FROM category WHERE id = $cate";
                        $pro = getOne($query);
                        echo $pro["names"];
                    ?>
                </td>
                <td>
                    <a href="update.php?id=<?php echo$item["id"]?>"><button>update</button></a>
                    <a href="delete.php?id=<?php echo$item["id"]?>"><button>delete</button></a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
        <a href="add_new.php"><button>add new</button></a>
    </table>
</body>
</html>