<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: Admin Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> -->
<!-- <body> -->
<!-- 
<?php
//   require "connection.php";
//   session_start();

//   function displaySpecificCategory($category_id){
//     $conn = connection();
    
//     $sql = "SELECT 
//     category.id AS category_id,
//     category.name AS category_name
//      FROM categories INNER JOIN posts ON post.id = category.id WHERE category.id = '$category_id'";

//     if($result = $conn->query($sql)){
//         return $result->fetch_assoc();
//     }else{
//         die("Error in retrieving product: ".$conn->error);
//     }
// }

// function getCategories(){
//     $conn = connection();
//    $sql = "SELECT * FROM categories";

//    if($result = $conn->query($sql)){
//       while($row = $result->fetch_assoc()){
//           $categories[]= $row;
//       }
//       return $categories;
//    }else{
//        die("Error in retrieving the sections: ".$conn->error);
//    }
// }

// $category_list = getCategories();


?> -->




    <nav class="navbar navbar-expand-lg bg-dark navbar-dark px-5">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="dashboard.php"  class="nav-link text-white">Dashboard</a></li>
            <li class="nav-item"><a href="user.php"  class="nav-link text-white">Users</a></li>
            <li class="nav-item"><a href="posts.php"  class="nav-link text-white">Posts</a></li>
            <li class="nav-item"><a href="categories.php"  class="nav-link text-white">Categories</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="profile.php" class="nav-link text-white"><i class="fa-solid fa-user me-1"></i>Welcome <?= $_SESSION['username']?></a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white"><i class="fa-solid fa-user me-1"></i>Logout</a></li>
        </ul>
    </nav>
<!-- </body> -->
<!-- </html> -->