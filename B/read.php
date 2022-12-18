<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>user registration</title>
  </head>
  <body style="background-color: green;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">USER REGISTRATION SYSTEM - SINGLE RECORD</h1>
          <hr style="height: 1px;color: black;background-color: red;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){

          ?>
          <div class="card">
            <div class="card-header">
              Single Record
            </div>
            <div class="card-body">
              <p>Name = <?php echo $row['name']; ?></p>
              <p>Email = <?php echo $row['email']; ?></p>
              <p>Mobile No. = <?php echo $row['mobile']; ?></p>
              <p>gender = <?php echo $row['gender']; ?></p>
              <p>Address = <?php echo $row['address']; ?></p>
            </div>
          </div>
          <?php
            }else{
            echo "no data";
          }
          ?>
        </div>
      </div>
    </div>

   
  </body>
</html>