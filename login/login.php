<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/images/favicon.ico">

  <link rel="stylesheet" href="../assets/css/login-style.css">
  <title>Login Page</title>
</head>

<body>

  <div class="container-div">
    <h1>Login Page</h1>

    <h2 class="center-text">POST FORM EXAMPLE</h2>
    <form action="" method="post">
      <input class="input-tag" type="text" name="username" id="" placeholder="Enter your username">
      <br>
      <input class="input-tag" type="password" name="password" id="" placeholder="Enter your password">
      <br>
      <input class="button" type="submit" value="Login">
    </form>
  </div>
  <?php
  /**
   * Display login to user 
   * After submission we collect the data IN GET or POST array
   * 
   * From Database we get user data.
   * 
   * We compare the submited data with our database data 
   *  If it matches then user is logged in else we show invalid user message.
   *  
   */

  $userData = [
    [
      "username" => "ummer",
      "password" => "abcd"
    ],
    [
      "username" => "mirshahid",
      "password" => "qwerty"
    ]
  ];
  echo "<pre>";
  //print_r($userData);
  // echo "</pre>";

  if (isset($_POST['username'])) {

    $username = $_POST["username"];
    $password = $_POST['password'];

    $boolUserExists = false;

    foreach ($userData as $user) {
      //print_r($user);
      //echo $user["username"] . "<br>";
      if ($user["username"] == $username && $user["password"] == $password) {
        $boolUserExists = true;
      }
    }

    if ($boolUserExists) {
      echo "User is logged in";
      header("Location:./dashboard.php");
    } else {
      echo "Username or password is incorrect!";
    }

    //print_r($_POST);
    //echo "<br>";


    // echo "Your inputed username is : " . $username;
    // echo "<br>";

    // echo "Your inputed password is : " . $password;
  }
  ?>

</body>

</html>