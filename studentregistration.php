<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script>
            function validateregistartionform() {
                var FirstName = document.form1.FirstName.value;
                //var password = document.form1.password.value;

                if (FirstName === null || FirstName === "") {
                    alert("Please Fill The FirstName");
                    return false;
                }
                // else if (password === null || password === "") {
                //     alert("password can't be blank");
                //    return false;
                // } 


            }
        </script> 


        <title>Student Registration</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
            header("Location: logout.php");
        }
        include './include/header.php';


        $pageNo = 20004;
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

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Student Registration </h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register New Student!</h1>
                                    </div>
                                    <form class="user" name = "form1" method="POST" action="./model/studentregistrationmodel.php">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="FirstName" placeholder="First Name" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="LastName" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="NIC" placeholder="NIC" required maxlength="12">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control form-control-user" name="Attempt" placeholder="Attempt" required max="99">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="InputEmail" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="RegistrationNo" placeholder="Registration Number" required maxlength="8">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="number" class="form-control form-control-user" name="IndexNo" placeholder="Index Number" maxlength="8">
                                            </div>
                                        </div>
                                        <!--<div class="form-group row">
                                          <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="text" class="form-control form-control-user" name="Password" placeholder="Password">
                                           </div>
                                           <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="text" class="form-control form-control-user" name="ConfirmPassword" placeholder="ConfirmPassword">
                                           </div>
                                       </div>-->
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="number" class="form-control form-control-user" name="contactNo" placeholder="Contact Number" maxlength="10" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="submit" class="btn btn-primary btn-user btn-block" name="studentreg" onclick="return validateregistrationform()" >
                                            </div>
                                        </div>

                                        <hr>

                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>  




                    </div>
                    <!-- /.container-fluid -->

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

        <?php
        include './include/logoutmodel.php';
        ?>


    </body>

    <?php
    include './include/footer.php';
    ?>

</html>
