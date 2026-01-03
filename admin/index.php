<?php 
session_start();

if($_SESSION["logstatus"]==true)
{
$name=$_SESSION['user_name'];

include('../database/db_connection.php');
$db=new connect();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      min-height: 100vh;
      overflow-x: hidden;
      background-color: #f8fafc;
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      color: #333;
    }

    /* Sidebar styles */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background:  linear-gradient(135deg, #aafcb2ff, #90de8bff);
      padding-top: 70px;
      border-right: 1px solid #e5e9f2;
      box-shadow: 2px 0 8px rgba(0, 0, 0, 0.05);
    }

    .sidebar h4 {
      font-weight: 750;
      color: #1b4b1d;
    }

    .sidebar a {
      color: #032b03ff ;
      padding: 14px 22px;
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      font-weight: 600;
      font-size: 15px;
      border-radius: 8px;
      background: #5cdb84ff;
      margin: 4px 10px;
      transition: all 0.3s ease;
    }

    .sidebar a:hover, .sidebar a.active {
      background: #e9ecff;
      color: #0b1180ff;
      padding-left: 26px;
    }

    /* Navbar styles */
    .navbar {
      position: fixed;
      top: 0;
      left: 250px;
      right: 0;
      z-index: 1000;
      background: #9feda6ff;
      color: #06290eff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .navbar-brand {
      font-weight: 700;
      color: #1b4b1d !important;
      letter-spacing: 0.5px;
    }

    .img {
      border-radius: 100px;
      width: 5.5vh;
      height: 5.5vh;
      object-fit: cover;
    }

    .btn-outline-light {
      border-color: #06290eff;
      color: #093e17ff;
      font-weight: 700;
    }

    .btn-outline-light:hover {
      background-color: #064f17ff;
      color: #fff;
    }

    /* Main content */
    .content {
      margin-left: 250px;
      padding: 100px 30px 40px;
    }

    /* Card styling */
    .card {
      border: none;
      border-radius: 15px;
      color: #333;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .card.bg-primary {
      background: linear-gradient(135deg, #e3e8ff, #cfd9ff);
      color: #4e54c8;
    }

    .card.bg-success {
      background: linear-gradient(135deg, #e2f8e5, #c9f1cd);
      color: #2e7d32;
    }

    .card.bg-danger {
      background: linear-gradient(135deg, #ffe4e9, #ffd0d8);
      color: #d32f2f;
    }

    .card.bg-warning {
      background: linear-gradient(135deg, #fff6e5, #ffe9bf);
      color: #e38e00;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.1rem;
    }

    /* Table styling */
    .table {
      border-radius: 10px;
      overflow: hidden;
      background-color: #fff;
    }

    .table thead {
      background: #e9ecff;
      color: #4e54c8;
    }

    .table tbody tr:hover {
      background-color: #f8f9ff;
    }

    .card-header {
      background: #f0f4ff;
      color: #4e54c8;
    }

    /* Toggle button for sidebar */
    .toggle-btn {
      display: none;
    }

    /* Responsive sidebar for mobile */
    @media (max-width: 992px) {
      .sidebar {
        left: -250px;
        transition: all 0.3s ease;
       
        z-index: 9999; 
      }

      .sidebar.active {
        left: 0;
      }

      .navbar {
        left: 0;
      }

      .content {
        margin-left: 0;
        padding-top: 100px;
      }

      .toggle-btn {
        display: inline-block;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
  <h4 class="text-center mb-4"> Admin Panel</h4>
  
  <?php 
    
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; 
  ?>

  <a href="index.php" class="<?php echo ($current_page == 'dashboard') ? 'active' : ''; ?>">
    🏠 Dashboard
  </a>

  <a href="index.php?page=user" class="<?php echo ($current_page == 'user') ? 'active' : ''; ?>">
    👤 Users
  </a>

  <a href="index.php?page=courses" class="<?php echo ($current_page == 'courses') ? 'active' : ''; ?>">
    📘 Courses
  </a>

  <a href="index.php?page=report" class="<?php echo ($current_page == 'report') ? 'active' : ''; ?>">
    📊 Reports
  </a>

  <a href="index.php?page=settings" class="<?php echo ($current_page == 'settings') ? 'active' : ''; ?>">
    ⚙️ Settings
  </a>

  <a href="../">🏡 Home</a>
  <a href="../login/login.php?logout=logout">🚪 Logout</a>
</div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg px-3">
    <button class="btn btn-light border toggle-btn me-3" id="toggleSidebar">☰</button>
    <span class="navbar-brand">Admin Dashboard</span> Welcome to Administator Mr. <?php print $name?>
    <div class="ms-auto">
      <img src="../img/<?php print $_SESSION['email']?>.jpg" class="img" >
      <button class="btn btn-outline-light btn-sm">Admin</button>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="content">
    <div class="container-fluid">

    <?php 

    if(isset($_GET["page"]))
    {
      switch($_GET["page"])
      {
        
        case "courses";
        {
          include("course_info.php");
        }
        break;

        case "user";
        {
          include("user.php");
        }
        break;
        case "report";
        {
          include("report.php");
        }
        break;
      }

    }
    else
    {
       include("dashboard.php");
    }
      

    
    
    
    ?>



    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Sidebar toggle for mobile
    document.getElementById("toggleSidebar").addEventListener("click", function() {
      document.getElementById("sidebar").classList.toggle("active");
    });
  </script>
</body>
</html>

<?php
}
else
{
   print "<script>location='../login/login.php'</script>";
  //print "<h3><a href='../login/login.php'>Please Login </a> </h3>";
}
?>