<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>profile</title>

        <?php
        session_start();
        include './include/header.php';
        include './model/studentprofilemodel.php';
        $regno = $_SESSION['resgistrationNo'];
        $pageNo = 10002;
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
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Edit Your Profile</h1>
                        <div class="row">


                        </div> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-3">
                                    <?php
                                    $result = get_studentdetails($regno);
                                    if ($result) {
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            ?>
                                            <form class="user" method="GET" action="./model/studnetprofilemodel.php" name = "form1">
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <lable>FirstName</lable>
                                                        <input type="text" class="form-control form-control-user" name="FirstName" value="<?php echo $firstName; ?>">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <lable>LastName</lable>
                                                        <input type="text" class="form-control form-control-user" name="LastName" value="<?php echo $lastName; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <lable>NIC</lable>
                                                        <input type="text" class="form-control form-control-user" name="NIC" value="<?php echo $nic; ?>">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <lable>Attempt</lable>
                                                        <input type="text" class="form-control form-control-user" name="Attempt" value="<?php echo $attempt; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <lable>Registration Number</lable>
                                                        <input type="text" class="form-control form-control-user" name="Registration Number" value="<?php echo $registrationNo; ?>">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <lable>Index Number</lable>
                                                        <input type="text" class="form-control form-control-user" name="Index Number" value="<?php echo $indexNo; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <lable>Email</lable>
                                                        <input type="email" class="form-control form-control-user" name="InputEmail" value="<?php echo $email; ?>">
                                                    </div>


                                                </div>

                                            </form>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
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
