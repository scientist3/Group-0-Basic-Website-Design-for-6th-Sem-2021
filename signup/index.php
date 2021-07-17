<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap_4.css">
  <title>Sign Up</title>
</head>

<body>
  <div class="container">
    <?php include("../navbar.php"); ?>

    <div class="row mt-5">
      <div class="col-8">
        <div class="card">
          <div class="card-header">
            <h3>Sign Up Form</h3>
          </div>
          <div class="card-body">
            <form action="./process-sign-up.php" method="post">
              <!-- First Name -->
              <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="fname">
              </div>

              <!-- Last Name -->
              <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="lname">
              </div>

              <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>

              <button type="submit" name="sigUpBtn" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <?php include("../right-sidebar.php"); ?>
    </div>

  </div>
</body>

</html>