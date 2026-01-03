<?php

 $email=$_GET['id'];
 //echo $email;

include("../database/db_connection.php");
  $db=new connect();

  $select=$db->link->query("SELECT * FROM `apply_info` WHERE `email`='$email'");

  $fetch=$select->fetch_array();
  //print_r($fetch);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Applicant Details | EduGreen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #abe7b1ff, #90de8bff);
      min-height: 100vh;
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
    }

    .applicant-card {
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 10px 28px rgba(0, 0, 0, 0.12);
      padding: 35px;
      max-width: 800px;
      width: 100%;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .applicant-photo {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #c6f1c8;
      margin-bottom: 15px;
    }

    .detail-title {
      color: #1b4b1d;
      font-weight: 700;
      margin-bottom: 25px;
      text-align: center;
    }

    .detail-label {
      color: #2d572c;
      font-weight: 600;
      margin-bottom: 3px;
    }

    .detail-value {
      color: #164218ff;
      font-weight: 500;
      margin-bottom: 15px;
    }

    .btn-back {
      background: linear-gradient(135deg, #4fca5cff, #51c45dff);
      color: #fff;
      border: none;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: 600;
      transition: 0.3s ease;
      text-decoration: none;
    }

    .btn-back:hover {
      background: linear-gradient(135deg, #1b4b1d, #082a0d);
    }
  </style>
</head>
<body>

  <div class="applicant-card">
    <h2 class="detail-title">📄 Applicant Details</h2>

    <div class="text-center">
      <img src="../img/applicant_img/<?php print $fetch['email']?>.jpg" alt="Applicant Photo" class="applicant-photo" id="applicantImage">
    </div>

    <div class="row mt-4">
      <div class="col-md-6">
        <p class="detail-label">👤 Full Name</p>
        <p class="detail-value"><?php print $fetch['name']?></p>

        <p class="detail-label">📧 Email</p>
        <p class="detail-value"><?php print $fetch['email']?></p>

        <p class="detail-label">📱 Phone</p>
        <p class="detail-value"><?php print $fetch['phone']?></p>
      </div>
      <div class="col-md-6">
        <p class="detail-label">📘 Course Name</p>
        <p class="detail-value"><?php print $fetch['course_title']?></p>

        <p class="detail-label">💰 Course Fee (BDT)</p>
        <p class="detail-value"><?php print $fetch['course_fee']?></p>

        <p class="detail-label">📍 Address</p>
        <p class="detail-value"><?php print $fetch['address']?></p>
      </div>
    </div>

    <div class="mt-4 text-center">
      <a href="index.php?page=applicant_list" class="btn-back">← Applicants List</a>
      <a href="/Admission_management" class="btn-back">← Home</a>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
