 <?php
    

    if(isset($_GET['value']))
    {
      $val=$_GET['value'];


        $db->link->query("UPDATE `apply_info` SET `status`='1' WHERE `email`='$val'");

    }


    if(isset($_GET["del"]))
  {

      $sql=$db->link->query("DELETE FROM `apply_info` WHERE `email`='".$_GET["del"]."'");
      if($sql)
      {
        echo "Delete Successfully!!";
      }

  }

?>
 

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
 
 
 <h2 class="fw-bold text-dark">Welcome, Admin! 👋</h2>
      <p class="text-muted">Here’s what’s happening with your platform today:</p>

      <div class="row g-4 mt-4">
        <div class="col-md-3">
          <div class="card bg-primary shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text display-6 fw-bold">1,245</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-success shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Active Courses</h5>
              <p class="card-text display-6 fw-bold">58</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-danger shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Pending Tasks</h5>
              <p class="card-text display-6 fw-bold">12</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-warning shadow-sm">
            <div class="card-body">
              <h5 class="card-title">New Enrollments</h5>
              <p class="card-text display-6 fw-bold">89</p>
            </div>
          </div>
        </div>
      </div>

<!-- Table Section -->
<div class="card mt-5 shadow-sm border-0">
  <div class="card-header fw-bold">
    Recent Applicant
  </div>
  <div class="card-body">
    <div class="table-responsive"> <!-- Added for responsiveness -->
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course Title</th>
            <th>Course Fee</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        
        <?php
        $i=1;
        $sql=$db->link->query('SELECT * FROM `apply_info`');
        while($fetch=$sql->fetch_array()) {
        ?>
          <tr>
            <td><?php print $i++; ?></td>
            <td><?php print $fetch['name']; ?></td>
            <td><?php print $fetch['email']; ?></td>
            <td><?php print $fetch['phone']; ?></td>
            <td><?php print $fetch['course_title']; ?></td>
            <td><?php print $fetch['course_fee']; ?></td>
            <td><img src="../img/applicant_img/<?php print $fetch['email']?>.jpg" class="img" ></td>
            <td>
                      <a href="index.php?&del=<?php print $fetch[1]?>" class="btn btn-danger" 
                        onclick="return confirmdelete();"> Delete</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
