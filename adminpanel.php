<?php include 'header.php'; ?> 
<?php include'checkadminlogin.php'; ?>


<div class="row p-1 text-center " id="menu">
    <div class="col-md-2 offset-md-1"> <a href="registration.php#list" class="btn  btn-outline-warning btn-lg">Add a room </a> </div>
    
    <div class="col-md-2"><a href="reg_admin.php#list" class="btn  btn-outline-warning  btn-lg  disabled">Register Admin</a></div>

    <div class="col-md-2"><a href="view_admins.php#list" class="btn  btn-outline-warning btn-lg">View Admin List</a></div>
</div>
<div class="row p-1 text-center">
    <div class="offset-md-1 col-md-2 p-1"><a href="view_allemplog.php#list" class="btn  btn-outline-warning btn-lg">View Booking Requests</a> </div>
    
    <div class="col-md-2 p-1"><a href="view_users.php" class="btn  btn-outline-warning btn-lg">View Check in List</a></div>

    <div class="col-md-2 p-1"> <a href="view_todayslog.php#list" class="btn  btn-outline-warning  btn-lg"> Check in </a> </div>
</div> 
<?php include 'footer.php'; ?> 
