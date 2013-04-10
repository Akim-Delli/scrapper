<div id="content-header">
    <h1>Edit Team Member Profile</h1>
</div>
<div class="users form container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="icon-align-justify"></i>
					</span>
					<h5><?php echo __('Edit Team Member Profile:'); ?></h5>
				</div>
					<div class="widget-content nopadding">
							<?php echo $this->Form->create('User', array( 'class' => 'form-horizontal',
																		  'inputDefaults' => array(
																		        'label' => false,
																		        'div' => array('class' => 'controls')
																		    )
																	)
															); 
							?>
									<fieldset>	
									<?php echo $this->Form->input('id'); ?>
									<div class="control-group">
										<div class="control-label">First Name</div>
										<?php	echo $this->Form->input('firstname');?>
									</div>
									<div class="control-group">
										<div class="control-label">Last Name</div>
										<?php	echo $this->Form->input('lastname');?>
									</div>
									<div class="control-group">
										<div class="control-label">Email</div>
										<?php	echo $this->Form->input('email');?>
									</div>
									<div class="control-group">
										<div class="control-label">Cost Rate per Hour</div>
										<?php	echo $this->Form->input('costrate');?>
									</div>
									<div class="control-group">
										<div class="control-label">Job Title</div>
										<?php	echo $this->Form->input('jobtitle');?>
									</div>
									<div class="control-group">
										<div class="control-label">IPRO ID Number</div>
										<?php	echo $this->Form->input('iproid');?>
									</div>
									</fieldset>
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Update</button>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
