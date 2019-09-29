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
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
           header("Location: logout.php");
        }
        include './include/header.php';
        include './model/studentmodel.php';
        include './model/shownewsmodel.php';
        include './model/countsubmission.php';
        $pageNo = 20001;
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
                            <h1 class="h3 mb-0 text-Blue-800"><b>PROJECT INFORMATION MANAGEMENT SYSTEM</b></h1><br>
                        </div>

                        <div class="row">

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NUMBER OF STUDENTS</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo total_count(); ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Proposal Submissions</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count_submission(2); ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Dissertation Submissions</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count_submission(17); ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" onclick="location.href = 'C_chatlist.php';"> Chat with Students</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300" ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">File Submissions</h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">Draft Proposal <span class="float-right"> <?php echo ((count_submission(1) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo ((count_submission(1) / total_count()) * 100) . "%"; ?>" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Proposal <span class="float-right"><?php echo ((count_submission(2) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width:<?php echo ((count_submission(2) / total_count()) * 100) . "%"; ?>" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Interim Report <span class="float-right"><?php echo ((count_submission(3) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo ((count_submission(3) / total_count()) * 100) . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Client Agreement Form <span class="float-right"><?php echo ((count_submission(4) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo ((count_submission(4) / total_count()) * 100) . "%"; ?>" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Supervisor Agreement Form <span class="float-right"> <?php echo ((count_submission(5) / total_count()) * 100) . "%"; ?> </span></h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo ((count_submission(5) / total_count()) * 100) . "%"; ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br/>
                                        <h4 class="small font-weight-bold">Progress Report 1 <span class="float-right"><?php echo ((count_submission(6) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo ((count_submission(6) / total_count()) * 100) . "%"; ?>" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 2 <span class="float-right"><?php echo ((count_submission(7) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo ((count_submission(7) / total_count()) * 100) . "%"; ?>" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 3 <span class="float-right"><?php echo ((count_submission(8) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo ((count_submission(8) / total_count()) * 100) . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 4 <span class="float-right"><?php echo ((count_submission(9) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo ((count_submission(9) / total_count()) * 100) . "%"; ?>" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 5 <span class="float-right"><?php echo ((count_submission(10) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo ((count_submission(10) / total_count()) * 100) . "%"; ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br/>
                                        <h4 class="small font-weight-bold">Progress Report 6 <span class="float-right"><?php echo ((count_submission(11) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo ((count_submission(11) / total_count()) * 100) . "%"; ?>" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 7 <span class="float-right"><?php echo ((count_submission(12) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo ((count_submission(12) / total_count()) * 100) . "%"; ?>" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">CProgress Report 8 <span class="float-right"><?php echo ((count_submission(13) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width:<?php echo ((count_submission(13) / total_count()) * 100) . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 9 <span class="float-right"><?php echo ((count_submission(14) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo ((count_submission(14) / total_count()) * 100) . "%"; ?>" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Progress Report 10 <span class="float-right"><?php echo ((count_submission(15) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo ((count_submission(15) / total_count()) * 100) . "%"; ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br/>
                                        <h4 class="small font-weight-bold">  Tentative Dissertation <span class="float-right"><?php echo ((count_submission(16) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo ((count_submission(16) / total_count()) * 100) . "%"; ?>" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Final Dissertation <span class="float-right"><?php echo ((count_submission(17) / total_count()) * 100) . "%"; ?></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo ((count_submission(17) / total_count()) * 100) . "%"; ?>" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <a href="editnews.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> news </a>
                                        <a href="newstable.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>View All </a>
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
