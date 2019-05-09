<?php include("inc/header.php"); ?>
  <div class="container"> 



<h1> CO ADMIN DASHBOARD</h1>


<?php  $username=$this->session->userdata('username'); ?>
 <h5>Welcome   <?php  echo $username;   ?></h5>

 <div class="row">




</div>




<div class="row">

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Student name</th>
			<th>College Name</th>
			<th>Email</th>
			
			<th>Gender</th>
			<th>course</th>
			
		</tr>
	</thead>
	<tbody>
<?php if(count($students)): ?>
<?php foreach($students as $student): ?>
<tr>
	
<td><?php  echo $student ->id;  ?></td>
<td><?php  echo $student->studentname;   ?></td>
<td><?php  echo $student ->collegename;     ?></td>
<td><?php  echo $student  ->email;   ?></td>
<td><?php  echo $student  ->gender;  ?></td>
<td><?php  echo $student  ->course;   ?></td>


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