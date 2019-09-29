<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="coordinatordashboard.php">

        <img class="rounded-circle" style="width:4rem;" src="img/bitlogo.png" alt="coordinatordashboard.php">
        <div class="sidebar-brand-text ">BIT PROJECTS </div>
    </a>
    <li class="nav-item <?php
    if ($pageNo == 20001) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="coordinatordashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <span>Project Management</span></a>
    </li>
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->

    <li class="nav-item <?php
    if ($pageNo == 20002) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="insertguidelines.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> Add Guidelines</span></a>
    </li>
    <li class="nav-item <?php
    if ($pageNo == 20009) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="guidelinestable.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> View Guidelines</span></a>
    </li>
    <li class="nav-item <?php
    if ($pageNo == 20006) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="deadline.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Set Deadlines</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <!-- <a class=h6 mb-0 text-400" >-->
            <span>Student Management</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php
    if ($pageNo == 20004) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="studentregistration.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Student Registration</span></a>
    </li>


    <li class="nav-item <?php
    if ($pageNo == 20003) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="studentlist.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Student List</span></a>
    </li> 
    <li class="nav-item <?php
    if ($pageNo == 20008) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="C_chatlist.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Chat</span></a>
    </li>  
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <!-- <a class=h6 mb-0 text-400" >-->
            <span>Submission Management</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php
    if ($pageNo == 20005) {
        echo 'active';
    }
    ?>">
        <a class="nav-link" href="submission.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Submission List</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <!-- <a class=h6 mb-0 text-400" >-->
            <span>Reports</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php
    if ($pageNo == 20012) {
        echo 'active';
    }
    ?>">
        <a class = "nav-link" href = "submissionreports.php">
            <i class = "fas fa-fw fa-tachometer-alt"></i>
            <span>Submission Reports</span></a>
    </li>

    <li class="nav-item <?php
    if ($pageNo == 30002) {
        echo 'active';
    }
    ?>">
        <a class = "nav-link" href = "projecteligiblereportview.php" target="_blank">
            <i class = "fas fa-fw fa-tachometer-alt"></i>
            <span>Project Eligibility Report</span></a>
    </li>

    <li class="nav-item <?php
    if ($pageNo == 30003) {
        echo 'active';
    }
    ?>">
        <a class = "nav-link" href = "finaleligiblereportview.php" target="_blank">
            <i class = "fas fa-fw fa-tachometer-alt"></i>
            <span>Final Eligibility Report</span></a>
    </li>

    <li class="nav-item <?php
    if ($pageNo == 30004) {
        echo 'active';
    }
    ?>">
        <a class = "nav-link" href = "subsummaryreportview.php" target="_blank">
            <i class = "fas fa-fw fa-tachometer-alt"></i>
            <span>Submission Summary</span></a>
    </li>
    <!--Divider -->
    <hr class = "sidebar-divider d-none d-md-block">

    <!--Sidebar Toggler (Sidebar) -->
    <div class = "text-center d-none d-md-inline">
        <button class = "rounded-circle border-0" id = "sidebarToggle"></button>
    </div>

</ul>
<!--End of Sidebar -->