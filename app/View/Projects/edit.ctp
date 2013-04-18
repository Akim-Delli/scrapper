<div id="content-header">
    <h1>Edit Project</h1>
</div>
<div class="projects form container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="icon-pencil"></i>
					</span>
					<h5><?php echo __('Edit Project'); ?></h5>
				</div>
				<div class="widget-content nopadding">
					<?php echo $this->Form->create('Project', array( 'class' => 'form-horizontal',
																			  'inputDefaults' => array(
																			        'label' => false,
																			        'div' => array('class' => 'controls')
																			    )
																	)
													); 
					?>
				<fieldset>
					
					<?php 	echo $this->Form->input('id'); ?>
					
					<div class="control-group">
							<div class="control-label">Project Name</div>
							<?php echo $this->Form->input('project_name'); ?>
					</div>
					<div class="control-group">
							<div class="control-label">Billing Code</div>
							<?php echo $this->Form->input('project_billing_code'); ?>
					</div>
					<div class="control-group">
						<div class="control-label">Project Description</div>
						<?php echo $this->Form->input('project_description'); ?>
					</div>
					<div class="control-group">
						<div class="control-label">Project Client</div>
						<?php echo $this->Form->input('project_client'); ?>
					</div>
					<div class="control-group">
						<div class="control-label">Budget</div>
						<?php echo $this->Form->input('project_budget'); ?>
					</div>
					<div class="form-actions">
							<button class="btn btn-primary" type="submit">Update</button>
						</div>
				</fieldset>	
			</div>
			</div>
		</div>
	</div>
</div>
