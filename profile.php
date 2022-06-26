<?php
 require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include "admin-menu.php";
    ?>

    <div class="container-fluid bg-secondary text-white p-4 ps-5">
        <h2 class="display-2"><i class="fa-solid fa-user me-3"></i>Profile</h2>
    </div>
    
    <!-- Button -->
    <div class="container-fluid bg-light p-5">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary col-6 d-block ms-auto text-truncate" href="change-password.php">
                    <i class="me-1 fas fa-lock"></i> Change Password
                </a>
            </div>
            <div class="col">
                <a class="btn btn-danger col-6 d-block me-auto text-truncate" href="delete-account.php">
                    <i class="me-1 fas fa-trash-alt"></i> Delete Account
                </a>
            </div>
        </div>
    </div>

    <main class="container">
        <!-- Form -->
        <form action="#" method="#">
            <div class="row">
                <div class="col-8 px-5">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="first-name" class="form-label small">First Name</label>
                            <input type="text" name="first-name" id="first-name" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label small">Last Name</label>
                            <input type="text" name="last-name" id="last-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label for="address" class="form-label small">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="contact-number" class="form-label small">Contact Number</label>
                            <input type="text" name="contact-number" id="contact-number" class="form-control" required>
                        </div>
                    </div>
                    <label for="username" class="form-label small">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-3" required>
                    <label for="password" class="form-label small">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password to confirm" required>
                    <button type="submit" class="btn btn-primary text-uppercase w-100 mt-4">Update</button>
                </div>
                <div class="col-4">
                    <img src="https://i.scdn.co/image/ab6761610000e5ebcdce7620dc940db079bf4952" alt="Ariana Grande" class="w-100 h-75 mb-2">
                    <input type="file" name="avatar" id="avatar" class="form-control">
                </div>
            </div>
        </form>
    </main>
    
</body>
</html>