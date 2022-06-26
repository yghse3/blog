<?php
  require "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    include "admin-menu.php";
    ?>



    <div class="w-100 bg-primary text-white p-4 ps-5">
        <h2 class="display-2"><i class="fa-solid fa-pen-nib me-3"></i>Post</h2>
     </div>

 <div class="container">
        
        <div class="row mt-5 mx-auto float-end">
        
            <a href="add-post.php" class="btn btn-muted border-dark"><h3><i class="fa-solid fa-square-pen"></i> Add Post</h3></a>
            
        </div>
</div>

</body>
</html>