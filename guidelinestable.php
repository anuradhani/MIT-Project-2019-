<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Guidelines&Templates</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
            header("Location: logout.php");
        }
        include './include/header.php';
        include './model/viewguidelinestablemodel.php';

        $pageNo = 20009;
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
                        <div class="card col-md-12 shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Guidelines</h6>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="DataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Heading</th>
                                                <th>Guidelines</th>
                                                <th>Template</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $result = get_guideline_table();
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            echo "<tr>";
                                            echo "<td>" . $g_heading . "</td>";
                                            echo "<td>" . $g_content . "</td>";
                                            echo "<td><a href='./files/Templates/" . $g_heading . ".pdf'>" . $g_heading . ".pdf</></td>";
                                            echo "<td><a href='updateguidelines.php?id=" . $autoid . "' class='btn btn-primary btn-user btn-block'>Update</a></td>";
                                            echo "<td><a href='./model/deleteguidlines.php?id=" . $autoid . "' class='btn btn-warning btn-user btn-block'>Delete</a></td>";
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
