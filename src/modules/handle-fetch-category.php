<?php
    require("db_connection.php");

    $categories = array();
    $get_category = "SELECT * FROM  category_tbl";
    $exe = mysqli_query($connection, $get_category);
    while ($category = mysqli_fetch_assoc($exe)) {
        array_push($categories, $category);
    }

    $result = json_encode($categories);
    echo $result;
?>