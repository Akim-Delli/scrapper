<div id="content-header">
    <h1>Team Member List</h1>
</div>
<div class="container-fluid">
	<div class="row-fluid">	
		<div class="widget-box">
			<div class="widget-title">
				<h5><?php echo __('Team Members'); ?></h5>
			</div>
			<div class="widget-content nopadding">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
					<div class="users index">
						<table id="DataTables_Table_0" class="table table-bordered table-striped table-hover data-table dataTable">
							<tr>
								<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176px;" aria-sort="descending" aria-label="Rendering engine: activate to sort column ascending">
									<div class="DataTables_sort_wrapper">
										<?php echo $this->Paginator->sort('firstname', 'First Name'); ?>
									<span class="css_right ui-icon ui-icon-carat-2-n-s"></span>
									</div>
								</th>
							
								<th><?php echo $this->Paginator->sort('lastname', 'Last Name'); ?></th>
								<th><?php echo $this->Paginator->sort('email'); ?></th>
								<th><?php echo $this->Paginator->sort('costrate', 'Cost Rate Per Hour'); ?></th>
								<th><?php echo $this->Paginator->sort('jobtitle', 'Job Title'); ?></th>
								<th><?php echo $this->Paginator->sort('iproid', 'IPRO ID'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
							<?php foreach ($users as $user): ?>
							
							<tr>
								
								<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td></a>
								<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['costrate']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['jobtitle']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['iproid']); ?>&nbsp;</td>
							<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>