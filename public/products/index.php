<?php

namespace index;
require_once "../config.php";
use DB\db;

$sql = "SELECT name, agent_id, price FROM products";
$result = $db->query($sql);

if ($db->connected() === "Connected successfully") {
    while ($row = $result->fetch_assoc()) {
        echo '<br>';

        echo '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="/styles/css/style.css">
</head>
    <body>
    <div class="pro-container">
<div class="pro">
    <img src="" alt="">
    <div class="des">
        <span> ' . $row['agent_id'] . '</span>
        <h5>' . $row['name'] . '</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h4>' . $row['price'] . '</h4>
    </div>
    <a href=""><i class="fal fa-shopping-cart cart"></i></a>
</div>
</div>
</body>
</html>
    ';
    }
} else {
    echo "Database connection failed: " . $db->error();
}



echo '
';

$db->close();
