<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>C_chatlist</title>

        <?php
        session_start();
        if ($_SESSION['type'] == '1' || $_SESSION['type'] == '2') {
            
        } else {
            header("Location: logout.php");
        }
        //if ($_SESSION['userLevel'] != 3 || $_SESSION['userLevel'] != 2) {
        // session_destroy();
        //header("Location:http://localhost/bitsms/index.php");
        //}
        include './include/header.php';

        $pageNo = 10006;
        ?>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php
            include './include/C_sidebar.php';
            include './model/viewcchatmodel.php';
            $pageNo = 20008;
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
                        <p class="mb-4"><a target="_blank" ></a>.</p>
                        <div class="row">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Registration No</th>
                                        <th>Name</th>
                                        <th>View</th>
                                    </tr>
                                    <?php
                                    $result = get_chat_list();
                                    while ($row = $result->fetch_assoc()) {
                                        extract($row);
                                        echo "<tr>";
                                        echo "<td>" . $chatId . "</td>";
                                        echo "<td>" . $firstName . " " . $lastName . "</td>";
                                        echo "<td><a href='c_chatview.php?id=" . $chatId . "' class='btn btn-primary btn-user btn-block'>View Chat</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>


                                </thead>

                            </table>

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

        <?php
        include './include/logoutmodel.php';
        ?>

    </body>

    <?php
    include './include/footer.php';
    ?>

</html>



