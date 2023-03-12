<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
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
        <input type="text" id="password" name="password" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

    // Cek Data.
    include("connect.php");
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO form (name, email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Data Telah Ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>