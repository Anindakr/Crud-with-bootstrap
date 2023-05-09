<?php
//session_start();
include("connection.php");
$id=$_REQUEST['ep'];
$sql="SELECT * FROM `machine_new` WHERE uid='$id'";
$data=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);

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

<!------ Include the above in your HEAD tag ---------->
<div class="container">
        <h2>Edit Student</h2>
        <a href="student-list.php" class="btn btn-primary btn-xs pull-right">View List</a>
    <div class="row col-md-6 custyle" style="margin-top: 30px;margin-bottom: 30px; margin-left: 25%;">

      
   <!--  <form action="student-list.html" style="border: 1px solid #ccc; padding: 30px;"> -->
        <form action="edit-detailsaction.php" method="post" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 30px;">

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Name" name="name" value="<?php echo $result['name'] ?>">
    </div>
    <input type="text" name="uid" value="<?php echo $id ?>" hidden>
  <div class="form-group col-md-12">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="gender">
      <option >Select Any</option>
      <option <?php if($result['gender']=='male') {echo "selected";} ?> >Male</option>
      <option <?php if($result['gender']=='female') {echo "selected";} ?>>Female</option> 
    </select>
  </div> 
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="name" value="<?php echo $result['address'] ?>">
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Age</label>
      <input type="text" class="form-control" id="inputCity" name="age" value="<?php echo $result['age'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Roll</label>
      <input type="text" name="roll" class="form-control" id="inputCity" value="<?php echo $result['roll'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Marks</label>
      <input type="text" name="marks" class="form-control" id="inputCity" value="<?php echo $result['marks'] ?>">
    </div>





    <div class="form-group col-md-6">
      <label for="inputCity">Phone</label>
      <input type="text" name="phone" class="form-control" id="inputCity" value="<?php echo $result['phone'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Email</label>
      <input type="text" name="email" class="form-control" id="inputCity" value="<?php echo $result['email'] ?>">
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Photo</label>
      <input type="file" name="photo" class="form-control" id="inputCity" value="<?php echo $result['photo'] ?>">
    </div>
  </div>
  <!-- <div class="form-group">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxhtmBqlJilp6X2q2XsYxJ9DVYb_F8x17DjIOJcHtT&s" style="margin:15px; width: 180px; height: 100px;">
      <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Delete Image
      </label>
    </div> --> 
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <!-- <label for="inputCity">Password</label>
      <input type="text" name="Npassword" class="form-control" id="inputCity" value="<?php echo $result['Npassword'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Confirm Password</label>
      <input type="text" name="Spassword" class="form-control" id="inputCity" value="<?php echo $result['Spassword'] ?>"> -->
    </div> 
  </div>
  <button type="submit" class="btn btn-primary">Update Details</button>
</form>


    </div>
</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>