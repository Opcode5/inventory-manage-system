<?php include('admin_header.php'); ?>

<div class="container">
<div class="col-lg-14">
  
  <?php $attributes=array('class'=> 'form-horizontal'); ?>
  <?php echo form_open('signup/add_admin', $attributes); ?>

<h1>User Register</h1>
  <hr>

  <?php if($error = $this->session->flashdata('feedback')): 
      $feedback_class = $this->session->flashdata('feedback_class');      
?>
    <div class="alert alert-dismissible <?= $feedback_class ?>">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php echo $error; ?>
    </div>
  <?php endif; ?>

  <div class="form-group">
      <label for="inputFirstname" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'first_name', 'class'=>'form-control', 'id'=>'inputFirstname', 'type'=>'text', 'placeholder'=>'Firstname']); ?>
        <?php echo form_error('first_name', "<p class='text-danger'>", "</p>"); ?>
      </div>

    </div>

    <div class="form-group">
      <label for="inputLastname" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'last_name', 'class'=>'form-control', 'id'=>'inputLastname', 'type'=>'text', 'placeholder'=>'Lastname']); ?>
        <?php echo form_error('last_name', "<p class='text-danger'>", "</p>"); ?>
      </div>

    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'email', 'class'=>'form-control', 'id'=>'inputEmail', 'type'=>'text', 'placeholder'=>'Email']); ?>
        <?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?>
      </div>

    </div>

    <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">User Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'username', 'class'=>'form-control', 'id'=>'inputUsername', 'type'=>'text', 'placeholder'=>'Username']); ?>
        <?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?>
      </div>

    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <?php 

      $password=array(

        'name' =>'password',
        'class'=>'form-control',
        'type'=>'password',
        'placeholder'=>'Password'
        );
      ?>
      <?php echo form_input($password); ?>
       <?php echo form_error('password', "<p class='text-danger'>", "</p>"); ?>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php echo 
        form_reset(['name'=>'reset', 'class'=>'btn btn-default', 'value'=>'Reset', 'type'=>'reset']), 
        form_submit(['name'=>'submit', 'class'=>'btn btn-primary', 'value'=>'Sign Up', 'type'=>'submit']); 
        ?>
      </div>
    </div>

<?php echo form_close(); ?>
</div>
<br><br><br><br>

<?php include('admin_footer.php'); ?>

