<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>news Table</title>

        <?php
        session_start();
        if ($_SESSION['type'] != '3') {
            header("Location: logout.php");
        }
        include './include/header.php';
        include './model/viewnewstablemodel.php';

        $pageNo = 20020;
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
                        <div class="card col-md-12 shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">News</h6>
                            </div>
                            <div class="card-body">

                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Heading</th>
                                                <th>news</th>

                                            </tr>
                                        </thead>
                                        <?php
                                        $result = get_news_table();
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            echo "<tr>";
                                            echo "<td>" . $n_heading . "</td>";
                                            echo "<td>" . $news_content . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    <div id="kryesore" style="overflow-y: scroll;">
                                    </div>
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
        <!-- Scroll to Top Button-->
        <?php
        include './include/logoutmodel.php';
        ?>

        <?php
        include './include/footer.php';
        ?>

</html>
