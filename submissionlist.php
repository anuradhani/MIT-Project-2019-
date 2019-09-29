<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Submissionlist</title>

        <?php
        session_start();
        if ($_SESSION['type'] != '3') {
            header("Location: logout.php");
        }
        include './include/header.php';
        include './model/studentmodel.php';


        $pageNo = 10004;
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
                            <h1 class="h3 mb-0 text-gray-800">Submissions List</h1>  
                        </div>
                        <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo "Today is " . date("Y-m-d") . "<br>"; ?>   </h6>
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
                                                    <th>Deadline</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $result = get_dealine_list();
                                                while ($row = $result->fetch_assoc()) {
                                                    extract($row);
                                                    echo "<tr>";
                                                    if (date("Y-m-d") > $edate) {
                                                        echo "<td>" . $subname . "</a></td>";
                                                    } else {
                                                        echo "<td><a href='" . $link . ".php'>" . $subname . "</a></td>";
                                                    }
                                                    echo "<td>" . $edate . "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>

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
                    </div>
                </div>
                <div>
                    <?php
                    include './include/logoutmodel.php';
                    ?>
                </div>

                </body>

                <?php
                include './include/footer.php';
                ?>

                </html>

