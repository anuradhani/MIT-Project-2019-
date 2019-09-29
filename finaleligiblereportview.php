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
        $pageNo = 30003;
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

                        <h1 class="h2 mb-2 text-gray-800">Project Eligibility Report</h1>
                        <h2 class="h4 mb-2 text-gray-800">List of Students who are Eligible to participate for the Final Evaluation </h2>


                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Registration No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact No</th>


                                    </tr>
                                </thead>
                                <?php
                               
                                $result = final_eligibility_report_show();
                                while ($row = $result->fetch_assoc()) {
                                    extract($row);
                                    echo "<tr>";
                                    echo "<td>" . $registrationNo . "</td>";
                                    echo "<td>" . $firstName . " " . $lastName . "</td>";
                                    echo "<td>" . $email . "</td>";
                                    echo "<td>" . $contactNo . "</td>";
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
