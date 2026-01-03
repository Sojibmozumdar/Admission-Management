 <!-- Courses Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Popular Courses</h2>
      <div class="row g-4">

      <?php
      
      $sql=$db->link->query("SELECT * FROM `course_info`");
      while($fetch=$sql->fetch_array())
      {
      
      ?>


        <div class="col-md-4">
          <div class="card course-card">
            <img src="../img/<?php print $fetch['courseCode']?>.jpg" class="img" >
            <div class="card-body">
              <h5 class="card-title"><?php print $fetch[1]; ?></h5>
              <p class="card-text"><?php print $fetch[5]; ?></p>
              <a href="courses.php" class="btn w-100"> View Course in Details </a>
            </div>
          </div>
        </div>

       <?php 
       
      }
       
       ?> 



      </div>
    </div>
  </section>