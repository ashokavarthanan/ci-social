<?php $this->load->view("partials/header");?>

<div class="row">
	<div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
		<div class="card bg-white shadow-sm">
			<h5 class="card-header text-secondary">
				<?php echo lang('forgot_password_heading');?>      
			</h5>
			<div class="card-body bg-white">
				<?php if ($message): ?>
					<div id="infoMessage" class="alert alert-danger alert-dismissible fade show">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $message;?>
					</div>
				<?php endif ?>

				<p class="d-none"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>


				<?php echo form_open("auth/forgot_password");?>

				<div class="form-group">
					<label for="identity">
						<?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> 
						<?php $identity['class'] = 'form-control';	
						echo form_input($identity);?>
					</div>

					<div class="form-group mb-0">
						<?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>        
					</div>

					<?php echo form_close();?>

				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("partials/footer");?>
