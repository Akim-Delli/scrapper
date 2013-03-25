<div class="costs index">
	<h2><?php echo __('Costs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('week'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('billinghours'); ?></th>
			<th><?php echo $this->Paginator->sort('fixedcost'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($costs as $cost): ?>
	<tr>
		<td><?php echo h($cost['Cost']['id']); ?>&nbsp;</td>
		<td><?php echo h($cost['Cost']['week']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cost['User']['id'], array('controller' => 'users', 'action' => 'view', $cost['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cost['Project']['id'], array('controller' => 'projects', 'action' => 'view', $cost['Project']['id'])); ?>
		</td>
		<td><?php echo h($cost['Cost']['billinghours']); ?>&nbsp;</td>
		<td><?php echo h($cost['Cost']['fixedcost']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cost['Cost']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cost['Cost']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cost['Cost']['id']), null, __('Are you sure you want to delete # %s?', $cost['Cost']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cost'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
