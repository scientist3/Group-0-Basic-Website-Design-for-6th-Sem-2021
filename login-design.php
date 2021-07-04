<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/login-design-style.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Fontawesome  -->
  <script src="https://kit.fontawesome.com/82e279e7bb.js" crossorigin="anonymous"></script>
  <title>Login Page Design 2</title>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active" id="signin-tag"> Sign In </h2>
      <h2 class="inactive underlineHover" id="signup-tag">Sign Up </h2>

      <!-- Icon -->
      <div class="fadeIn first">
        <!-- <img src="./assets/images/fa-user.png" id="icon" alt="User Icon" /> -->
        <i class="fas fa-user-circle fa-5x" id="icon"></i>
      </div>

      <!-- Login Form -->
      <div class="show" id="signin-div">
        <form class="login-form" action="" method="post">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
      </div>

      <!-- Signup Form -->
      <div class="hide" id="signup-div">
        <form class="signup-form" action="" method="post">
          <input type="text" id="firstname" class="fadeIn second" name="firstname" placeholder="First Name">

          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">

          <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
          <input type="submit" class="fadeIn fourth" value="Sign Up">
        </form>
      </div>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>

        <?php
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

        if (isset($_POST['username'])) {

          $username = $_POST["username"];
          $password = $_POST['password'];

          $boolUserExists = false;

          foreach ($userData as $user) {
            if ($user["username"] == $username && $user["password"] == $password) {
              $boolUserExists = true;
            }
          }

          if ($boolUserExists) {
            echo "User is logged in";
            header("Location:./dashboard.php");
          } else {
            echo "<p>Username or password is incorrect!</p>";
          }
        }
        ?>
      </div>

    </div>
  </div>
</body>
<script src="./assets/js/login.js"></script>

</html>