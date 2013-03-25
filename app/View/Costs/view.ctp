<div class="costs view">
<h2><?php  echo __('Cost'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cost['Cost']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week'); ?></dt>
		<dd>
			<?php echo h($cost['Cost']['week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cost['User']['id'], array('controller' => 'users', 'action' => 'view', $cost['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cost['Project']['id'], array('controller' => 'projects', 'action' => 'view', $cost['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billinghours'); ?></dt>
		<dd>
			<?php echo h($cost['Cost']['billinghours']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fixedcost'); ?></dt>
		<dd>
			<?php echo h($cost['Cost']['fixedcost']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cost'), array('action' => 'edit', $cost['Cost']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cost'), array('action' => 'delete', $cost['Cost']['id']), null, __('Are you sure you want to delete # %s?', $cost['Cost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Costs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cost'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
