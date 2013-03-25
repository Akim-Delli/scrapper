<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Billing Code'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_billing_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Client'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Budget'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_budget']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Costs'), array('controller' => 'costs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cost'), array('controller' => 'costs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Costs'); ?></h3>
	<?php if (!empty($project['Cost'])): ?>
	<table cellpadding = "0" cellspacing = "0">
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
		foreach ($project['Cost'] as $cost): ?>
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
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($project['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Costrate'); ?></th>
		<th><?php echo __('Jobtitle'); ?></th>
		<th><?php echo __('Iproid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['firstname']; ?></td>
			<td><?php echo $user['lastname']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['costrate']; ?></td>
			<td><?php echo $user['jobtitle']; ?></td>
			<td><?php echo $user['iproid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
