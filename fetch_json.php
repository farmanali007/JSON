<?php
$conn = mysqli_connect("localhost", "root", "", "blog") or die("connection Faileed");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql) or die("sql query Failed");
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($output);
?>