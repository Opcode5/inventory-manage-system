  <?php include('public_header.php'); ?>

  <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Login</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php $attributes=array('class'=> 'form-horizontal'); ?>
                    <?php echo form_open('login/admin_login', $attributes); ?>
                      <br><br><br><br><br><br><br><br><br>

                      <?php if($error = $this->session->flashdata('login_failed')): ?>
                        <div class="alert alert-dismissible alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <?php echo $error; ?>
                        </div>
                      <?php endif; ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <?php echo form_input(['name'=>'username', 'class'=>'form-control col-md-7 col-xs-12', 'id'=>'name', 'type'=>'text', 'placeholder'=>'Username']); ?>
                          <?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Password <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          <?php 

                            $password=array(

                              'name' =>'password',
                              'class'=>'form-control col-md-7 col-xs-12',
                              'type'=>'password',
                              'placeholder'=>'Password'
                              );
                            ?>
                            <?php echo form_input($password); ?>
                            <?php echo form_error('password', "<p class='text-danger'>", "</p>"); ?>

                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <?php echo 
                          form_reset(['name'=>'reset', 'class'=>'btn btn-default', 'value'=>'Reset', 'type'=>'reset']), 
                          form_submit(['name'=>'submit', 'class'=>'btn btn-success', 'value'=>'Login', 'type'=>'submit']); 
                          ?>
                        </div>
                      </div>
                      <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
<?php include('public_footer.php'); ?>
