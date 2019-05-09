
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>College Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src= "<?php echo base_url("assets/js/jquery-3.3.1.slim.min.js"); ?>"></script>
    <script src= "<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src= "<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script> 




  </head>
  <body>
    
 <!--    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"  href="#">COLLEGE MANAGEMENT SYSTEM</a> -->


<nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark text-white">
  <div class="container-fluid">
    <div class="navbar-header col-lg-10">
        <a class="navbar-brand"  href="#">COLLEGE MANAGEMENT SYSTEM</a>

      
    </div>
    <div class="col-lg-2" style = "margin-top: 15px;" id ="bs-example-navbar-collaspse-2">
      <div class="btn-group">
        <a href ="#" class="btn btn-default">Settings</a>
        <a href="#" class="btn btn-default dropdown-toggle" data-toggle ="dropdown"  aria-expanded ="false"><span class="caret"></span></a>
        <ul class ="dropdown-menu">
          <?php 
          $user_id =$this->session->userdata('user_id');
          ?>

      <?php 
//$roleid =$this->session->userdata('role_id');

         ?>


<!-- <?php //if ($user_id == '1'): ?>

          <li><?php //echo anchor("admin/dashboard" ,'Dashboard'); ?></li>
          <li><?php //echo anchor("admin/coadmins" ,'view co Admin'); ?></li>
           <li><?php// echo anchor("welcome/logout" ,'Logout'); ?></li>
  

<?php //else: ?>

 <li><?php //echo anchor("welcome/logout" ,'Logout'); ?></li>



<?php//endif; ?>  -->




<?php if ($user_id == '1'): ?>

       <li><?php echo anchor("admin/dashboard" ,'Dashboard'); ?></li>
          <li><?php echo anchor("admin/coadmins" ,'view co Admin'); ?></li>
           <li><?php echo anchor("welcome/logout" ,'Logout'); ?></li>
  

<?php elseif ($user_id == ''): ?>

        <h3>please login</h3>

<?php else: ?>

         <li><?php echo anchor("welcome/logout" ,'Logout'); ?></li>

<?php endif; ?>























        
        </ul>
      </div>
    </div>
  </div>
</nav>







    <!--    -->

    