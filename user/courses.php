<?php

  include("../database/db_connection.php");

$db=new connect();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses | EduGreen Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7fff7;
      color: #1a441b;
      overflow-x: hidden;
    }

    /* Smaller Navbar */
    .navbar {
      background: linear-gradient(135deg, #abe7b1ff, #90de8bff);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 9px 0; /* reduced height */
    }

    .navbar-brand {
      font-weight: 700;
      color: #1a441b !important;
      letter-spacing: 0.5px;
    }

    .nav-link {
      color: #dfe9dfff !important;
      font-weight: 500;
      margin: 0 8px;
      border-radius: 6px;
      padding: 6px 12px;
      font-size: 0.95rem;
      background-color: #225f26ff;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: white !important;
      background-color: #226224ff;
      border-radius: 8px;
      padding: 5px 10px;
    }

    /* Smaller Hero Section */
    .hero {
      background: linear-gradient(135deg, #abe7b1ff, #90de8bff);
      color: #1a441b;
      padding: 50px 20px; /* reduced */
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: -40px;
      right: -40px;
      width: 150px;
      height: 150px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
    
    }

    .hero::after {
      content: "";
      position: absolute;
      bottom: -50px;
      left: -50px;
      width: 180px;
      height: 180px;
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
      font-size: 2.1rem;
    }

    .hero p {
      color: #2b562d;
      max-width: 600px;
      margin: 8px auto 0;
      font-size: 0.95rem;
    }

    /* Course Cards */
    .course-card {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 18px;
      overflow: hidden;
      border: none;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      transition: all 0.4s ease;
    }

    .course-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
    }

    .course-card img {
      height: 180px;
      width: 100%;
      object-fit: cover;
      border-bottom: 3px solid #a6e7af;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-weight: 600;
      color: #174417;
      font-size: 1.1rem;
    }

    .card-text {
      font-size: 0.9rem;
      color: #355936;
    }

    .btn-enroll {
      background:  linear-gradient(135deg, #aafcb2ff, #90de8bff);
      border: none;
      border-radius: 50px;
      color: #1a441b;
      font-weight: 600;
      padding: 8px 18px;
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }

    .btn-enroll:hover {
      background: linear-gradient(135deg, #308234ff, #1b4b1d);
      color: #fff;
      transform: scale(1.05);
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

    /* Footer */
    footer {
      background: #1a441b;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">EduGreen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="index.php?page=apply" class="nav-link">Apply</a></li>
          <li class="nav-item"><a href="index.php?page=contract" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero (smaller) -->
  <section class="hero">
    <div class="container">
      <h1>Explore Our Courses</h1>
      <p>Learn new skills, gain real-world experience, and grow with EduGreen Academy 🌱</p>
    </div>
  </section>

 <!-- Courses -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Our All Courses</h2>
      <div class="row g-4">


            <?php
      
      $sql=$db->link->query("SELECT * FROM `course_info`");
      while($fetch=$sql->fetch_array())
      {
      
      ?>

        <!-- Course 1 -->
        <div class="col-md-4">
          <div class="card course-card">
            <img src="../img/<?php print $fetch['courseCode']?>.jpg" class="img" >
            <div class="card-body">
              <h5 class="card-title"><?php print $fetch[1]; ?></h5>
              <p class="card-text"><?php print $fetch[2]; ?></p>
              <p><strong>Duration: </strong><?php print $fetch[3]; ?></p>
              <p><strong>Fee: </strong><?php print $fetch[4]; ?> BDT</p>
              <a href="index.php?page=apply" class="btn btn-enroll w-100">Enroll Now</a>
            </div>
          </div>
        </div>

        
       <?php 
       
      }
       
       ?> 


      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 EduGreen Academy | Designed by Sojib 🌿</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
