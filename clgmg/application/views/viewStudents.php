<?php include("inc/header.php"); ?>
  <div class="container"> 



<h1>VIEW STUDENTS</h1>
<!-- 






<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <?php //echo anchor("admin/addCollege","ADD COLLEGE",['class'=>'btn btn-primary']);?>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
   <?php //echo anchor("admin/addCoAdmin","ADD CO ADMIN",['class'=>'btn btn-primary']);?>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
   <?php// echo anchor("admin/addStudent","ADD STUDENT",['class'=>'btn btn-primary']);?>
  </div>
</div>
 -->


<div class="row">

<table class="table table-hover">
	<thead>
		<tr>
			<th>Student Name</th>
			<th>College Name</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Course</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
<?php if(count($students)): ?>
<?php foreach($students as $student): ?>
<tr>
	
<td><?php  echo $student->studentname;  ?></td>
<td><?php  echo $student ->collegename;     ?></td>
<td><?php  echo $student ->gender;  ?></td>
<td><?php  echo $student  ->email;   ?></td>

<td><?php  echo $student  ->course;   ?></td>
<td><?php   echo anchor("admin/editStudent/{$student ->id}","Edit",['class'=>'btn btn-sm btn-primary']);?> </td>
<td><?php   echo anchor("admin/deleteStudent/{$student ->id}","Delete",['class'=>'btn btn-sm btn-danger']);?> </td>
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