<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>editgudelines</title>

        <?php
        include './include/header.php';
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
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"> Edit Details </h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Customise the page</h1>
                                    </div>
                                    <form class="user" method="POST" action="./model/studnetmodel.php" name = "form1">
                                        <div class="form-group row">
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                firstname
                                                <input type="text" class="form-control form-control-user" name="FirstName" placeholder="First Name">
                                            </div>
                                            <br>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                LastName
                                                <input type="text" class="form-control form-control-user" name="LastName" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="NIC" placeholder="NIC">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="Attempt" placeholder="Attempt">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="InputEmail" placeholder="Email Address">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="RegistrationNo" placeholder="Registration Number">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="IndexNo" placeholder="Index Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        
                                            <div class="col-sm-6">
                                                <input type="submit" class="btn btn-primary btn-user btn-block" name="studentreg">
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

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <?php
    include './include/footer.php';
    ?>

</html>
