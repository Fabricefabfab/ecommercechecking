<?php

 include './Model/conn.php';

 if(isset($_POST['done'])){

 $pid = $_GET['pid'];
 $pname = $_POST['pname'];
 $pphoned = $_POST['pphoned'];
 $q = " update phonebook set pid=$pid, pname='$pname', pphoned='$pphoned' where pid=$pid  ";

 $query = mysqli_query($conn,$q);

 header('location:index.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update From the database</h1>
 </div><br>

 <label>pname: </label>
 <input type="text" name="pname" class="form-control"> <br>

 <label> pphoned: </label>
 <input type="text" name="pphoned" class="form-control"> <br>
 <button class="btn btn-success" type="submit" name="done"> update</button><br>

 
 </div>
 </form>
 </div>
</body>
</html>
