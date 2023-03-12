<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>

<body>

  <!-- Link -->
  <a href="tambah.php">Tambah data</a>
  <!-- TABLE -->
  <h2>Data User</h2>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
    <?php
    include("connect.php");
    $sql = "SELECT * FROM form";
    $result = mysqli_query($conn, $sql);
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
          <a href="index.php?delete=<?php echo $row["id"]; ?>">Hapus</a>
        </td>

      </tr>

    <?php $i++;
    endwhile; ?>
  </table>
  <?php
  if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $sql = "DELETE FROM form WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Data berhasil dihapus');</script>";
    } else {
      echo "<script>alert('Data gagal dihapus');</script>";
    }
  }
  ?>
</body>

</html>