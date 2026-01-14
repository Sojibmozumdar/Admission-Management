 <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/Admission_management">EduGreen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navMenu">
      <?php
        
        $current_script = basename($_SERVER['PHP_SELF']); 
        $current_page = isset($_GET['page']) ? $_GET['page'] : '';
      ?>
      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/Admission_management" class="nav-link <?php echo ($current_script == 'index.php' && $current_page == '') ? 'active' : ''; ?>">Home</a>
        </li>

        <li class="nav-item">
          <a href="index.php?page=apply" class="nav-link <?php echo ($current_page == 'apply') ? 'active' : ''; ?>">Admission</a>
        </li>

        <li class="nav-item">
          <a href="index.php?page=contract" class="nav-link <?php echo ($current_page == 'contract') ? 'active' : ''; ?>">Feedback</a>
        </li>

        <li class="nav-item">
          <a href="index.php?page=about" class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>">About_Us</a>
        </li>

        <li class="nav-item">
          <a href="index.php?page=notice" class="nav-link <?php echo ($current_page == 'notice') ? 'active' : ''; ?>">Notice</a>
        </li>

        <li class="nav-item">
          <a href="index.php?page=applicant_list" class="nav-link <?php echo ($current_page == 'applicant_list') ? 'active' : ''; ?>">All_applicants</a>
        </li>

         <li class="nav-item">
          <a href="courses.php" class="nav-link <?php echo ($current_script == 'courses.php') ? 'active' : ''; ?>">View_Courses</a>
        </li>

        <li class="nav-item">
          <a href="../login/login.php" class="nav-link">Login</a>
        </li>

        <li class="nav-item">
          <a href="../admin/index.php" class="nav-link">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Active link style */
  .navbar-nav .nav-link.active {
    color: #ffffffff !important; /* Green color */
    font-weight: 700;
    background-color: #023604ff;
    border-bottom: 2px solid #198754;
  }
</style>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Empower Your Future with EduGreen</h1>
      <p>Join our expert-led courses and take your learning to the next level. Admissions now open for 2025!</p>
      <a href="index.php?page=apply" class="btn btn-custom mt-3">Apply Now</a>
    </div>
  </section>
