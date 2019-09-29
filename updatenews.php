<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Update News</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
           header("Location: logout.php");
        }
        include './include/header.php';
        include './model/viewnewstablemodel.php';


        $pageNo = 20002;
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

                   
                        <div class="row">
                            <div class="col-lg-12"> 
                                <div class="p-6">
                                    <?php
                                    $row = show_news($_GET['id']);
                                    if ($row != NULL) {
                                        extract($row);
                                        ?>
                                     <form action="./model/newsupdatemodel.php" method="post" enctype="multipart/form-data">  
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2">Heading</label>
                                        <div class="col-lg-12 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="n_heading" required  value="<?php echo $n_heading; ?>">
                                            <input type="hidden" class="form-control form-control-user" name="id" required  value="<?php echo $_GET['id']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2">Update News</label>
                                        <input type="text" class="form-control form-control-user" name="news_content" required  value="<?php echo $news_content; ?>">
                                    </div>
                                        <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" value="Update" name="submit">
                                   </form>  
                                    <?php } ?>
                            </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <hr>
                    <!-- /.container-fluid -->


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
        <!-- Scroll to Top Button-->
        <?php
        include './include/logoutmodel.php';
        ?>

        <?php
        include './include/footer.php';
        ?>

</html>
