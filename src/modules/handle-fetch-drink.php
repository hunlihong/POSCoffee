<?php
/* session_start();
require("db_connection.php");

$category_id = $_POST['category_id'];
$get_drink_data_query = "SELECT drink_id ,drink_name, drink_price, drink_img FROM drink_tbl WHERE drink_category_id = '$category_id'";

$execute_fetch_query = $connection->query($get_drink_data_query);
$result_num_row = $execute_fetch_query->num_rows;

$data = array();
$index = 0;

while ($index <= $result_num_row) {
    $row = $execute_fetch_query->fetch_assoc();
    array_push($data, $row);
    $index++;
}

echo json_encode(array("data" => $data, "num_row" => $result_num_row));
*/

require("db_connection.php");

$get_drink_data_query = "SELECT drink_id, drink_name, drink_price, drink_img, drink_category_id FROM drink_tbl";
$result_num_row = mysqli_query($connection, $get_drink_data_query);
$data = array();
while ($row = mysqli_fetch_assoc($result_num_row)) {
    array_push($data, $row);
}

$drinks = json_encode($data);
echo $drinks;
