<?php 

session_start();

if (!($_SESSION['role'] == "users") || !isset($_SESSION['role'])) {
    header("Location: ../index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Users</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="../logout.php">Logout</a>
</body>
</html>