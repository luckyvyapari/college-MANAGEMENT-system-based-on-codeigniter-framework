<?php include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("admin/createCollege", ['class'=>'form-horizontal']);?>
    
<?php if($message =$this->session->flashdata('message')): ?>
    <div class="row">
  <div class="col-md-6">
    <div class="alert alert-dismissible alert-sucesss">
        <?php echo $message;?>
    </div>
   
    </div> 
</div>
<?php  endif; ?>


    <h3>ADD COLLEGE</h3>
    

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label" >College Name</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' =>'collegename','class'=>'form-control', 'placeholder'=>'Enter college name','value'=>set_value('collegename')]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
               <?php echo form_error('collegename','<div class="text-danger">','</div>'); ?>
        </div>
    </div>








    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label" >Branch</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' =>'branch', 'class' => 'form-control','value'=>set_value('branch'), 'placeholder' => 'branch']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('branch','<div class="text-danger">','</div>'); ?>
        </div>
    </div>





  



    <button type="submit" class="btn btn-primary">ADD COLLEGE</button>
    <?php echo anchor("Welcome","BACK",['class'=>'btn btn-primary']);?>










    <?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
