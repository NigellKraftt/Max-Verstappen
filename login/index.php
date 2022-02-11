<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="loginstylesheet.css">
  </head>
  <body>
    <form class="" action="login.php" method="post">
      <h2>LOGIN</h2>
      <?php
      if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET ['error']; ?></p>
      <?php } ?>
      <label for="">User Name</label>
      <input type="text" name="uname" placeholder="User Name"><br>
      <label for="">Password</label>
      <input type="password" name="password" placeholder="Password"><br>

      <button type="submit" name="button">Login</button>

    </form>

  </body>
</html>
