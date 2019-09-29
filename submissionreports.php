<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Submission Report</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
           header("Location: logout.php");
        }
        include './include/header.php';
        include './model/studentmodel.php';
        include './model/submission_reportmodel.php';
        $pageNo = 20003;
        ?>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php
            include './include/C_sidebar.php';
            $pageNo = 20012;
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

                        <h1 class="h3 mb-2 text-gray-800">Submission Report</h1>

                        <form method="POST" action="submissionreportsview.php" name = "form" target="_blank">

                            Report Type : 
                            <select name="subtype">
                                <?php
                                $result1 = get_submission_list();
                                while ($row1 = $result1->fetch_assoc()) {
                                    extract($row1);
                                    echo "<option value='" . $subid . "'>" . $subname . "</option>";
                                }
                                ?>
                            </select>
                            <input type="submit" value="Generate Report"/>

                        </form>

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2019</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

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

</html>
