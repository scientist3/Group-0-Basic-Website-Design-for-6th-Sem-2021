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

$data = $result->fetch_assoc();
$data1 = $result->fetch_assoc();

echo "<pre>";
print_r($result);
print_r($data);
print_r($data1);
echo $data1['first_name'];
exit();
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
