<div id="content-header">
    <h1>Timesheet / Billing Hours</h1>
</div>
<div class="costs index">
	<div class="container-fluid">
		<div class="row-fluid">	
			<div class="widget-box">
				<div class="widget-title">
					<h5><?php echo __('TimeSheet'); ?></h5>
				</div>
				<div class="widget-content nopadding">
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
						<div class="users index">
							<table id="DataTables_Table_0" class="table table-bordered table-striped table-hover data-table dataTable">
								<tr>
									<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176px;" aria-sort="descending" aria-label="Rendering engine: activate to sort column ascending">
										<div class="DataTables_sort_wrapper">
											<?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('date'); ?></th>
											<th><?php echo $this->Paginator->sort('user_id'); ?></th>
											<th><?php echo $this->Paginator->sort('project_id'); ?></th>
											<th><?php echo $this->Paginator->sort('billinghours'); ?></th>
											<th><?php echo $this->Paginator->sort('fixedcost'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
								<?php foreach ($costs as $cost): ?>
									<tr>
										<td><?php echo h($cost['Cost']['id']); ?>&nbsp;</td>
										<td><?php echo h($cost['Cost']['date']); ?>&nbsp;</td>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
