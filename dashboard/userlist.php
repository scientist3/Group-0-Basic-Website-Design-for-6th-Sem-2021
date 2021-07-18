<?php
include("../dbconnect/db_connect.php");

$sql = "SELECT * FROM user_tbl";

$result = $conn->query($sql);

?>

<div class="card-body">
  <h5 class="card-title">User list</h5>
  <hr>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['first_name']; ?></td>
          <td><?php echo $row['last_name']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>