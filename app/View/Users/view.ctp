<div id="content-header">
<h1>Team Member : <?php echo $user['User']['firstname']?></h1>
</div>
<div class="container-fluid">
	<div class="row-fluid">	
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-file"></i>
				</span>
				<h5><?php echo __('Team Member'); ?></h5>
			</div>
			<div class="widget-content nopadding">
				<dl class="dl-horizontal">
					<dt><?php echo __('Id'); ?></dt>
					<dd>
						<?php echo h($user['User']['id']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('First Name'); ?></dt>
					<dd>
						<?php echo h($user['User']['firstname']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Last Name'); ?></dt>
					<dd>
						<?php echo h($user['User']['lastname']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Email'); ?></dt>
					<dd>
						<?php echo h($user['User']['email']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Cost Rate'); ?></dt>
					<dd>
						<?php echo h($user['User']['costrate']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Job Title'); ?></dt>
					<dd>
						<?php echo h($user['User']['jobtitle']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('IPRO id'); ?></dt>
					<dd>
						<?php echo h($user['User']['iproid']); ?>
						&nbsp;
					</dd>
				</dl>
			</div>
			<div class="actions">
				<?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']) , array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']),  array('class' => 'btn btn-primary btn-mini'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> 
				<?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index'), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add'), array('class' => 'btn btn-primary btn-mini')); ?> 
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">	
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-th-list"></i>
				</span>
				<h5><?php echo __('Related Timesheet'); ?></h5>
			</div>
			<?php if (!empty($user['Cost'])): ?>
			<table id="DataTables_Table_0" class="table table-bordered table-striped table-hover data-table dataTable">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Date'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Billing Hours'); ?></th>
				<th><?php echo __('Fixedcost'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
				$i = 0;

				foreach ($user['Cost'] as $cost): ?>
				<tr>
					<td><?php echo $cost['id']; ?></td>
					<td><?php echo $cost['date']; ?></td>
					<td><?php echo $user['User']['firstname']; ?></td>
					<td><?php echo $cost['project_id']['project_name']; ?></td>
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
		</div>
	</div>
</div>
