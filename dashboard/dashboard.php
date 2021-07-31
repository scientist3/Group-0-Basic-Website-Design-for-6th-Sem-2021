<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/fontawesome/font-awesome.css">
  <!-- 82e279e7bb -->
  <script src="https://kit.fontawesome.com/82e279e7bb.js" crossorigin="anonymous"></script>
  <title>Dashboard</title>
</head>

<body>
  <div class="container">
    <!-- Top Row -->
    <div class="row">
      <div class="col-sm-12 p-4" style="background-color: black;color: white;">
        <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px;width: 30px;float:left;" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px;width: 30px;float:right;" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
    </div>
    <div class="row" sstyle="border: 2px solid #7aa4b9;">
      <div class=" card col-sm-12">
        <svg xmlns="http://www.w3.org/2000/svg" style="height:30px;width:30px;" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
        </svg>
        <p>Department</p>
      </div>
    </div>
    <!-- Two sections: Sidebar & Main Containt -->
    <div class="row pt-4 mb-2" style="min-height: 400px;">
      <div class="card col-sm-3">
        <div class="card-body">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Department</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pateint</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Users</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="card col-sm-8 ml-4">
        <?php include("./userlist.php"); ?>


      </div>
    </div>

    <div class="card">
      <div class="card-body">
        Copyright &copy;2021 Group 0 Govt. Degree College Ganderbal.
      </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>


</html>