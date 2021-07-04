<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>

<body>
  <h1>Login Page</h1>

  <h2>GET FORM EXAMPLE</h2>
  <form action="" method="get">
    <input type="text" name="username" id="" placeholder="Enter your username">
    <input type="submit" value="Login">
  </form>

  <h2>POST FORM EXAMPLE</h2>
  <form action="" method="post">
    <input type="text" name="username" id="" placeholder="Enter your username">
    <input type="submit" value="Login">
  </form>

  <?php

  if (isset($_GET['username'])) {
    echo "<pre>";
    echo "GET Global Varaible DATA : ";
    print_r($_GET);
    echo "</pre>";
  }

  if (isset($_POST['username'])) {
    echo "POST Global Varaible DATA : ";
    print_r($_POST);
  }


  // $strGreeting = "Hello world, im being presented via php code.";

  // echo $strGreeting;
  ?>

</body>

</html>