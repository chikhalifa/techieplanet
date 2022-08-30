<div class="col-lg-4 col-lg-offset-4">
    <h2>Hello There</h2>
    <h5>Please enter the required information below.</h5>     
<?php 
    $fattr = array('class' => 'form-signin');
    echo form_open('/main/register', $fattr); ?>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">First Name</label>
      <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
      <?php echo form_error('firstname');?>
    </div>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">Last Name</label>
      <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
      <?php echo form_error('lastname');?>
    </div>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">Government</label>
      <?php echo form_input(array('name'=>'Government', 'id'=> 'Government', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('Government');?>
    </div>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">Mathematics</label>
      <?php echo form_input(array('name'=>'Mathematics', 'id'=> 'Mathematics', 'placeholder'=>'Mathematics', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('Mathematics');?>
    </div>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">English</label>
      <?php echo form_input(array('name'=>'English', 'id'=> 'English', 'placeholder'=>'English', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('English');?>
    </div>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">Physics</label>
      <?php echo form_input(array('name'=>'Physics', 'id'=> 'Physics', 'placeholder'=>'Physics', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('Physics');?>
    </div>
    <div class="form-group"><label class="col-sm-5 col-md-4  control-label">Chemistry</label>
      <?php echo form_input(array('name'=>'Chemistry', 'id'=> 'Chemistry', 'placeholder'=>'Chemistry', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('Chemistry');?>
    </div>
    <?php echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
</div>
