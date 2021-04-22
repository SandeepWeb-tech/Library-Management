<?php
include 'connection.php';

$id = mysqli_real_escape_string($con, $_POST['id']);

$select_query = "DELETE FROM users WHERE id = '$id'";

$data = mysqli_query($con, $select_query);

header('location:returned.php');
?>
