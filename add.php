<?php
include "db.php";

if(isset($_POST['add'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $summary=$_POST['summary'];

    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$img);

    mysqli_query($conn,"INSERT INTO novels VALUES(null,'$title','$author','$summary','$img')");
    header("location:admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Novel</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="admin-container">
  <h2>➕ Add New Novel</h2>

  <form method="post" enctype="multipart/form-data" class="admin-form">
    <label>Novel Title</label>
    <input type="text" name="title" placeholder="Enter novel title" required>

    <label>Author</label>
    <input type="text" name="author" placeholder="Enter author name" required>

    <label>Summary</label>
    <textarea name="summary" rows="5" placeholder="Enter novel summary"></textarea>

    <label>Image</label>
    <input type="file" name="image" required>

    <button name="add">Add Novel</button>
  </form>

  <a class="back-btn" href="admin.php">⬅ Back to Admin Panel</a>
</div>

</body>
</html>
