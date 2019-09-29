<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Chat</title>

        <?php
        session_start();
        
        $stureg = $_SESSION['resgistrationNo'];
        
        if($_SESSION['type']!='3'){
             header("Location: logout.php");
        }
        include './include/header.php';
        include './model/viewchatmodel.php';
        $regno =  $_SESSION['resgistrationNo'];
        $pageNo = 10009;
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

                        <h1 class="h3 mb-2 text-gray-800">Chat</h1>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                       
                                        <?php
                                        $result = get_chat($regno);
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            echo "<tr>";
                                            echo "<td>".$send." - <br/><br/>" . $message . "<br/><br>~ " . $c_dateNtime . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </thead>
                                </table>

                                <form action="model/chatmodel.php" method="post">
                                    <div class="form-group">   
                                        <input type="text"  name="message" class="form-control form-control-user" id="exampleInputmessage" aria-describedby="emailHelp" placeholder="Enter your message">
                                         <input type="hidden"  name="registrationNo" value ='<?php echo $regno ?>' >
                                    </div>
                                    <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" value="Submit" name="submit">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <<?php
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

