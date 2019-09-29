<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <?php
        session_start();
        if ($_SESSION['type'] != '3') {
            header("Location: logout.php");
        }
        include './include/header.php';
        include './model/shownewsmodel.php';

        $pageNo = 10001;
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
                            <h1 class="h3 mb-0 text-Blue-800"><b> PROJECT INFORMATION MANAGEMENT SYSTEM </b></h1><br>
                        </div>


                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->


                            <div class="card shadow col-lg-8 col-md-8 mb-8">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Submission Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Submission Name</th>
                                                    <th>Submission Deadlines</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $result = show_deadline_student();
                                                $nu = 1;
                                                while ($row = $result->fetch_assoc()) {
                                                    extract($row);
                                                    echo "<tr>";
                                                    echo "<td>" . $nu . ". " . $subname . "</td>";
                                                    echo "<td>" . $edate . "</td>";
                                                    echo "<td><a href='" . $link . ".php'  class='btn btn-primary btn-user btn-block'>View</a></td>";
                                                    echo "</tr>";
                                                    $nu++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="kryesore" style="overflow-y: scroll;">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4 mb-2">
                                <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-2">
                                        <h6 class="m-0 font-weight-bold text-primary"> General News</h6>
                                    </div>
                                    <div class="card-body"> 
                                        <?php
                                        $result = get_news();
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            echo "<div  class='col-lg-12 card shadow mb-12'>";
                                            echo "<div class='card-header py-3'>";
                                            echo "<h6 class='m-0 font-weight text-primary'>" . $n_heading . "</h6>";
                                            echo "</div>";
                                            echo "<div class='card-body'>";
                                            echo "<p>" . $news_content . "</p>";
                                            echo "<p>" . $news_dateNtime . "</p>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "<hr>";
                                        }
                                        ?>

                                        <a href="stunewstable.php"></i>See All </a>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">   

                            </div>

                        </div>

                    </div>
                    <!-- /.container-fluid -->

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

    </body>

    <?php
    include './include/footer.php';
    ?>

</html>
