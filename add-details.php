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
        <h2>Add Student</h2>
        <a href="student-list.php" class="btn btn-primary btn-xs pull-right">View List</a>
    <div class="row col-md-6 custyle" style="margin-top: 30px;margin-bottom: 30px; margin-left: 25%;">
      
    <form action="add-detailsaction.php" method="post" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 30px;">
      <!-- <form action="student-list.php" action="add-detailsaction.php" method="post" enctype="multipart/form-data" style="border: 1px solid #ccc; padding: 30px;"> -->
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Name</label>
      <input type="name" class="form-control" id="inputEmail4" name="name" placeholder="Enter Name">
    </div>
  <div class="form-group col-md-12">
    <label for="exampleFormControlSelect1" name="gender" >Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="gender">
      <option >Select Any</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
       
    </select>
  </div> 
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Age</label>
      <input type="text" class="form-control" id="inputCity" name="age">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Roll</label>
      <input type="text" class="form-control" id="inputCity" name="roll">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Marks</label>
      <input type="text" class="form-control" id="inputCity" name="marks">
    </div>





    <div class="form-group col-md-6">
      <label for="inputCity">Phone</label>
      <input type="text" class="form-control" id="inputCity" name="phone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Email</label>
      <input type="email" class="form-control" id="inputCity" name="email">
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Photo</label>
      <input type="file" class="form-control" id="inputCity" name="photo">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Password</label>
      <input type="text" class="form-control" id="inputCity" name="Npassword">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Confirm Password</label>
      <input type="text" class="form-control" id="inputCity" name="Spassword">
    </div> 
  </div>
  <button type="submit" class="btn btn-primary">Add Details</button>
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




 


