<?php
   require "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
     <div class="card w-25 mx-auto mt-5">
         <div class="card-header bg-muted">
             <h1 class="text-center">REGISTRATION</h1>
         </div>
         <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                            <label for="First Name" class="form-label">First Name*</label>
                            <input type="text" name="firstname" class="form-contorol w-100 rounded" id="firstname" required>
                            </div>
                            <div class="col-6">
                            <label for="Last Name" class="form-label">Last Name*</label>
                            <input type="text" name="lastname" class="form-contorol w-100 rounded" id="lastname" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                            <label for="Adress" class="form-label">Adress</label>
                            <input type="text" name="Adress" class="form-contorol w-100 rounded" id="Adress" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                            <label for="Contact Number" class="form-label">Contact Number*</label>
                            <input type="number" name="ConNum" class="form-contorol w-100 rounded" id="ConNum" required>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col">
                                <label for="Username*" class="form-label">Username*</label>
                                <input type="text" name="Username" class="form-contorol w-100 rounded" id="Username" required>
                                
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <div class="col">
                                <label for="Password*" class="form-label">Password*</label>
                                <input type="password" name="Password" class="form-contorol w-100 rounded" id="Password" required>
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <div class="col">
                                <label for="Confirm Password*" class="form-label">Confirm Password*</label>
                                <input type="password" name="ConPass" class="form-contorol w-100 rounded" id="Password" required>
                            </div>
                        </div>
             
         </div>
         
         <div class="card-footer">
             <button type="submit" name="registration" value="registration" class="btn btn-dark btn-sm float-start">REGISTER</button>
             <a href="#" class="float-end">Sign in</a>
         </div>

     </div>
    </form>
    <?php
      if(isset($_POST['registration'])){
          $first_name = $_POST['firstname'];
          $last_name = $_POST['lastname'];
          $adress = $_POST['Adress'];
          $connum = $_POST['ConNum'];
          $username = $_POST['Username'];


          if($_POST['Password'] ===$_POST['ConPass']){
              $password = password_hash($_POST['Password'],PASSWORD_DEFAULT);

              register($first_name,  $last_name, $adress, $connum, $username, $password);
          }else{
              echo "<p class='text-danger'>Password and Comfirm Password do not match.</p>";
          }
      }
    ?>

</body>
</html>

<?php

function register($first_name,  $last_name, $adress, $connum, $username, $password){
    $conn = connection();

    $accounts_sql = "INSERT INTO accounts(username, password)
    VALUES('$username', '$password')";

   if($conn->query($accounts_sql)){
    // $conn->insert_id ~~ it will use the last generated ID from the previous table
    $users_sql = "INSERT INTO users(first_name, last_name, contact_number, address, account_id)
    VALUES('$first_name', '$last_name', '$connum', '$adress', '$conn->insert_id')";

    if($conn->query($users_sql)){
        header("location: login.php");
        exit;
    }else{
        die("Error in inserting to users .$conn->error");
    }
  }else{
      die("Error in inserting to accounts: .$conn->error");
  }
}
?>