<?php include("inc/header.php"); ?>
  <div class="container"> 



<h1>CO ADMINS</h1>

<hr>






<div class="row">

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>College name</th>
			<th>Email</th>
			<th>GENDER</th>
			<th>Branch</th>
		</tr>
	</thead>
	<tbody>
<?php if(count($coadmins)): ?>
<?php foreach($coadmins as $coadmins): ?>
<tr>
	
<td><?php  echo $coadmins ->user_id;  ?></td>
<td><?php  echo $coadmins->username;   ?></td>
<td><?php  echo $coadmins ->collegename;     ?></td>
<td><?php  echo $coadmins  ->email;   ?></td>
<td><?php  echo $coadmins ->gender;  ?></td>
<td><?php  echo $coadmins  ->branch;   ?></td>


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