<div class="users form container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				
					<div class="widget-title">
						<span class="icon">
							<i class="icon-align-justify"></i>
						</span>
						<h5><?php echo __('Edit Team Member Profile'); ?></h4>

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
									
									
									<div class="actions">
										<h3><?php echo __('Actions'); ?></h3>
										<ul>

											<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
											<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
											<li><?php echo $this->Html->link(__('List Costs'), array('controller' => 'costs', 'action' => 'index')); ?> </li>
											<li><?php echo $this->Html->link(__('New Cost'), array('controller' => 'costs', 'action' => 'add')); ?> </li>
											<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
											<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					
				
			</div>
		</div>
	</div>
</div>
