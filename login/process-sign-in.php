<?php
// $userData = [
//   [
//     "email" => "ummer@gamil.com",
//     "password" => "ummer"
//   ],
//   [
//     "email" => "ms@gmail.com",
//     "password" => "ms"
//   ]
// ];

include("../dbconnect/db_connect.php");

$sql = "SELECT * FROM user_tbl";

$result = $conn->query($sql);

if (isset($_POST['signInBtn'])) {

  $email = $_POST["email"];
  $password = $_POST['password'];

  $boolUserExists = false;

  while ($row = $result->fetch_assoc()) {
    if ($row['email'] == $email && $row['password'] == $password) {
      $boolUserExists = true;
      break;
    }
  }

  if ($boolUserExists) {
    echo "User is logged in";
    header("Location:../dashboard/dashboard.php");
  } else {
    //header("Location:./login-bootstrap.php");
    echo "<p class='error'>Username or password is incorrect!</pre>";
  }
}
