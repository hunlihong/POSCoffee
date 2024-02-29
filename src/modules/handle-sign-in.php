<?php
session_start();
require("db_connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$username_contain_space = str_contains($username, " ");
$password_contain_space = str_contains($password, " ");

$password_empty = empty($password);
$username_empty = empty($username);

if ($username_empty || $username_contain_space || $password_contain_space || $password_empty) {
    response_valid(false);
} else {
    $validate_form_query = "SELECT account_id FROM account_tbl WHERE account_username = '$username' AND account_password = '$password'";
    $execute_validate_query = $connection->query($validate_form_query);

    if ($execute_validate_query->num_rows > 0) {
        $row = $execute_validate_query->fetch_array();
        $_SESSION['login'] = true;
        $_SESSION['account_id'] = $row['account_id'];
        response_valid(true);
    } else {
        response_valid(false);
    }
}

function response_valid($valid)
{
    $response = array("status" => $valid);
    $encoded_response = json_encode($response);
    echo $encoded_response;
}
