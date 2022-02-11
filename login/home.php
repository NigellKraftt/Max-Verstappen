<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="loginstylesheet.css">

</head>

<body>

     <h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>

<div class="personeninfo">

</div>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php

}else{

     header("Location: index.php");

     exit();

}
