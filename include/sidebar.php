<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="studentdashboard.php">
        
        <img class="rounded-circle" style="width:4rem;" src="img/bitlogo.png" alt="studentdashboard.php">
        <div class="sidebar-brand-text ">BIT PROJECTS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($pageNo == 10001){echo 'active';} ?>">
        <a class="nav-link" href="studentdashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>
      
       <li class="nav-item <?php if($pageNo == 10002){echo 'active';} ?>">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Edit Profile</span></a>
      </li>
      <li class="nav-item <?php if($pageNo == 10003){echo 'active';} ?>">
        <a class="nav-link" href="guidelines.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Project Guidelines</span></a>
      </li>
      
      <li class="nav-item  <?php if($pageNo == 10004){echo 'active';} ?>">
        <a class="nav-link" href="submissionlist.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><b>Submissions</b></span></a>
      </li>
       <li class="nav-item <?php if($pageNo == 10005){echo 'active';} ?>">
        <a class="nav-link" href="chatview.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Chat</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->