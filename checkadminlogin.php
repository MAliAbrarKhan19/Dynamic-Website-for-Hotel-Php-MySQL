
<?php 
if (empty($_SESSION['admin_name'])) {
    // Admin loged in check
    header("Location: admin_login.php");
}
 ?>

<div class="row p-3">
    <div class="border-start border-warning border-4 col-md-10 offset-md-1 p-2">
        <p class="text-warning h4">Welcome to </p>
        <h1 class="display-1 text-warning "> <i class="bi bi-building "></i> HMS Admin Panel</h1>
    </div>
</div>