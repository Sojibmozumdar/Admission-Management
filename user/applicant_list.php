<style>
/* 100% SAFE — NOTHING OUTSIDE THIS CLASS WILL CHANGE */

/* --- GENERAL THEME STYLES --- */
.sojib-feedback {
    background: linear-gradient(135deg, #fff;, #fff;);
    padding: 50px 0;
    display: flex;
    justify-content: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 1400px; /* Max-width suitable for displaying multiple cards */
    border-radius: 18px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden; 
    padding: 0; /* Remove padding here as content has its own padding */
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


/* --- APPLICANT CARD STYLES --- */
.applicant-list-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px; /* Space between cards */
    padding: 35px; /* Padding inside the main feedback-box wrapper */
    justify-content: center;
}

.applicant-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    padding: 20px;
    width: 100%;
    max-width: 300px; /* Max width for a typical card view */
    border: 1px solid #e0e0e0;
    transition: transform 0.2s;
}

.applicant-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.applicant-card .profile-picture {
    text-align: center;
    margin-bottom: 15px;
}

.applicant-card .profile-picture img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%; /* Circular image */
    border: 3px solid #41b34a; /* Green border from your theme */
}

.applicant-card h4 {
    color: #1b4b1d; /* Green header color */
    font-weight: bold;
    margin-bottom: 5px;
    text-align: center;
}

.applicant-card p {
    margin: 0 0 8px 0;
    font-size: 0.95rem;
    color: #333;
    line-height: 1.4;
}

.applicant-card p strong {
    color: #2a5c2dff;
    font-weight: 600;
    display: inline-block;
    min-width: 80px; /* Align data */
}

.applicant-card hr {
    border: 0;
    height: 1px;
    background: #e0e0e0;
    margin: 15px 0;
}
</style>


<div class="sojib-feedback">

  <div class="feedback-box"> 

    <div class="form-header">
      <h3>
        👨‍🎓 Applicant List View
      </h3>
    </div>
    
    <div class="applicant-list-container">


               <?php
      
      $sql=$db->link->query("SELECT * FROM `apply_info`");
      while($fetch=$sql->fetch_array())
      {
      
      ?>

      
      <div class="applicant-card">

      
        
        <div class="profile-picture">
            <img src="../img/applicant_img/<?php print $fetch['email']?>.jpg" class="img" >
        </div>

        <h4 class="text-center"><?php print $fetch[0]; ?></h4>
        <hr>

        <p><strong>Phone:</strong> <?php print $fetch[2]; ?></p>
        <p><strong>Address:</strong> <?php print $fetch[3]; ?></p>
        <p><strong>Course:</strong> <?php print $fetch[4]; ?></p>
      </div>

    <?php 
       
      }
       
       ?> 

      </div>

  </div>
  </div>