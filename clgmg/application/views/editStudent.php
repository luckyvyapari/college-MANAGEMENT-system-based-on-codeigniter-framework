<?php include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("admin/modifyStudent/{$studentInfo->id}", ['class'=>'form-horizontal']);?>
    </div>
<?php if($message =$this->session->flashdata('message')): ?>
    <div class="row">
  <div class="col-md-6">
    <div class="alert alert-dismissible alert-success">
        <?php echo $message;?>
    </div>
   
    </div> 
</div>
<?php  endif; ?>


    <h3>UPDATE STUDENT</h3>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label">Student Name</label>
                <div class="col-md-9">
                   
                   <?php echo form_input(['name'=>'studentname','class'=>'form-control','value'=>set_value('studentname' ,$studentInfo ->studentname),'placeholder'=>'student name' ]);?>
                   
                </div>

            </div>
        </div>
        <div class="col-md-6">
               <?php echo form_error('studentname','<div class="text-danger">','</div>'); ?>

        </div>

    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label">COLLEGE NAME</label>
                <div class="col-md-9">
                   <select class="col-lg-9 control label" name="college_id">
                        <option value=<?php echo $studentInfo->college_id ?>><?php echo $studentInfo->collegename; ?></option>

                <?php if(count($colleges)):?>
                <?php foreach ($colleges as $college): ?>

 <option value=<?php echo $college -> college_id?>><?php echo $college->collegename?></option>

               <?php endforeach;?>
                <?php endif; ?>
                       
                      

                        
                    </select>
                   
                </div>

            </div>
        </div>
        <div class="col-md-6">
               <?php echo form_error('college_id','<div class="text-danger">','</div>'); ?>

        </div>

    </div>




    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label" >Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' =>'email','class'=>'form-control', 'placeholder'=>'Email','value'=>set_value('email' ,$studentInfo ->email)]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
               <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label" >Gender</label>
                <div class="col-md-9">


                    <select class="col-lg-9 control label" name="gender">
                        
                       <option value=<?php echo $studentInfo->gender ?>><?php echo $studentInfo->gender; ?></option> 
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="col-md-6">
               <?php echo form_error('gender','<div class="text-danger">','</div>'); ?>
        </div>
    </div>


   









    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label">Course</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'course', 'class' =>'form-control','value'=>set_value('course' ,$studentInfo ->course)  , 'placeholder' => 'course']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('course','<div class="text-danger">','</div>'); ?>
        </div>
    </div>




    <button type="submit" class="btn btn-primary">ADD</button>
    <?php echo anchor("Welcome","BACK",['class'=>'btn btn-primary']);?>




</div>
    <?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
