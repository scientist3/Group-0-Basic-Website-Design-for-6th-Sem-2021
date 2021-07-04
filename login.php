<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/images/favicon.ico">

  <link rel="stylesheet" href="./assets/css/loginstyle.css">
  <title>Login Page</title>
</head>

<body>

  <div class="container-div">
    <h1>Login Page</h1>

    <h2 class="center-text">POST FORM EXAMPLE</h2>
    <form action="" method="post">
      <input type="text" name="username" id="" placeholder="Enter your username">

      <input type="password" name="password" id="" placeholder="Enter your password">
      <input type="submit" value="Login">
    </form>
  </div>
  <?php

  if (isset($_POST['username'])) {

    print_r($_POST);
    echo "<br>";
    $username = $_POST["username"];
    $password = $_POST['password'];


    echo "Your inputed username is : " . $username;
    echo "<br>";

    echo "Your inputed password is : " . $password;
  }
  ?>

</body>

</html>