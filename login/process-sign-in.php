<?php
$userData = [
  [
    "email" => "ummer@gamil.com",
    "password" => "ummer"
  ],
  [
    "email" => "ms@gmail.com",
    "password" => "ms"
  ]
];

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

if (isset($_POST['signInBtn'])) {

  $email = $_POST["email"];
  $password = $_POST['password'];

  $boolUserExists = false;

  foreach ($userData as $user) {
    if ($user["email"] == $email && $user["password"] == $password) {
      $boolUserExists = true;
    }
  }

  if ($boolUserExists) {
    //echo "User is logged in";
    header("Location:./dashboard.php");
  } else {
    header("Location:./login-bootstrap.php");
    //echo "<p class='error'>Username or password is incorrect!</pre>";
  }
}
