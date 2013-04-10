<div id="content-header">
    <h1>New Team Member</h1>
</div>
<div class="users form container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="icon-align-justify"></i>
					</span>
					<h5><?php echo __('New Team Member'); ?></h5>
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
					<div class="control-group">
								<div class="control-label">First Name</div>
								<?php echo $this->Form->input('firstname');  ?>
					</div>
					<div class="control-group">
								<div class="control-label">Last Name</div>
								<?php 	echo $this->Form->input('lastname'); ?>
					</div>
					<div class="control-group">
								<div class="control-label">Email</div>
								<?php 	echo $this->Form->input('email');  ?>
					</div>
					<div class="control-group">
								<div class="control-label">Cost (Rate per Hour)</div>
								<?php 	echo $this->Form->input('costrate');  ?>
					</div>
					<div class="control-group">
								<div class="control-label">Job Title</div>
								<?php 	echo $this->Form->input('jobtitle');  ?>
					</div>
					<div class="control-group">
								<div class="control-label">IPRO ID</div>
								<?php 	echo $this->Form->input('iproid');  ?>
					</div>
					<div class="form-actions">
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>
				</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
