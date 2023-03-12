<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <form method="POST" action="tambah.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required></input>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $id = $_GET['id'];
    // Cek Data.
    include("connect.php");
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "UPDATE form SET name='$name', email='$email', password='$password' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            echo "Data Telah Ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>