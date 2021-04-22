<?php
include 'connection.php';

$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$roll = mysqli_real_escape_string($con, $_POST['roll']);
$date = mysqli_real_escape_string($con, $_POST['date']);

$getData = "select * from users where  roll = '$roll'";
$rs = mysqli_query($con, $getData);
$getDat = "select * from users where  id = '$id'";
$rss = mysqli_query($con, $getDat);
$num = mysqli_num_rows($rs);
$num_id = mysqli_num_rows($rss);
if ($num_id == 1) {
    header('location:error.php');
} else {
    if ($num == 3) {
        header('location:error.php');
    } else {
        $myconn = "INSERT INTO `users` (`id`, `name`, `roll`, `date`) VALUES ('$id', '$name', '$roll', '$date');";

        $user_submit = mysqli_query($con, $myconn);
        header('location:issued.php');
    }
}

?>
