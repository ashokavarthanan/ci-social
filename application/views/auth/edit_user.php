<?php $this->load->view("partials/header");?>

<div class="row">
  <div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
    <div class="card bg-white shadow-sm">
      <h5 class="card-header text-secondary">
        <?php echo lang('edit_user_heading');?>      
      </h5>
      <div class="card-body bg-white">

        <?php if ($message): ?>
          <div id="infoMessage" class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $message;?>
          </div>
        <?php endif ?>

        <?php echo form_open_multipart(uri_string());?>

        <div class="form-group">
          <?php $first_name['class'] = 'form-control';
          echo lang('edit_user_fname_label', 'first_name');
          echo form_input($first_name);?>
        </div>

        <div class="form-group">
          <?php $last_name['class'] = 'form-control';
          echo lang('edit_user_lname_label', 'last_name');
          echo form_input($last_name);?>
        </div>

        <div class="form-group">
          <?php $avatar['class'] = 'form-control';
          echo lang('edit_user_avatar_label', 'avatar');?>
          <input type="file" class="form-control" name="userfile" id="avatar" size="20">
        </div>

        <div class="form-group">
          <?php $company['class'] = 'form-control';
          echo lang('edit_user_company_label', 'company');
          echo form_input($company);?>
        </div>

        <div class="form-group">
          <?php $phone['class'] = 'form-control';
          echo lang('edit_user_phone_label', 'phone');
          echo form_input($phone);?>
        </div>

        <div class="form-group">
          <?php $password['class'] = 'form-control';
          echo lang('edit_user_password_label', 'password');
          echo form_input($password);?>
        </div>

        <div class="form-group">
          <?php $password_confirm['class'] = 'form-control';
          echo lang('edit_user_password_confirm_label', 'password_confirm');
          echo form_input($password_confirm);?>
        </div>

        <?php if ($this->ion_auth->is_admin()): ?>

          <p class="mb-1">
            <strong><?php echo lang('edit_user_groups_heading');?></strong>
          </p>

          <div class="form-group">
            <?php foreach ($groups as $group):?>
              <label class="checkbox">
                <?php
                $gID=$group['id'];
                $checked = null;
                $item = null;
                foreach($currentGroups as $grp) {
                  if ($gID == $grp->id) {
                    $checked= ' checked="checked"';
                    break;
                  }
                }
                ?>
                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
            <?php endforeach?>
          </div>

        <?php endif ?>

        <?php echo form_hidden('id', $user->id);?>
        <?php echo form_hidden($csrf); ?>

        <div class="form-group mt-1">
          <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>
        </div>

        <?php echo form_close();?>

      </div>
    </div>
  </div>
</div>

<?php $this->load->view("partials/footer");?>