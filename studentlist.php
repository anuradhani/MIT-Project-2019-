<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Student List</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
            header("Location: logout.php");
        }
        //if ($_SESSION['userLevel'] != 1 || $_SESSION['userLevel'] != 2) {
        //  session_destroy();
        //header("Location:http://localhost/bitsms/index.php");
        // }
        include './include/header.php';
        include './model/studentmodel.php';


        $pageNo = 20003;
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

                        <h1 class="h3 mb-2 text-gray-800">Student List</h1>
                        <p class="mb-4"><a target="_blank" ></a>.</p>
                        <div class="row">
                            <table>
                                <div class="col-lg-12">
                                    <div class="p-4">
                                        <form action="./model/excelupload.php" method="post" enctype="multipart/form-data" align="center">       
                                            Select CSV File to Upload:
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                            <input type="submit" value="Upload File" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" name="submit">
                                        </form> 

                                    </div>
                                </div>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Registration No</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Edit Profile </th>
                                        <th>Delete Profile </th>
                                    </tr>
                                </thead>
                                <?php
                                $result = get_student_list();
                                while ($row = $result->fetch_assoc()) {
                                    extract($row);
                                    echo "<tr>";
                                    echo "<td>" . $firstName . " " . $lastName . "</td>";
                                    echo "<td>" . $registrationNo . "</td>";
                                    echo "<td>" . $email . "</td>";
                                    echo "<td>" . $contactNo . "</td>";
                                    echo "<td><a href='edit_profile.php?id=" . $autoId . "' class='btn btn-primary btn-user btn-block'>Edit Profile</a></td>";
                                    echo "<td><a href='./model/deletestudent.php?id=" . $autoId . "' class='btn btn-warning btn-user btn-block'>Delete</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                            <div id="kryesore" style="overflow-y: scroll;">
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <br>
                    <?php
                    include './include/copyright.php';
                    ?>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

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
