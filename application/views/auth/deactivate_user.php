
<?php $this->load->view("partials/header");?>

<div class="row">
	<div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
		<div class="card bg-white shadow-sm">
			<h5 class="card-header text-secondary">
				<?php echo lang('deactivate_heading');?>      
			</h5>
			<div class="card-body bg-white">


				<?php echo form_open("auth/deactivate/".$user->id);?>

				<div class="form-group">
					<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
					<input type="radio" name="confirm" value="yes" checked="checked" />
					<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
					<input type="radio" name="confirm" value="no" />
				</div>

				<?php echo form_hidden($csrf); ?>
				<?php echo form_hidden(['id' => $user->id]); ?>

				<div class="form-group mb-0">
					<?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>       
				</div>

				<?php echo form_close();?>

			</div>
		</div>
	</div>
</div>

<?php $this->load->view("partials/footer");?>