<?php
include "db.php";
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM novels WHERE id=$id");
header("location:admin.php");
?>
