
<?php $this->load->view("partials/header");?>

<div class="row">
  <div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
    <div class="card bg-white shadow-sm">
      <h5 class="card-header text-secondary">
        <?php echo lang('login_heading');?> 
      </h5>

      <div class="card-body bg-white">
        <?php if ($message): ?>
          <div id="infoMessage" class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $message;?>
          </div>
        <?php endif ?>

        <p class="d-none"><?php echo lang('login_subheading');?></p>

        <?php echo form_open("auth/login");?>

        <div class="form-group">
          <?php $identity['class'] = 'form-control';
                echo lang('login_identity_label', 'identity');
                echo form_input($identity);?>
        </div>

        <div class="form-group">
          <?php $password['class'] = 'form-control';
                echo lang('login_password_label', 'password');
                echo form_input($password);?>
        </div>

        <div class="form-group">
          <?php $remember['class'] = 'form-control';
                echo lang('login_remember_label', 'remember');
                echo form_checkbox('remember', '1', FALSE, 'id="remember" class="ml-2"');?>
        </div>

        <div class="form-group">
          <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>        
        </div>

        <?php echo form_close();?>

        <p class="text-center mb-0">
          <a href="<?php echo base_url('auth/forgot_password');?>" class="mr-1">
            <?php echo lang('login_forgot_password');?></a>
          <a href="<?php echo base_url('auth/create_user');?>" class="ml-1">
            <?php echo lang('login_create_account');?></a>
        </p>

      </div>
    </div>
  </div>
</div>


<?php $this->load->view("partials/footer");?>