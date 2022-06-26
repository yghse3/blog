<?php
   require "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
 include "admin-menu.php";
?>
    <div class="container-fluid bg-warning text-white p-4 ps-5">
        <h2 class="display-2"><i class="fa-solid fa-user-pen me-3"></i>User</h2>
    </div>

    <main class="container">
        <!-- Form -->
        <div class="mx-auto w-50">
            <form action="#" method="post">
                <h3 class="display-4">Add User</h3>
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" name="first_name" id="first-name" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col">
                        <input type="text" name="last_name" id="last-name" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" name="contact_number" id="contact-number" class="form-control" placeholder="Contact Number" required>
                    </div>
                    <div class="col">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
                    </div>
                </div>
                <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Username" required>
                <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" minlength="4" required>
                <input type="password" name="conpass" id="conpass" class="form-control mb-3" placeholder="Confirm Password" minlength="4" required>
                <button type="submit" name="add" class="btn btn-warning w-100 text-uppercase text-white fw-bold">Add</button>
            </form>
            <?php
            if(isset($_POST['add'])){
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $connum = $_POST['contact_number'];
                $address = $_POST['address'];
                $username = $_POST['username'];
                
                if($_POST['password'] === $_POST['conpass']){
                    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                
                    createUser($first_name,$last_name,$connum,$address,$username,$password);
                }else{
                    echo "<p class='text-danger'>Password and Comfirm Password do not match.</p>";
                }
            }
            ?>
        </div>

        <!-- Table -->
        <table class="table table-striped my-5">
            <thead class="table-dark text-uppercase">
                <th>Account ID</th>
                <th>Fullname</th>
                <th>Contact Number</th>
                <th>address</th>
                <th>Username</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <!-- for PHP -->
                <!-- <tr>
                    <td>3</td>
                    <td>John Doe</td>
                    <td>1234567890</td>
                    <td>Budapest, Hungary</td>
                    <td>john</td>
                    <td><button class="btn btn-sm btn-warning">Update</button></td>
                    <td><button class="btn btn-sm btn-danger">Delete</button></td>
                </tr> -->
            </tbody>
        </table>
    </main>
</body>
</html>
<?php

function createUser($first_name,$last_name,$connum,$address,$username,$password){
    $conn = connection();

    
    $accounts_sql = "INSERT INTO accounts(username,password)
     VALUES('$username', '$password')";


if($conn->query($accounts_sql)){
    $user_sql = "INSERT INTO users(first_name,last_name,contact_number,address, account_id)
    VALUES('$first_name', '$last_name', '$connum', '$address','$conn->insert_id')";

   
    
    if($conn->query($user_sql)){
        header("refresh:0");
        exit;
    }else{
        die("Error in registering to accounts.$conn->error");
    }
    }else{
        die("Error in registering to users.$conn->error");
    }
}


?>