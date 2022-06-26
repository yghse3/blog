<?php
  session_start();
  include "functions/dashboard-connection.php";

//   session_start();

//   if(empty($_SESSION)){
//       header("location: login.php");
//       session_unset();
//       session_destroy();

//   }

//    function displayAllPosts(){
//        $conn = connection();

//        $postsql = "SELECT
//                    post.id AS post_id,
//                    post.title AS post_title,
//                    date.posted AS date_posted,
//                    category.id AS category_id,
//                    post.message AS post_message,
//                    account.id AS account_id
//                    FROM posts
//                    INNER JOIN categories
//                    ON 
//        "
//    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
 include "admin-menu.php";
?>




    <div class="container-fluid bg-danger text-white p-4 ps-5">
        <h2 class="display-2"><i class="fa-solid fa-user-gear me-3"></i>Dashboard</h2>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
                <div class="col text-center">
                <a href="add-post.php" class="btn btn-primary w-50"><i class="fa-solid fa-circle-plus"></i> Add Posts</a>
                </div>
               
                <div class="col text-center">
                <a href="categories.php" class="btn btn-warning text-white w-50"><i class="fa-solid fa-folder-arrow-up"></i>Add Categories</a>
                </div>

                <div class="col text-center">
                <a href="user.php" class="btn btn-success w-50"><i class="fa-solid fa-user-plus"></i> Add Users</a>
                </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <main class="container mt-5">
        <h3 class="h4 text-muted fw-bold text-uppercase">ALL POSTS</h3>
        <div class="row">
            <div class="col-9">
                <table class="table table-striped table-hover">
                    <thead class="tabledark">
                        <th>#</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>CATEGORY</th>
                        <th>DATE POSTED</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        displayAllPosts();
                        ?>
                    </tbody>
                </table>
            </div>
            <nav class="col-3">
                <div class="card bg-primary mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Posts</h3>
                        <p class="fs-4"><i class="fas fa-pencil-alt"></i> <?= countPosts($_SESSION['account_id']); ?></p>
                        <a href="posts.php" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
                
                <div class="card bg-success mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Categories</h3>
                        <p class="fs-4"><i class="far fa-folder-open"></i> <?= countCategories();?></p>
                        <a href="categories.php" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>

                <div class="card bg-warning border-5">
                    <div class="card-body text-center text-white">
                        <h3>Users</h3>
                        <p class="fs-4"><i class="fas fa-users"></i> <?= countUsers();?></p>
                        <a href="users.php" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
            </nav>
        </div>
    </main>
</body>
</html>