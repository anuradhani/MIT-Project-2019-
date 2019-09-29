<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>guidlines</title>

        <?php
        session_start();
        include './include/header.php';
        include './model/showguidelinemodel.php';
        $pageNo = 10003;
        ?>
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php
            include './include/sidebar.php';
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
                            <h1 class="h3 mb-0 text-gray-800"> INDIVIDUAL PROJECT(BIT 6102) </h1>
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <h4 class="m-0 font-weight-bold text-primary">Project Guidelines </h4>
                        </div>
                        <br/>
                        <div class="row">

                            <br/>
                            <?php
                            $result = show_guidelines();
                            while ($row = $result->fetch_assoc()) {
                                extract($row);
                                echo "<div  class='col-lg-12  card shadow mb-12'>";
                                echo "<div class='card-header py-3'>";
                                echo "<h5 class='m-0 font-weight-bold text-primary'>" . $g_heading . "</h5>";
                                echo "</div>";
                                echo "<div class='card-body'>";
                                echo "<p>" . $g_content . "</p>";
                                echo "<p>File : <a href='./files/Templates/" . $g_heading . ".pdf'>Download</a></p>";
                                echo "<p>" . $g_dateNtime . "</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "<hr>";
                            }
                            ?>


                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                            </div>
                            <!-- /.container-fluid -->

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
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <?php
                include './include/logoutmodel.php';
                ?>

                </body>

                <?php
                include './include/footer.php';
                ?>

                </html>
