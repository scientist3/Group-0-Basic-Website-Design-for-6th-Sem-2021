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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td id="fn_<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?></td>
          <td id="ln_<?php echo $row['id']; ?>"><?php echo $row['last_name']; ?></td>
          <td id="email_<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
          <td>
            <div class="btn  btn-sm btn-primary" onclick="updateBtn(<?php echo $row['id']; ?>)" data-toggle="modal" data-target="#updateModal">
              <i class="fa fa-edit " aria-hidden="true"> Edit</i>
            </div>
            <a class="btn btn-sm  btn-danger" href="#">
              <i class="fa fa-trash " aria-hidden="true"> Delete</i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">

            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" id="update_fn" aria-describedby="emailHelp" placeholder="First Name" value="">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" class="form-control" id="update_ln" aria-describedby="emailHelp" placeholder="Last Name">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script>
  function updateBtn(id) {
    var fname = $('#fn_' + id).html();
    var lname = $('#ln_' + id).html();

    $('#update_fn').val(fname);
    $('#update_ln').val(lname);
    //alert("Edit Button Clicked: " + name);
  }
</script>