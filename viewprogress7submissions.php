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
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
            header("Location: logout.php");
        }
        include './include/header.php';
        include './model/viewprogress7model.php';


        $pageNo = 20005;
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
                            <h1 class="h3 mb-0 text-gray-800">View Progress Report 7 Submissions</h1>  
                        </div>

                        <!-- Content Row -->


                        <div class="row">
                            <div class="card shadow mb-4 col-md-12">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Submission Status</h6>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="1">
                                            <thead>
                                                <tr>
                                                    <th>Registration Number</th>
                                                    <th>Submission Date</th>
                                                    <th>Download File</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $result = get_dp_list();
                                                while ($row = $result->fetch_assoc()) {
                                                    extract($row);
                                                    echo "<tr>";
                                                    echo "<td>" . $registrationNo . "</td>";
                                                    echo "<td>" . $Sub_Date . "</td>";
                                                    echo "<td><a href='./files/Progress7/" . $registrationNo . ".pdf'>" . $registrationNo . ".pdf</a></td>";

                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card shadow mb-4 col-md-12">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Download All</h6>

                                </div>

                                <div class="card-body">
                                    <form action="./files/downloadzip_p7.php" method="POST">
                                        <input type ="submit" name="zipbulk" Value="Zip"  class='btn btn-primary btn-user btn-block'/>
                                        <input type ="submit" name="downloadbulk" Value="Download"  class='btn btn-primary btn-user btn-block'/>
                                    </form>
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
            </div>
            <?php
            include './include/logoutmodel.php';
            ?>


    </body>

    <?php
    include './include/footer.php';
    ?>

</html>

