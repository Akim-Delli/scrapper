<div class="costs form">
<?php echo $this->Form->create('Cost'); ?>
	<fieldset>
		<legend><?php echo __('Add Cost'); ?></legend>
	<?php
		echo $this->Form->input('week');
		echo $this->Form->input('user_id');
		echo $this->Form->input('project_id');
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
