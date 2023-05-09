<?php
include("connection.php");
$sql="SELECT * FROM `machine_new`";
$data=mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Infosky</title>
  </head>
  <body>
<style>
.custab{ border: 1px solid #ccc; padding: 5px; margin: 5% 0; box-shadow: 3px 3px 2px #ccc; transition: 0.5s; }
.custab:hover{ box-shadow: 3px 3px 0px transparent; transition: 0.5s; }
</style>
<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
        <h2>Student Table</h2>
    <div class="row col-md-12 custyle">

    <table class="table table-striped custab">
    <thead>
    <a href="add-details.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add New</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Total Marks</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
        $i=1;
        while ($result=mysqli_fetch_assoc($data)) 
        {     
    ?> 
        <tbody>
        <tr>
            <td><?php echo $i;$i++; ?></td>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['gender'] ?></td>
            <td><?php echo $result['address'] ?></td>
            <td><?php echo $result['phone'] ?></td>
            <td><?php echo $result['age'] ?></td>
            <td><?php echo $result['marks'] ?></td>
            <td><a href="edit-details.php?ep=<?php echo $result['uid'] ?>" class='btn btn-success'>Edit</a></td>
            <td><a href="delete.php?del=<?php echo $result['uid'] ?>" class="btn btn-danger">Delete</a></td>
         </tr>  
                 
        </tbody>

    <?php
    }
    ?>
    </table>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




 


