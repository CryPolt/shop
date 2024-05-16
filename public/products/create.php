<?php

namespace create;
require_once "../config.php";

use DB\db;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $agent_id = $_POST["agent_id"];

    $sql = "INSERT INTO products (agent_id, name, price) VALUES ('$agent_id' , '$name' , $price)";


    if ($db->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error();
    }
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/create.css">
    <title>create</title>
</head>
<body>

<div class="registration-form">
    <form method="post" action="create.php" enctype="multipart/form-data">
        <h3 class="text-center">Create your account</h3>
        <div class="form-group">
            <input class="form-control item" type="text" name="name" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="name" placeholder="name" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="number" name="agent_id" id="agent_id" placeholder="agent_id" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="number" name="price" id="price" placeholder="price" required>
        </div>
        <div class="form-group">

            <button class="btn btn-primary btn-block create-account" name="create" type="submit">
                <link rel="stylesheet" href="index.php"> Create product</button>
        </div>
        <div class="form-group">
            <input type="file" name="file">
            <input type="submit" value="Загрузить файл!">
            <?php
            if(isset($_FILES['file'])) {
                // проверяем, можно ли загружать изображение
                $check = $db->can_upload($_FILES['file']);

                if($check === true){
                    // загружаем изображение на сервер
                    $db->make_upload($_FILES['file']);
                    echo "<strong>Файл успешно загружен!</strong>";
                }
                else{
                    // выводим сообщение об ошибке
                    echo "<strong>$check</strong>";
                }
            }
            ?>
        </div>
    </form>
</div>


</body>
</html>

<?php
$db->close();
?>


