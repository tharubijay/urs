<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>user registration</title>
  </head>
  <body style="background-color: aqua;">
 


    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">USER REGISTRATION SYSTEM - INSERT RECORD</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();
          ?> 
            <form action="" method="post">

           <div class="form-group">
          <table border="1">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
       
           </div>
           <div class="form-group">
               <label>Email</label>
               <input type="email" class="form-control" placeholder="Enter your email" name="email"autocomplete="off">
           </div>

                 <div class="form-group">
                  <label>Mobile No</label>
                  <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile"autocomplete="off">
                 </div>

                 Gender<div><label for "male"class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
                    <label for "female"class="radio-inline"><input type="radio" name="gender" value="female">female</label>
                  <label for "others"class="radio-inline"><input type="radio" name="gender" value="other">others</label>

                   <div class="form-group">
                      <label for="">Address.</label>
                  <input type="text"class="form-control" placeholder="Enter your address"  name="address" autocomplete="off">
                   </div>
                   </table>

             

            <div class="form-group">
              <input type="submit" id="button" class="btn btn-primary" name="submit">
              <input type="reset" id="button" class="btn btn-primary" name="Reset">
              <a href="records.php"><input type="records" value="Records" class="btn btn-primary" name="Records"></a>
              
            </div>
          </form>

        </div>
      </div>
    </div>
  
  </body>
</html>