<?php $this->load->view("partials/header");?>

<div class="row">
  <div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
    <div class="card bg-white shadow-sm">
      <h5 class="card-header text-secondary">
        <?php echo lang('change_password_heading');?>      
      </h5>
      <div class="card-body bg-white">

        <?php if ($message): ?>
          <div id="infoMessage" class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $message;?>
          </div>
        <?php endif ?>

        <?php echo form_open("auth/change_password");?>

        <div class="form-group">
         <?php $old_password['class'] = 'form-control';
         echo lang('change_password_old_password_label', 'old_password');
         echo form_input($old_password);?>
       </div>

       <div class="form-group">
        <?php $new_password['class'] = 'form-control';
        echo sprintf(lang('change_password_new_password_label'), $min_password_length);
        echo form_input($new_password);?>
      </div>

      <div class="form-group">
       <?php $new_password_confirm['class'] = 'form-control';
       echo lang('change_password_new_password_confirm_label', 'new_password_confirm');
       echo form_input($new_password_confirm);?>
     </div>

     <?php echo form_input($user_id);?>

     <div class="form-group mt-1">
      <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>
    </div>

    <?php echo form_close();?>

  </div>
</div>
</div>
</div>

<?php $this->load->view("partials/footer");?>