<?php
include_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard-Add New Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    

<h1 style = "text-align : center;" > Welcome To Our New Students Page</h1>


<form action="#" method="POST" >
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="txtname"  aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" name="txtemail" required >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Course</label>
    <input type="text" class="form-control" name="txtcourse" aria-describedby="emailHelp" required>
  </div>
 


  
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>



</body>
</html>

<?php
if(isset($_POST["submit"])){
    // error_reporting(0);
    $Name = $_POST['txtname'];
    $Email = $_POST['txtemail'];
    $Course = $_POST['txtcourse'];
   

    $conn = mysqli_connect("localhost", "root", "", "education");         //hostname username password databasename
    if (!$conn) {
        echo "connection refuse";
    }

    // $query = "insert into teachers values (null,'$Name',$Expertise,'$Experience','$Picture')";
    $query = "INSERT INTO `newstudent`(`ID`, `Name`, `Email`, `Course`) VALUES (null,'$Name','$Email','$Course')";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        echo "query not exectired";
    } else {
        echo "query sucess";
        
    }
    // header('Location:addteacher.php');
  }
?>