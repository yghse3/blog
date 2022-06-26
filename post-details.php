<?php
  require "connection.php";
  session_start();

  function displaySpecificCategory($category_id){
    $conn = connection();
    
    $sql = "SELECT 
    category.id AS category_id,
    category.name AS category_name
     FROM categories INNER JOIN posts ON post.id = category.id WHERE category.id = '$category_id'";

    if($result = $conn->query($sql)){
        return $result->fetch_assoc();
    }else{
        die("Error in retrieving product: ".$conn->error);
    }
}

function getCategories(){
    $conn = connection();
   $sql = "SELECT * FROM categories";

   if($result = $conn->query($sql)){
      while($row = $result->fetch_assoc()){
          $categories[]= $row;
      }
      return $categories;
   }else{
       die("Error in retrieving the sections: ".$conn->error);
   }
}

$category_list = getCategories();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container-fluid bg-primary text-white p-4 ps-5">
        <h2 class="display-2"><i class="fa-solid fa-pen-nib"></i> Post details</h2>
    </div>


<div class="container mt-5">
        <div class="card w-25 mx-auto">
            <div class="card-header border-none">
                <h2 class="fw-bold mb-0"><i class="fa-thin fa-asterisk"></i> Post details</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="title" class="form-label">Test2</label>
                            <input type="text" name="title" id="title" class="form-control" value="" required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                    </div>
​
                    <div class="row mb-3">
                        <div class="col">
                            <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                <option hidden>Select Category:</option>
                                <?php
                                foreach($category_list as $category){
                                    ?>
                                }
                                <option value="<?= $category['category_id']?>"><?= $category['category_name']?></option>
                                <?php
                                }
                                ?>
                                
                                </select>
                        </div>
                    </div>
​
                    <div class="row mb-3">
                        <div class="col">
                            <label for="" class="form-label">Message</label>
                            <textarea name="message" id="message" row="8" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="author" class="form-label">Author</label>
                            <input name="author" id="author" class="form-control" value="<?= $_SESSION['username']?>" disabled>
                          
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <a href="edit-post.php"><button type="submit" class="btn btn-primary" name="add_post">Edit Post</button></a>
                            </div>
                            <div class="col">
                            <a href="post-details.php"><button type="submit" class="btn btn-primary" name="post_details">All Posts</button></a>
                        </div>
                    </div>
                </form>
                
               



            </div>
        </div>
    </div>
</body>
</html>