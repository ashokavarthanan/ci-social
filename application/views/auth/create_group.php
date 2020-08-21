<?php $this->load->view("partials/header");?>

<div class="row">
	<div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
		<div class="card bg-white shadow-sm">
			<h5 class="card-header text-secondary">
				<?php echo lang('create_group_heading');?>      
			</h5>
			<div class="card-body bg-white">
				<?php if ($message): ?>
					<div id="infoMessage" class="alert alert-danger alert-dismissible fade show">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $message;?>
					</div>
				<?php endif ?>

				<?php echo form_open("auth/create_group");?>

				<div class="form-group">
					<?php $group_name['class'] = 'form-control';
					echo lang('create_group_name_label', 'group_name');
					echo form_input($group_name);?>
				</div>

				<div class="form-group">
					<?php $description['class'] = 'form-control';
					echo lang('create_group_desc_label', 'description');
					echo form_input($description);?>
				</div>

				<div class="form-group mb-0">
					<?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-block btn-md btn-primary"');?>       
				</div>

				<?php echo form_close();?>

			</div>
		</div>
	</div>
</div>

<?php $this->load->view("partials/footer");?>