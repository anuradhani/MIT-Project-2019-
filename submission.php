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
        include './include/header.php';

        include './model/countsubmission.php';
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
                            <h1 class="h3 mb-0 text-gray-800">Submissions</h1>  
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
                                                    <th>Submission Links</th>
                                                    <th>Submission Count</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewdpsubmissions.php"> Draft Proposal Submission</a></td>
                                                    <td align="center"><?php echo count_submission(1); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewproposal_submissions.php"> Proposal Submission</a></td>
                                                    <td align="center"><?php echo count_submission(2); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewir_submissions.php"> Interim Report Submission</a></td> 
                                                    <td align="center"><?php echo count_submission(3); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewcaf_submissions.php"> Client Agreement Form Submission</a></td>
                                                    <td align="center"><?php echo count_submission(4); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewsaf_submissions.php"> Supervisor Agreement Form Submission </a></td>
                                                    <td align="center"><?php echo count_submission(5); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress1submissions.php">Progress Report 01 </a></td>
                                                    <td align="center"> <?php echo count_submission(6); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress2submissions.php">Progress Report 02 </a></td>
                                                    <td align="center"> <?php echo count_submission(7); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress3submissions.php">Progress Report 03 </a></td>
                                                    <td align="center"> <?php echo count_submission(8); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress4submissions.php">Progress Report 04 </a></td>
                                                    <td align="center"><?php echo count_submission(9); ?> </td>

                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress5submissions.php">Progress Report 05 </a></td>
                                                    <td align="center"><?php echo count_submission(10); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress6submissions.php">Progress Report 06 </a></td>
                                                    <td align="center"> <?php echo count_submission(11); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress7submissions.php">Progress Report 07 </a></td>
                                                    <td align="center"> <?php echo count_submission(12); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress8submissions.php">Progress Report 08 </a></td>
                                                    <td align="center"> <?php echo count_submission(13); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress9submissions.php">Progress Report 09 </a></td>
                                                    <td align="center"><?php echo count_submission(14); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewprogress10submissions.php">Progress Report 10 </a></td>
                                                    <td align="center"> <?php echo count_submission(15); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewtd_submissions.php">Tentaive Dissertation </a></td>
                                                    <td align="center"><?php echo count_submission(16); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><a rel="nofollow" href="viewfd_submissions.php"> Final Dissertation  </a></td>
                                                    <td align="center"><?php echo count_submission(17); ?></td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
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

