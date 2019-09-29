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
        $stureg = $_SESSION['resgistrationNo'];
        
        if($_SESSION['type']!='3'){
             header("Location: logout.php");
        }
        include './include/header.php';
        include './model/issubmitted.php';
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
                        <div class="d-sm-flex align-items-left justify-content-between mb-3">
                            <h1 class="h3 mb-0 text-gray-800">Final Dissertation Submission</h1>
                            <a href="submissionlist.php"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Back </a>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <div class="card shadow mb-2">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-primary">Submission Status</h6>
                                </div>
                               <div class="card-body">
                                    <div class="table-responsive"></div>
                                    <?php
                                    $result = isfdsubmitted($stureg);
                                    if ($result) {
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            $count1 = $count;
                                            ?>
                                            <table class="table" width="100%" cellspacing="0">
                                               
                                                <tbody>
                                                  
                                                    <tr>
                                                        <td>Submission Date:</td>
                                                        <td> <?php echo $Sub_Date; ?>        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Submission comments:</td>
                                                        <td>              </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row"> 
                            
                            <br>

                            <form action="./model/fdsubmitmodel.php" method="post" enctype="multipart/form-data">      
                                Select File to Upload:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload File" name="submit" <?php if($count1>0){ echo 'disabled';} ?>>
                            </form>

                        </div>
                    </div>
                    <!-- End of Main Content -->
                    <br>
                    <!-- Footer -->
                   <?php
                    include './include/copyright.php';
                    ?>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <?php
            include './include/logoutmodel.php';
            ?>



    </body>

    <?php
    include './include/footer.php';
    ?>

</html>

