<?php
 require "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog: Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
 include "admin-menu.php";
?>
    <div class="container-fluid bg-success text-white p-4 ps-5">
        <h2 class="display-2"><i class="fa-solid fa-folder me-3"></i>Category</h2>
    </div>

    <main class="container">
        <!-- Form -->
        <div class="w-50 mx-auto my-5">
            <form action="#" method="post">
                <div class="row">
                    <div class="col text-end">
                        <label for="category-name" class="mt-2">Add Category</label>
                    </div>
                    <div class="col">
                        <input type="text" name="category_name" id="category-name" class="form-control" required>
                    </div>
                    <div class="col">
                        <button type="submit" name="btn_add" class="btn btn-success fw-bold text-uppercase">Add</button>
                    </div>
                </div>
            </form>

            <?php
             if(isset($_POST['btn_add'])){
                $category = $_POST['category_name'];
                
                createCategory($category);
             }
            ?>
        </div>
        <!-- Table -->
        <table class="table table-striped my-5 w-50 mx-auto text-center">
            <thead class="table-dark text-uppercase">
                <th>Category ID</th>
                <th>Category Name</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <!-- for PHP -->
                <?php
                
                ?>
                <tr>
                    <td>
                    <?php
                    displayCategories();
                    ?>
                    
                    </td>
                    <td>Food & Drinks</td>
                    <td><button class="btn btn-sm btn-warning">Update</button></td>
                    <td><button class="btn btn-sm btn-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>

<?php

    function createCategory($category){
        $conn =  connection();

        $sql = "INSERT INTO categories (category_name)
                VALUES('$category')";

        if($conn->query($sql)){
            header("refresh: 0");
            exit;
        }else{
            die("Error in registering: ".$conn->error);
        }
    }
?>