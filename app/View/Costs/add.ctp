<div class="costs form">
<?php echo $this->Form->create('Cost'); ?>
	<fieldset>
		<legend><?php echo __('Add Billing Hours'); ?></legend>
	<?php
		echo $this->Form->input('date', array('dateFormat' => 'DMY'
											  , 'minYear' => date('Y') + 1
                        					  , 'maxYear' => date('Y') - 1 ));
		echo $this->Form->input('user_id', array( 'type'    => 'select','options' => $usersfirstname));
		echo $this->Form->input('project_id', array( 'type' => 'select','options' => $projectslist));
		echo $this->Form->input('billinghours');
		echo $this->Form->input('fixedcost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Costs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
