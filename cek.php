<?php
include 'koneksi.php';

$username = $_POST['username'] ? $_POST['username'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM users WHERE username = '$username'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>