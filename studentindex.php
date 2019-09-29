<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <?php
        session_start();
        include './include/header.php';
        include './model/shownewsmodel.php';

        $pageNo = 10001;
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
                            <h1 class="h3 mb-0 text-Blue-800"><b>MANAGEMENT INFORMATION SYSTEM</b></h1><br>
                        </div>


                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->


                            <div class="card shadow col-lg-8 col-md-8 mb-8">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Submission Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Submission Name</th>
                                                    <th>Status</th>
                                                    <th>Submission date</th>
                                                    <th>Submission Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>1.Draft Proposal Submission</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2019/04/25</td>
                                                    <td>10:25 AM</td>

                                                </tr>
                                                <tr>

                                                    <td>2.Proposal Submission</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2011/07/25</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>3.Interim Report Submission</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2019/04/26</td>
                                                    <td>9:26 PM</td>
                                                </tr>
                                                <tr>

                                                    <td>4.Client Agreement Form</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2019/05/12</td>
                                                    <td>1:13 PM</td>

                                                </tr>
                                                <tr>

                                                    <td>5.Supervisor Agreement Form</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2009/01/12</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>6.Progress Report 01</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2012/03/29</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>7.Progress Report 02</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2008/11/28</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>8.Progress Report 03</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2012/12/02</td>
                                                    <td>2011/04/25</td> 
                                                </tr>
                                                <tr>

                                                    <td>9.Progress Report 04</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2012/08/06</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>10.Progress Report 05</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2010/10/14</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>11.Progress Report 06</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2009/09/15</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>12.Progress Report 07</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2008/12/13</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>13.Progress Report 08</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2008/12/19</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>14.Progress Report 09</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2013/03/03</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>15.Progress Report 10</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2008/10/16</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>16.Tentative Dissertation</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2012/12/18</td>
                                                    <td>2011/04/25</td>
                                                </tr>
                                                <tr>

                                                    <td>17.Final Dissertation</td>
                                                    <td><a href="dp_submit.php"class="btn btn-primary btn-user btn-block">view </a></td>
                                                    <td>2010/03/17</td>
                                                    <td>2011/04/25</td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                        <div id="kryesore" style="overflow-y: scroll;">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4 mb-2">
                                <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-2">
                                        <h6 class="m-0 font-weight-bold text-primary"> General News</h6>
                                    </div>
                                    <div class="card-body"> 
                                        <?php
                                        $result = get_news();
                                        while ($row = $result->fetch_assoc()) {
                                            extract($row);
                                            echo "<div  class='col-lg-12 card shadow mb-12'>";
                                            echo "<div class='card-header py-3'>";
                                            echo "<h6 class='m-0 font-weight text-primary'>" . $n_heading . "</h6>";
                                            echo "</div>";
                                            echo "<div class='card-body'>";
                                            echo "<p>" . $news_content . "</p>";
                                            echo "<p>" . $news_dateNtime . "</p>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "<hr>";
                                        }
                                        ?>

                                        <a href="#"></i>See More </a>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">   

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
