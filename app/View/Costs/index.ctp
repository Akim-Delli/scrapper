<div id="content-header">
    <h1>Timesheet / Billing Hours</h1>
</div>
<div class="costs index">
	<div class="container-fluid">
		<div class="row-fluid">	
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="icon icon-th-list"></i>
					</span>
					<h5><?php echo __('TimeSheet'); ?></h5>
				</div>
				<div class="widget-content nopadding">
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
						<div class="users index">
							<table id="DataTables_Table_0" class="table table-bordered table-striped table-hover data-table dataTable">
								<tr>
										<div class="DataTables_sort_wrapper">
											
											<th><?php echo $this->Paginator->sort('date', 'Date'); ?></th>
											<th><?php echo $this->Paginator->sort('user_id', 'Team Member'); ?></th>
											<th><?php echo $this->Paginator->sort('project_id', 'Project'); ?></th>
											<th><?php echo $this->Paginator->sort('billinghours', 'Billing Hours'); ?></th>
											<th><?php echo $this->Paginator->sort('fixedcost', 'Fixed Cost'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
								<?php foreach ($costs as $cost): ?>
									<tr>
										<td><?php echo h($cost['Cost']['date']); ?>&nbsp;</td>
										<td>
											<?php echo $this->Html->link($cost['User']['firstname'], array('controller' => 'users', 'action' => 'view', $cost['User']['id'])); ?>
										</td>
										<td>
											<?php echo $this->Html->link($cost['Project']['project_name'], array('controller' => 'projects', 'action' => 'view', $cost['Project']['id'])); ?>
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
							<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
								<div id="DataTables_Table_0_filter" class="dataTables_filter">
									<?php
									echo $this->Paginator->counter(array(
									'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
									));
									?>
								</div>
								<div id="DataTables_Table_0_paginate" class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers">
								<?php
									echo $this->Paginator->prev('< ' . __('previous'), array('class' => 'previous ui-corner-tr ui-corner-br fg-button ui-button ui-state-default'), null, array('class' => 'previous ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default disabled'));
									echo $this->Paginator->numbers(array('separator' => '', 'class' => 'fg-button ui-button ui-state-default' ));
									echo $this->Paginator->next(__('next') . ' >', array('class' => 'next ui-corner-tr ui-corner-br fg-button ui-button ui-state-default'), null, array('class' => 'next ui-corner-tr ui-corner-br fg-button ui-button ui-state-default disabled'));
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
