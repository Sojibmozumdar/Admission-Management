 <?php
    

    if(isset($_GET['value']))
    {
      $val=$_GET['value'];


        $db->link->query("UPDATE `usefeedback_info` SET `status`='1' WHERE `email`='$val'");

    }

?>
 
 

    
<!-- Table Section -->
<div class="card mt-5 shadow-sm border-0">
  <div class="card-header fw-bold">
    Recent Report
  </div>
  <div class="card-body">
    <div class="table-responsive"> <!-- Added for responsiveness -->
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message Title</th>
            <th>Message Details</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        
        <?php
        $i=1;
        $sql=$db->link->query('SELECT * FROM `usefeedback_info`');
        while($fetch=$sql->fetch_array()) {
        ?>
          <tr>
            <td><?php print $i++; ?></td>
            <td><?php print $fetch['name']; ?></td>
            <td><?php print $fetch['email']; ?></td>
            <td><?php print $fetch['message']; ?></td>
            <td><?php print $fetch['details']; ?></td>
            <td><?php print $fetch['date']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
