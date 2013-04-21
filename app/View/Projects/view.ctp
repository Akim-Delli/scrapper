<div id="content-header">
    <h1>Project : <?php echo $project['Project']['project_name']; ?></h1>
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
						<?php echo h($project['Project']['id']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Project Name'); ?></dt>
					<dd>
						<?php echo h($project['Project']['project_name']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Billing Code'); ?></dt>
					<dd>
						<?php echo h($project['Project']['project_billing_code']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Project Description'); ?></dt>
					<dd>
						<?php echo h($project['Project']['project_description']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Client'); ?></dt>
					<dd>
						<?php echo h($project['Project']['project_client']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Budget'); ?></dt>
					<dd>
						<?php echo h($project['Project']['project_budget']); ?>
						&nbsp;
					</dd>
				</dl>
			</div>
			<div class="actions">
				<?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id']), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('New Project'), array('action' => 'add'), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('List Costs'), array('controller' => 'costs', 'action' => 'index'), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-primary btn-mini')); ?> 
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary btn-mini')); ?> 
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
			<?php if (!empty($project['Cost'])): ?>
			<table id="DataTables_Table_0" class="table table-bordered table-striped table-hover data-table dataTable">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Date'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Billinghours'); ?></th>
				<th><?php echo __('Fixedcost'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
				$i = 0;
				debug($project);
				foreach ($project['Cost'] as $cost): ?>
				<tr>
					<td><?php echo $cost['id']; ?></td>
					<td><?php echo $cost['date']; ?></td>
					<td><?php echo $cost['user_id']; ?></td>
					<td><?php echo $project['Project']['project_name']; ?></td>
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
