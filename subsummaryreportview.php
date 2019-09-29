<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Final Eligible Report View</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
           header("Location: logout.php");
        }
        include './include/header.php';
        include './model/studentmodel.php';
        include './model/submission_reportmodel.php';
        $pageNo = 30004;
        ?>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div>



            <!-- Content Wrapper -->
            <div class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">


                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->

                        <h1 class="h2 mb-2 text-gray-800">Submission Summary</h1>
                        <h2 class="h4 mb-2 text-gray-800">Submission summary of Students</h2>


                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Registration No</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>DP</th>
                                        <th>Pro</th>
                                        <th>Ir</th>
                                        <th>Caf</th>
                                        <th>Saf</th>
                                        <th>Pr1</th>
                                        <th>Pr2</th>
                                        <th>Pr3</th>
                                        <th>Pr4</th>
                                        <th>Pr5</th>
                                        <th>Pr6</th>
                                        <th>Pr7</th>
                                        <th>Pr8</th>
                                        <th>Pr9</th>
                                        <th>Pr10</th>
                                        <th>Td</th>
                                        <th>Fd</th>

                                    </tr>
                                </thead>
                                <?php
                               
                                $result = submission_summary_report_show();
                                while ($row = $result->fetch_assoc()) {
                                    extract($row);
                                    echo "<tr>";
                                    echo "<td>" . $registrationNo . "</td>";
                                    echo "<td>" . $email . "</td>";
                                    echo "<td>" . $contactNo . "</td>";
                                    echo "<td>" . $dp . "</td>";
                                    echo "<td>" . $pro . "</td>";
                                    echo "<td>" . $ir . "</td>";
                                    echo "<td>" . $caf . "</td>";
                                    echo "<td>" . $saf . "</td>";
                                    echo "<td>" . $pr1 . "</td>";
                                    echo "<td>" . $pr2 . "</td>";
                                    echo "<td>" . $pr3 . "</td>";
                                    echo "<td>" . $pr4 . "</td>";
                                    echo "<td>" . $pr5 . "</td>";
                                    echo "<td>" . $pr6 . "</td>";
                                    echo "<td>" . $pr7 . "</td>";
                                    echo "<td>" . $pr8 . "</td>";
                                    echo "<td>" . $pr9 . "</td>";
                                    echo "<td>" . $pr10 . "</td>";
                                    echo "<td>" . $td . "</td>";
                                    echo "<td>" . $fd . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                            <div id="kryesore" style="overflow-y: scroll;">
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->


                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <?php
            include './include/logoutmodel.php';
            ?>


            <!-- Bootstrap core JavaScript-->
            <?php
            include './include/footer.php';
            ?>
        </div>

    </body>
</html>
