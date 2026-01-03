<?php

if($_SESSION['logstatus']==true)
{
 

  $courseCode=isset($_POST['courseCode'])?$_POST['courseCode']:"";
  $courseTitle=isset($_POST['courseTitle'])?$_POST['courseTitle']:"";
  $courseDetails=isset($_POST['courseDetails'])?$_POST['courseDetails']:"";
  $shortDetails=isset($_POST['shortDetails'])?$_POST['shortDetails']:"";
  $courseDuration=isset($_POST['courseDuration'])?$_POST['courseDuration']:"";
  $courseFee=isset($_POST['courseFee'])?$_POST['courseFee']:"";
  
  if(isset($_POST['save']))
  {
      if(!empty($courseCode) && !empty($courseTitle) && !empty($courseDetails) && !empty($courseDuration) && !empty($courseFee))
  {

    
    $loc="../img/".$courseCode.'.jpg';

     $sql="INSERT INTO `course_info` (`courseCode`,`courseTitle`,`courseDetails`,`courseDuration`,`courseFee`,`shortDetails`)
          VALUES('$courseCode','$courseTitle','$courseDetails','$courseDuration','$courseFee','$shortDetails')";

      $insert=$db->insert($sql);
      echo $insert;
      move_uploaded_file($_FILES['file']['tmp_name'],$loc);

  }
    else
  {
     echo "Please fill-up all fields!";
  }
}

  if(isset($_GET["del"]))
  {

      $sql=$db->link->query("DELETE FROM `course_info` WHERE `courseCode`='".$_GET["del"]."'");
      if($sql)
      {
        echo "Delete Successfully!!";
      }

  }


  
if(isset($_POST["edit"]))
    {
       
          $courseCode=isset($_POST['courseCode'])?$_POST['courseCode']:"";
          $courseTitle=isset($_POST['courseTitle'])?$_POST['courseTitle']:"";
          $courseDetails=isset($_POST['courseDetails'])?$_POST['courseDetails']:"";
          $shortDetails=isset($_POST['shortDetails'])?$_POST['shortDetails']:"";
          $courseDuration=isset($_POST['courseDuration'])?$_POST['courseDuration']:"";
          $courseFee=isset($_POST['courseFee'])?$_POST['courseFee']:"";


          if(!empty($courseCode))
          {

        $sql=$db->link->query("REPLACE INTO `course_info` (`courseCode`,`courseTitle`,`courseDetails`,`courseDuration`,`courseFee`,`shortDetails`)
              VALUES('$courseCode','$courseTitle','$courseDetails','$courseDuration','$courseFee','$shortDetails')");
        //echo $sql;
        $loc="../img/".$courseCode.'.jpg';

        if($sql)
        {
            move_uploaded_file($_FILES['file']['tmp_name'],$loc);

            echo "<script> alert('Udate Succesfully!')</script>";


        }
        else
        {
           print "Please Try Again!!";
        }

         }

            else
			  {
				$sms="Enter Your Shop Title!";
			  }
    }

    if(isset($_GET["edit"]))
{
	$id=$_GET["edit"];
	if(!empty($courseCode))
	{
		$select=$conn->query("SELECT * FROM `course_info` WHERE `courseCode`='$courseDetails'");
		
		$fetch_info=$select->fetch_array();
		//print_r($fetch_info);
	}

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course Information Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .course-form {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 40px;
      margin-top: 60px;
    }
    .form-header {
      background-color: #a5ecacff;
      color: #342229ff;
      text-align: center;
      padding: 15px;
      border-radius: 10px 10px 0 0;
      margin: -40px -40px 30px -40px;
    }
    .form-header h3 {
      margin: 0;
      font-weight: 600;
    }
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
  <div class="container">
    <div class="col-lg-8 mx-auto">
      <div class="course-form">
        <div class="form-header">
          <h3> 📘 Add New Course </h3>
        </div>

        <form method="post" enctype="multipart/form-data">
          <!-- Course Code -->
          <div class="mb-3">
            <label for="courseCode" class="form-label">Course Code</label>
            <input type="text" class="form-control" id="courseCode" name="courseCode" placeholder="Enter course code ( CSE101)" >
          </div>

          <!-- Course Title -->
          <div class="mb-3">
            <label for="courseTitle" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="courseTitle" name="courseTitle" placeholder="Enter course title" >
          </div>

          <!-- Short Details -->
          <div class="mb-3">
            <label for="courseDetails" class="form-label">Short Details</label>
            <textarea class="form-control" id="shortDetails" name="shortDetails" rows="4" placeholder="Enter detailed course description" ></textarea>
          </div>

          <!-- Course Details -->
          <div class="mb-3">
            <label for="courseDetails" class="form-label">Course Details</label>
            <textarea class="form-control" id="courseDetails" name="courseDetails" rows="4" placeholder="Enter detailed course description" ></textarea>
          </div>

          <!-- Course Duration -->
          <div class="mb-3">
            <label for="courseDuration" class="form-label">Course Duration</label>
            <input type="text" class="form-control" id="courseDuration" name="courseDuration" placeholder="Enter duration ( 3 months)" >
          </div>

          <!-- picture -->
          <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
             <input type="file" name="file" class="form-control">           

          </div>

          <!-- Course Fee -->
          <div class="mb-3">
            <label for="courseFee" class="form-label">Course Fee</label>
            <input type="number" class="form-control" id="courseFee" name="courseFee" placeholder="Enter course fee ( 8000)" >
          </div>

          <!-- Submit Button -->
          <div class="text-center mt-4">
            <button type="submit" name="save" class="btn btn-success px-4">Submit</button>
            <button type="submit"  class="btn btn-warning px-4"  name="edit">Update</button>
            <button type="submit"  class="btn btn-info px-4"  name="view">View</button>
          </div>
        </form>
      </div>
    </div>
  </div>


    <?php 
  
  if(isset($_POST["view"]))
  {
    ?>
          <!-- Table Section -->
      <div class="card mt-5 shadow-sm border-0">
        <div class="card-header fw-bold">
         All Courses
        </div>
        <div class="card-body">
          <table class="table table-hover align-middle mb-0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Short Details</th>
                <th>Course Duration</th>
                <th>Course Fee</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
             <tbody>
              <?php
              $i=1;
                $select=$db->link->query("SELECT * FROM `course_info`");
                while($fetch=$select->fetch_array())
                {



              ?>
              <tr>
                <td><?php print $i++?></td>
                <td><?php print $fetch[0]?></td>
                <td><?php print $fetch[1]?></td>
                <td><?php print $fetch[5]?></td>
                <td><?php print $fetch[3]?></td>
                <td><?php print $fetch[4]?></td>
                <td><img src="../img/<?php print $fetch['courseCode']?>.jpg" class="img" ></td>
               

                <td>
                      <a href="index.php?page=courses&del=<?php print $fetch[0]?>" class="btn btn-danger px-4" 
                        onclick="return confirmdelete();"> Delete</a>

                        <a href="index.php?page=courses&edit=<?php print $fetch[0]?>" class="btn btn-warning px-4"> Edit</a> 
                        
                </td>
              </tr>
              <?php
                  }
              ?>
             
          </table>
        </div>
      </div>



 <?php
  }
  
 
  
  ?>


  <!-- Bootstrap JS -->
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