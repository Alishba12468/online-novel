<?php
include "db.php";
$id=$_GET['id'];
$old=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM novels WHERE id=$id"));

if(isset($_POST['update'])){
$title=$_POST['title'];
$author=$_POST['author'];
$summary=$_POST['summary'];

mysqli_query($conn,"UPDATE novels SET title='$title',author='$author',summary='$summary' WHERE id=$id");
header("location:admin.php");
}
?>
<form method="post">
<input name="title" value="<?php echo $old['title']; ?>"><br>
<input name="author" value="<?php echo $old['author']; ?>"><br>
<textarea name="summary"><?php echo $old['summary']; ?></textarea><br>
<button name="update">Update</button>
</form>
