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
        if($_SESSION['type']!='3'){
             header("Location: logout.php");
        }
        include './include/header.php';
        include './model/studentmodel.php';
        ?>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php
            include './include/C_sidebar.php';
            ?>


            <!-- Content Wrapper -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <?php
                    include './include/topbar.php';
                    ?>

                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Edit Student Profile</h1>
                        <p class="mb-4"><a target="_blank" ></a>.</p>
                        <div class="row">


 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <div id="profile-container">
   <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
  <image id="profileImage" align="center" src="img/user.png"/>
  </div> -->         
                        </div> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <?php
                                    $row = get_student($_GET['id']);
                                    if ($row != NULL) {
                                        extract($row);
                                        ?>
                                    <form class="user" method="POST" action="./model/updatestudentmodel.php" name = "form1">
                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <lable>FirstName</lable>
                                                    <input type="text" class="form-control form-control-user" name="firstName" value="<?php echo $firstName; ?>">
                                                 <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>">
                                              
                                                </div>
                                                <div class="col-sm-8">
                                                    <lable>LastName</lable>
                                                    <input type="text" class="form-control form-control-user" name="lastName" value="<?php echo $lastName; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <lable>NIC</lable>
                                                    <input type="text" class="form-control form-control-user" name="nic" value="<?php echo $nic; ?>">
                                                </div>
                                                <div class="col-sm-8">
                                                    <lable>Contact No</lable>
                                                    <input type="text" class="form-control form-control-user" name="contactNo" value="<?php echo $contactNo; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <lable>Registration Number</lable>
                                                    <input type="text" class="form-control form-control-user" name="registrationNo" value="<?php echo $registrationNo; ?>">
                                                </div>
                                                <div class="col-sm-8">
                                                    <lable>Index Number</lable>
                                                    <input type="text" class="form-control form-control-user" name="indexNo" value="<?php echo $indexNo; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <lable>Email</lable>
                                                    <input type="email" class="form-control form-control-user" name="email" value="<?php echo $email; ?>">
                                                </div>


                                            </div>
                                            <div>
                                                <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" value="Update" name="submit">
                                            </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="d-sm-flex align-items-left justify-content-between mb-4">

                                            <a href="forgot-password.php?id=".$autoId."class="btn btn-primary btn-user btn-block"> Reset Password </a>
                                        </div>

                                    </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- /.container-fluid -->

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


</body>

<?php
include './include/footer.php';
?>

</html>
