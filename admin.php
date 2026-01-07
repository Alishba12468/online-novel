<?php
include "db.php";
$data = mysqli_query($conn,"SELECT * FROM novels");
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="admin-container">
  <h1>🔐 Admin Panel</h1>
  <a class="btn-add" href="add.php">➕ Add New Novel</a>

  <table class="admin-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row=mysqli_fetch_assoc($data)){ ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><img src="<?php echo $row['image']; ?>" class="thumb"></td>
        <td>
          <a class="edit-btn" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
          <a class="delete-btn" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
