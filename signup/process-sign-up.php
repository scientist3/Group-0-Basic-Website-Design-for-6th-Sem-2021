<!-- < ?php

echo "<pre>";
print_r($_POST);

echo "</pre>";

echo "process-sign-up.php";
 -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "group_0_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


echo "Connected successfully";

echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if (isset($_POST['sigUpBtn'])) {
  // Collect User Submitted Data.
  $data = [
    "first_name"  => $_POST['fname'],
    "last_name"   => $_POST['lname'],
    "email"       => $_POST['email'],
    "password"    => $_POST['password'],

  ];

  print_r($data);

  $sql = "INSERT 
            INTO user_tbl (id ,first_name, last_name, email, password, doc, dou, status) 
          VALUES ( '' ,'" . $data["first_name"] . "', '" . $data["last_name"] . "', '" . $data["email"] . "', '" . $data["password"] . "', 'NOW()', 'NOW()', '1' )";

  echo $sql;

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>