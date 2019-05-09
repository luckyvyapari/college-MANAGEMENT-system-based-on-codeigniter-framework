<?php include("inc/header.php"); ?>
  <div class="container"> 



<h1>ADMIN DASHBOARD</h1>


<?php  $username=$this->session->userdata('username'); ?>
 <h5>Welcome   <?php  echo $username;   ?></h5>

 <div class="row">








<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <?php echo anchor("admin/addCollege","ADD COLLEGE",['class'=>'btn btn-primary']);?>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
   <?php echo anchor("admin/addCoAdmin","ADD CO ADMIN",['class'=>'btn btn-primary']);?>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
   <?php echo anchor("admin/addStudent","ADD STUDENT",['class'=>'btn btn-primary']);?>
  </div>
</div>






</div>




<div class="row">

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>College Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>ROLE</th>
			<th>GENDER</th>
			<th>BRANCH</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
<?php if(count($collegeUsers)): ?>
<?php foreach($collegeUsers as $collegeUser): ?>
<tr>
	
<td><?php  echo $collegeUser ->college_id;  ?></td>
<td><?php  echo $collegeUser->collegename;   ?></td>
<td><?php  echo $collegeUser ->username;     ?></td>
<td><?php  echo $collegeUser  ->email;   ?></td>
<td><?php  echo $collegeUser  ->rolename ?></td>
<td><?php  echo $collegeUser ->gender;  ?></td>
<td><?php  echo $collegeUser  ->branch;   ?></td>
<td><?php   echo anchor("admin/viewStudents/{$collegeUser ->college_id}","VIEW STUDENTs",['class'=>'btn btn-sm btn-primary']);?> </td>

</tr>


<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td>
				
no record found

			</td>
		</tr>

<?php endif; ?>
	</tbody>

</table>


</div>

  </div> 
<?php include("inc/footer.php"); ?>