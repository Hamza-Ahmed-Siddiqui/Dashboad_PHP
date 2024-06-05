
<?php
include_once("conn.php");

 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Courses</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
 
    <body class="sb-nav-fixed">
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
 
                <a href="#">
            <button class="btn btn-success mb-5">Add New</button>
                </a>
 
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              Course
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                            <th>Id</th>
                                            <th>Course Name</th>
                                            <th>Teacher Name</th>
                                            <th>Ratting</th>
                                            <th>Duration</th>
                                            <th>Lectures</th>
                                            <th>Skill Level</th>
                                            <th>Language</th>
                                            <th>Price</th>
                                            <th>Picture</th>
 
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Course Name</th>
                                            <th>Teacher Name</th>
                                            <th>Ratting</th>
                                            <th>Duration</th>
                                            <th>Lectures</th>
                                            <th>Skill Level</th>
                                            <th>Language</th>
                                            <th>Price</th>
                                            <th>Picture</th>
 
                                        </tr>
                                    </tfoot>
                                    <tbody>
 
                                    <?php
                                            $query = "SELECT * FROM `course`";
                                            $result = mysqli_query($conn,$query);  
                                            if(mysqli_num_rows($result)){
                                                    while($row = mysqli_fetch_array($result)){
 
                                    ?>
 
                                        <tr>
                                            <td><?php echo $row[0];?></td>
                                            <td><?php echo $row[1];?></td>
                                            <td><?php echo $row[2];?></td>
                                            <td><?php echo $row[3];?></td>
                                            <td><?php echo $row[4];?></td>
                                            <td><?php echo $row[5];?></td>
                                            <td><?php echo $row[6];?></td>
                                            <td><?php echo $row[7];?></td>
                                            <td><?php echo $row[8];?></td>
                                            <td><img src="./course/<?php echo $row[9];?>" width="200px";></td>
 
                                        </tr>
                                        <?php
 
                                        }
                                        }                                     
                                        ?>
 
                                    </tbody>



 
                                </table>
                            </div>
                        </div>
              
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
 