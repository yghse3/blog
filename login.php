<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <main class="container">
            <div class="card mx-auto w-50 border-0">
                <div class="card-header border-0 bg-white">
                    <h1 class="text-center text-uppercase mb-4">Login</h1>
                </div>
                <div class="card-body">
                    <input type="text" name="username" id="username" class="form-control mb-4" placeholder="USERNAME" required>
                    <input type="password" name="password" id="password" class="form-control mb-5" placeholder="PASSWORD" required>
                    <button type="submit" name="btn_login" class="btn btn-success text-uppercase w-100 py-2">Enter</button>
                </div>
                <div class="card-footer border-0 bg-white">
                    <div class="row">
                        <div class="col text-center">
                            <a href="register.php">Create an Account</a>
                        </div>
                        <div class="col text-center">
                            <h6><a href="#">Recover Account</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>

</body>

<?php
    if(isset($_POST['btn_login'])){
       $username = $_POST['username'];
       $password = $_POST['password'];

       login($username, $password);
    }
    ?>
</html>


<?php
    function login($username, $password){
        $conn = connection();

        $sql = "SELECT * FROM accounts WHERE username = '$username'";

        $result = $conn->query($sql);

        // CHECK IF RECORD/USERNAME EXISTS
        if($result->num_rows == 1){
            $account_details = $result->fetch_assoc();
        if(password_verify($password, $account_details['password'])){
           
            // SESSIONS ~~ temporary data storage which can be accessed in multiple pages ~~ usually used for logged in accounts

            session_start();

            $_SESSION['account_id'] = $account_details['account_id'];
            $_SESSION['username'] = $account_details['username'];

            header("location: dashboard.php");
            exit;
        }else{
            echo "<p class='text-danger small'>Password is incorrect.</p>";
        }
    }else{
        echo "<p class='text-danger small'>Username is not found.</p>";
    }
    }
?>