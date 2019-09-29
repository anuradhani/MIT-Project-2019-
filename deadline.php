<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>update deadlines</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
           header("Location: logout.php");
        }
        include './include/header.php';

        $pageNo = 20006;
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
                        <h1 class="h3 mb-2 text-gray-800">Update Deadlines</h1>
                        <p class="mb-4"><a target="_blank" ></a>.</p>
                        <!-- Content Row -->
                        <div class="row">
                            <?php
                            if (isset($_POST['update'])) {
                                include './model/dbconnection.php';
                                $i = 1;
                                while ($i <= 17) {
                                   
                                    $e = 'e' . $i;
                                    $id = 'id' . $i;
                                   
                                    $sql = "UPDATE `subdetails` SET `edate`='" . $_POST[$e] . "' WHERE `subid` ='" . $_POST[$id] . "';";

                                    $conn->query($sql);
                                  
                                    $i++;
                                }
                                echo "<script type='text/javascript'>window.onload = function() {if(confirm('Successfully Updated!')==true){window.location.href = 'deadline.php';};};</script> ";
                            }
                            ?>

                            <div class="table-responsive">
                                <form method="post" action="deadline.php">
                                    <input type='submit' value='Update' name='update'/>

                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Submission name</th>
                                                <th>Deadline</th>
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
                                                    echo "<td><input type='hidden' name='id" . $i . "' value='" . $row["subid"] . "'/>" . $row["subname"] . "</td>";
                                                    echo "<td><input type='date' value= '" . $row["edate"] . "' name = 'e" . $i . "'></td>";

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
                    </div> 
                </div>

                <!-- End of Main Content -->

                <!-- Footer -->
                <?php
                include './include/copyright.php';
                ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <?php
        include './include/logoutmodel.php';
        ?>


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

    </body>

</html>
