<?php

  include("../database/db_connection.php");

$db=new connect();

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course Admission | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      background-color: #f8fdf9;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(135deg, #abe7b1ff, #90de8bff);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 9px 0;
    }

    .navbar-brand {
      font-weight: 750;
      color: #1b4b1d !important;
      letter-spacing: 0.1px;
    }

    .nav-link {
      color: #fbfbfbff !important;
      font-weight: 600;
      margin: 0 10px;
      border-radius: 6px;
      padding: 6px 12px;
      background-color: #225f26ff;
      
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #fff !important;
      background-color: #064408ff;
      border-radius: 6px;
      padding: 6px 12px;
    }

     /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #abe7b1ff, #90de8bff);
      color: #1a441b;
      padding: 100px 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite alternate;
    }

    .hero::after {
      content: "";
      position: absolute;
      bottom: -60px;
      left: -60px;
      width: 250px;
      height: 250px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      animation: float 8s ease-in-out infinite alternate-reverse;
    }

    @keyframes float {
      from { transform: translateY(0px); }
      to { transform: translateY(30px); }
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    .hero p {
      color: #2b562d;
      max-width: 600px;
      margin: 15px auto 0;
    } 

    .btn-custom {
      background-color: #1b4b1d;
      color: #fff;
      padding: 10px 26px;
      border-radius: 50px;
      transition: 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #256829;
      color: #fff;
    }

    /* Section Title */
    .section-title {
      text-align: center;
      font-weight: 700;
      margin-bottom: 35px;
      color: #184e19;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 70px;
      height: 3px;
      margin: 8px auto;
      border-radius: 2px;
      background: linear-gradient(135deg, #abe7b1ff, #90de8bff);
    }

    .course-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    }

    .course-card:hover {
      transform: translateY(-6px);
    }

    .course-card img {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    .course-card .card-body {
      background-color: #fff;
      padding: 20px;
    }

    .course-card .btn {
      background:  linear-gradient(135deg, #aafcb2ff, #90de8bff);
      border: none;
      font-weight: 500;
    }

    .course-card .btn:hover {
      background: linear-gradient(135deg, #308234ff, #1b4b1d);
      color: #fff;

    }

    /* Footer */
    footer {
      background-color: #1b4b1d;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      font-size: 0.95rem;
    }

  </style>
</head>
<body>

<?php

include("header.php");


    if(isset($_GET["page"]))
    {
      switch($_GET["page"])
      {
        
        case "courses";
        {
          include("courses.php");
        }
        break;

        case "apply";
        {
          include("apply.php");
        }
        break;

		case "about";
        {
          include("about.php");
        }
        break;

		case "contract";
        {
          include("contract.php");
        }
        break;

		case "notice";
        {
          include("notice.php");
        }
        break;

		case "applicant_info";
        {
          include("applicant_info.php");
        }
        break;

        case "applicant_list";
        {
          include("applicant_list.php");
        }
        break;

		default;
		{
			include("home.php");
		}
      }

    }
    else
    {
       include("home.php");
    }

include("footer.php");

?>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
