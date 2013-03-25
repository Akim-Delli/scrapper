<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costrate'); ?></dt>
		<dd>
			<?php echo h($user['User']['costrate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobtitle'); ?></dt>
		<dd>
			<?php echo h($user['User']['jobtitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iproid'); ?></dt>
		<dd>
			<?php echo h($user['User']['iproid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Costs'), array('controller' => 'costs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cost'), array('controller' => 'costs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Costs'); ?></h3>
	<?php if (!empty($user['Cost'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Week'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Billinghours'); ?></th>
		<th><?php echo __('Fixedcost'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Cost'] as $cost): ?>
		<tr>
			<td><?php echo $cost['id']; ?></td>
			<td><?php echo $cost['week']; ?></td>
			<td><?php echo $cost['user_id']; ?></td>
			<td><?php echo $cost['project_id']; ?></td>
			<td><?php echo $cost['billinghours']; ?></td>
			<td><?php echo $cost['fixedcost']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'costs', 'action' => 'view', $cost['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'costs', 'action' => 'edit', $cost['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'costs', 'action' => 'delete', $cost['id']), null, __('Are you sure you want to delete # %s?', $cost['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cost'), array('controller' => 'costs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Name'); ?></th>
		<th><?php echo __('Project Billing Code'); ?></th>
		<th><?php echo __('Project Description'); ?></th>
		<th><?php echo __('Project Client'); ?></th>
		<th><?php echo __('Project Budget'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['project_name']; ?></td>
			<td><?php echo $project['project_billing_code']; ?></td>
			<td><?php echo $project['project_description']; ?></td>
			<td><?php echo $project['project_client']; ?></td>
			<td><?php echo $project['project_budget']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
