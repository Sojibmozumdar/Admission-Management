<?php

if($_SESSION['logstatus']==true)
{


//echo $db->msg;

$name=isset($_POST["name"])?$_POST["name"]:"";
$email=isset($_POST["email"])?$_POST["email"]:"";
$password=isset($_POST["password"])?$_POST["password"]:"";
$phone=isset($_POST["phone"])?$_POST["phone"]:"";
$status=isset($_POST["status"])?$_POST["status"]:"";
$gender=isset($_POST["gender"])?$_POST["gender"]:"";

if(isset($_REQUEST["save"]))
{
  if(!empty($name) && !empty($email) && !empty($password))
  {
    // Note: You must ensure that $db->insert returns a simple message/value, 
    // or you might see unexpected output.
    $loc="../img/".$email.'.jpg';

    $query="INSERT INTO `admin_user` (`name`,`email`,`password`,`phone`,`status`,`gender`)
      VALUES('$name','$email','$password','$phone','$status','$gender')";
    
    $insert=$db->insert($query);
    echo $insert;
    
    // Check if file upload was attempted before moving
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        move_uploaded_file($_FILES['file']['tmp_name'],$loc);
    }
  }
  else
  {
    echo "<div class='alert alert-danger text-center mx-auto mt-4' style='max-width: 600px;'>Please fill-up all fields!</div>";
  }

}


if(isset($_GET["del"]))
{

    $sql=$db->link->query("DELETE FROM `admin_user` WHERE `email`='".$_GET["del"]."'");
    if($sql)
    {
      echo "<div class='alert alert-success text-center mx-auto mt-4' style='max-width: 600px;'>Delete Successfully!!</div>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin User Form</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
/* 100% SAFE — GREEN THEME STYLES */

/* --- GENERAL THEME STYLES --- */
.sojib-feedback {
    /* Using a lighter background for the wrapper */
    background: linear-gradient(135deg, #fff;, #fff;);
    padding: 10px 0;
    display: flex;
    justify-content: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 700px; /* Standard width for a form */
    border-radius: 18px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden; 
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* --- HEADER STYLES --- */
.sojib-feedback .form-header {
    /* Complementary light green/grey background */
    background: #d4f0d4ff;
    padding: 25px 35px;
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
}

.sojib-feedback .form-header h3 {
    margin: 0;
    text-align: center;
    font-weight: bold;
}

.sojib-feedback h3 {
    color: #1b4b1d !important;
}

/* --- FORM ELEMENT STYLES --- */
.sojib-feedback label {
    font-weight: 600;
    color: #1b4b1d;
}

.sojib-feedback .form-control, .sojib-feedback .form-select {
    border-radius: 10px;
    border: 1px solid #8ade91;
    padding: 12px;
}

.sojib-feedback .form-control:focus, .sojib-feedback .form-select:focus {
    border-color: #41b34a;
    box-shadow: 0 0 4px rgba(69,185,77,0.5);
}

.sojib-feedback .btn-success {
    /* Main theme button green gradient */
    background: linear-gradient(135deg, #306934ff, #2a5c2dff);
    color: #fff;
    padding: 12px 30px;
    border: none;
    border-radius: 50px;
    font-weight: bold;
    transition: 0.3s;
}

.sojib-feedback .btn-success:hover {
    background: #1b4b1d;
}

.sojib-feedback .btn-info {
    /* View button style */
    background: #c3e6cb;
    color: #1b4b1d;
    padding: 12px 30px;
    border: none;
    border-radius: 50px;
    font-weight: bold;
    transition: 0.3s;
    margin-left: 10px;
}

.sojib-feedback .btn-info:hover {
    background: #8ade91;
}

/* Table Style for View Section */
.sojib-feedback .card-header {
    background-color: #d4f0d4ff;
    color: #1b4b1d;
    font-size: 1.2rem;
    padding: 15px 20px;
}

.sojib-feedback .table img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #8ade91;
}
/*
    .user-form { ... }
    .form-header { ... }
*/

  </style>
</head>

<script>
  function confirmdelete()
  {
    var con=confirm("Do you want to delete?");
    if(con==true)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>

<body>
  <div class="sojib-feedback"> <div class="feedback-box"> <div class="form-header">
          <h3>👤 Add New Admin User</h3>
        </div>

        <div style="padding: 35px;"> <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" >
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email address" >
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password"  name="password"  placeholder="Enter password" >
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone"  name="phone"  placeholder="Enter phone number" >
            </div>

            <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" id="status" name="status" >
                <option value="">Select status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="picture" class="form-label">Picture</label>
               <input type="file" name="file" class="form-control">           

            </div>

            <div class="mb-3">
              <label class="form-label">Gender</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label" for="female">Female</label>
                </div>
                
              </div>
            </div>

            <div class="text-center mt-4">
              <button type="submit"  class="btn btn-success px-4"  name="save">Submit</button>
              <button type="submit"  class="btn btn-info px-4"  name="view">View Users</button>

            </div>
          </form>
        </div>
    </div> </div> <?php 
  
  if(isset($_POST["view"]))
  {
    ?>
    <div class="container mt-5">
      <div class="card mt-5 shadow-sm border-0">
        <div class="card-header fw-bold">
          Admin User List
        </div>
        <div class="card-body">
          <table class="table table-hover align-middle mb-0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
              <tbody>
              <?php
              $i=1;
                $select=$db->link->query("SELECT * FROM `admin_user`");
                while($fetch=$select->fetch_array())
                {

              ?>
              <tr>
                <td><?php print $i++?></td>
                <td><?php print $fetch[0]?></td>
                <td><?php print $fetch[1]?></td>
                <td><?php print $fetch[2]?></td>
                <td><?php print $fetch[3]?></td>
                <td><img src="../img/<?php print $fetch['email']?>.jpg" class="img" ></td>

                <td>
                      <a href="index.php?page=user&del=<?php print $fetch[1]?>" class="btn btn-danger" 
                        onclick="return confirmdelete();"> Delete</a>
                </td>
              </tr>
              <?php
                  }
              ?>
              
          </table>
        </div>
      </div>
    </div> <?php
  }
  
  
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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