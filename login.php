<?php
  session_start();

  if (isset($_SESSION['failed']) && $_SESSION['failed'] == 1) {
    $failed = "Username or password is incorrect.
    Unsuccessful attempts " . $_SESSION['failed_attempts'] . ".";
  }
  else {
    $failed = "";
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>

    <h1>Login</h1>

    <form action="/validate.php" method="post">
      <label for="fname">Username:</label>
      <br>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Submit">
      <br>
      <p style="color:red;"><?= $failed ?></p>
    </form>

  </body>
</html>



