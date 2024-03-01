<?php
    require("db_connection.php");

    // $category_id = "1";
    $category_id = "";
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
    }
    $id = json_encode($category_id);
    echo $id;
?>