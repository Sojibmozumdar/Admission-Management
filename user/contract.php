<?php




if(isset($_POST["save"]))
{

    $name=isset($_POST['name'])?$_POST['name']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';
    $title=isset($_POST['title'])?$_POST['title']:'';
    $details=isset($_POST['details'])?$_POST['details']:'';
    $date=date('y-m-d');


    $sql=$db->link->query("INSERT INTO `usefeedback_info` (`name`,`email`,`message`,`details`,`date`)
                           VALUES('$name','$email','$title','$details','$date')");

    if($sql)
    {
        echo "<script> alert('Submit Succesfully!')</script>";
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
    max-width: 750px;
    border-radius: 18px;
    /* Removed default padding: 35px; here */
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden; /* Added to contain the form-header's radius */
}

/* --- ADDED FOR FORM HEADER BACKGROUND --- */
.sojib-feedback .form-header {
    /* Complementary light green/grey background */
    background: #d4f0d4ff;
    padding: 20px 30px;
    border-top-left-radius: 18px; /* Match feedback-box top border-radius */
    border-top-right-radius: 18px; /* Match feedback-box top border-radius */
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
        💬 Send Us Your Feedback
      </h3>
    </div>
    <div style="padding: 35px;">
      <form method="post">

        <div class="mb-3">
          <label>Full Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>

        <div class="mb-3">
          <label>Email Address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
          <label>Message Title</label>
          <input type="text" name="title" class="form-control" placeholder="Enter message title" required>
        </div>

        <div class="mb-3">
          <label>Message Details</label>
          <textarea name="details" class="form-control" rows="4" placeholder="Write your message..." required></textarea>
        </div>

        <button type="submit" name="save" class="feedback-btn">Submit Feedback</button>

      </form>
    </div>

  </div>

</div>

