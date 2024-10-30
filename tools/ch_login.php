<?php
include "conn.php";
$uname = $_REQUEST['uname'];
$pwd = $_REQUEST['pwd'];

$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pwd' and status='active'";
$ress = $conn->query($sql);

if ($ress->num_rows > 0) {
    $row = $ress->fetch_assoc();
    // session_start();
    $_SESSION['uname'] = $row['username'];
    $_SESSION['user_id'] = $row['user_id'];
    header("location:../dashboard.php");
}

else {
    header("location:../index.php");
}

?>