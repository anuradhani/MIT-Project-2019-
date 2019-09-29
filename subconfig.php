<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Submission</title>

        <?php
        include './include/header.php';
        ?>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php
            include './include/C_sidebar.php';
            ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <?php
                    include './include/topbar.php';
                    ?>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Submission Configuration</h1>
                            <a href="reports.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <?php
                                                if (isset($_POST['update'])){
                                                    include './model/dbconnection.php';
                                                    $i=1;
                                                    while ($i<10){
                                                        $s = 's'.$i;
                                                        $e = 'e'.$i;
                                                        $id = 'id'.$i;
                                                       
                                                        $sql = "UPDATE `subdetails` SET `sdate`='".$_POST[$s]."',`edate`='".$_POST[$e]."' WHERE `subid` ='".$_POST[$id]."';";
                                                        
                                                        $conn->query($sql);
                                                      $i++;  
                                                    }
                                                    echo 'Successfully Updated ';
                                                    
                                                    
                                                }
                                    ?>

                            <div class="table-responsive">
                                <form method="post" name="" action="subconfig.php">
                                    <input type='submit' value='Update' name='update'/>

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Submission name</th>
                                                <th>Start</th>
                                                <th>End</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './model/dbconnection.php';

                                            $sql = "SELECT * FROM `subdetails`";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                $i = 1;
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<tr>';
                                                    echo "<td>" . $i . "</td>";
                                                    echo "<td><input type='hidden' name='id" . $i  . "' value='".$row["subid"]."'/>" . $row["subname"] . "</td>";
                                                    echo "<td><input type='date' value= '" . $row["sdate"] . "' name = 's" . $i  . "'></td>";
                                                    echo "<td><input type='date' value= '" . $row["edate"] . "' name = 'e" . $i  . "'></td>";
                                                    
                                                    echo '</tr>';
                                                    $i++;
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            $conn->close();
                                            ?>

                                    </table>
                                </form>

                            </div>


                        </div>
                        <!-- End of Main Content -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Your Website 2019</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->
            </div>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

    </body>

    <?php
    include './include/footer.php';
    ?>

</html>

