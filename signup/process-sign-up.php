<?php
include("../dbconnect/db_connect.php");

if (isset($_POST['sigUpBtn'])) {
  // Collect User Submitted Data.
  $data = [
    "first_name"  => $_POST['fname'],
    "last_name"   => $_POST['lname'],
    "email"       => $_POST['email'],
    "password"    => $_POST['password'],
  ];

  // print_r($data);

  $sql = "INSERT INTO user_tbl 
                  ( id ,
                    first_name, 
                    last_name, 
                    email, 
                    password, 
                    doc, 
                    dou, 
                    status) 
          VALUES  ( '' ,
                    '" . $data["first_name"] . "',
                    '" . $data["last_name"] . "',
                    '" . $data["email"] . "',
                    '" . $data["password"] . "',
                    'NOW()',
                    'NOW()',
                    '1' )";

  echo $sql;

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
