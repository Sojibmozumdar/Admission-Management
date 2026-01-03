<?php




    if(isset($_POST["save"]))
    {
       
          $name=isset($_POST["name"])?$_POST["name"]:"";
          $email=isset($_POST["email"])?$_POST["email"]:"";
          $mobile=isset($_POST["mobile"])?$_POST["mobile"]:"";
          $address=isset($_POST["address"])?$_POST["address"]:"";
          $courseTitle=isset($_POST["courseTitle"])?$_POST["courseTitle"]:"";
          $courseFee=isset($_POST["courseFee"])?$_POST["courseFee"]:"";

        $sql="INSERT INTO `apply_info` (`name`,`email`,`phone`,`address`,`course_title`,`course_fee`)
              VALUES('$name','$email','$mobile','$address','$courseTitle','$courseFee')";
        //echo $sql;
        $loc='../img/applicant_img/'.$email.'.jpg';

        $insert=$db->link->query($sql);
        if($insert)
        {
            move_uploaded_file($_FILES['file']['tmp_name'],$loc);

            print "<script>alert('Save Successfully!!')</script>";
            print "<script>location='applicant_info.php?id=$email'</script>";

        }
        else
        {
           print "Please Try Again!!";
        }
    }




?>


<style>
/* 100% SAFE — NOTHING OUTSIDE THIS CLASS WILL CHANGE */
.sojib-feedback {
    background: linear-gradient(135deg, #fff;, #fff;);
    padding: 50px 0;
    display: flex;
    justify-content: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 1000px;
    border-radius: 18px;
    /* Removed padding here as it is now in card-body */
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden; /* Added to contain the form-header's radius */
}

/* --- ADDED FOR FORM HEADER BACKGROUND --- */
.sojib-feedback .form-header {
    /* Complementary light green/grey background */
    background: #d4f0d4ff;
    padding: 25px 35px; /* Same horizontal padding as feedback-box content */
    border-top-left-radius: 18px; /* Match feedback-box top border-radius */
    border-top-right-radius: 18px; /* Match feedback-box top border-radius */
    margin-bottom: 20px; /* Space between header and form fields */
}

.sojib-feedback .form-header h3 {
    margin: 0; /* Remove default margin to fit header padding */
    text-align: center;
    font-weight: bold;
}
/* ----------------------------------------- */


.sojib-feedback h3 {
    color: #1b4b1d !important;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

.sojib-feedback label {
    font-weight: 600;
    color: #1b4b1d;
}

.sojib-feedback .form-control {
    border-radius: 10px;
    border: 1px solid #8ade91;
    padding: 12px;
}

.sojib-feedback .form-control:focus {
    border-color: #41b34a;
    box-shadow: 0 0 4px rgba(69,185,77,0.5);
}

.sojib-feedback .feedback-btn {
    background: linear-gradient(135deg, #306934ff, #2a5c2dff);
    color: #fff;
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 50px;
    font-weight: bold;
    transition: 0.3s;
}

.sojib-feedback .feedback-btn:hover {
    background: #1b4b1d;
}
</style>


<div class="sojib-feedback">

  <div class="feedback-box">

    <div class="form-header">
      <h3>
        🎓 Apply for Your Course
      </h3>
    </div>
    <div class="card-body px-4 py-0" style="padding-bottom: 35px !important;">
        <form action="" method="POST" enctype="multipart/form-data">

          <div class="row g-3">

            <div class="col-md-6">
              <label class="form-label fw-semibold">Full Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Email Address</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Mobile Number</label>
              <input type="text" name="mobile" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Profile Picture</label>
              <input type="file" name="file" class="form-control" required>
            </div>

            <div class="col-12">
              <label class="form-label fw-semibold">Address</label>
              <textarea name="address" class="form-control" rows="2" required></textarea>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Course Title</label>
              <select id="courseTitle" name="courseTitle" class="form-control" onchange="return course_fee()" required>
              <option value="">Select a course</option>
              <option value="Web Development">Web Development</option>
              <option value="Digital Marketing">Digital Marketing</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="App Development">App Development</option>
              <option value="UI/UX Design">UI/UX Design</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Course Fee (BDT)</label>
              <input type="number" id="courseFee" class="form-control" name="courseFee" placeholder="Enter course fee" required readonly>
            </div>

          </div>

          <div class="text-center mt-4">
            <button type="submit" name="save" class="feedback-btn">Submit Application</button>
          </div>

        </form>
      </div>

  </div>

</div>

 <script>
      function course_fee()
      {
        var courseTitle=document.getElementById('courseTitle').value;
        //alert(courseTitle);
        if(courseTitle=="Web Development")
        {
          var amount=12000;
        }
        else if(courseTitle=="Digital Marketing")
        {
            var amount=13000;
        } 
        else if(courseTitle=="Graphic Design")
        {
            var amount=1100;
        }
        else if(courseTitle=="App Development")
        {
            var amount=15000;
        }
        else if(courseTitle=="UI/UX Design")
        {
            var amount=10000;
        }
        
        document.getElementById('courseFee').value=amount;

      }
    </script>