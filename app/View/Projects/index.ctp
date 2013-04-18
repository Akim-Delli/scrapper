<div id="content-header">
    <h1>Projects List</h1>
</div>
<div class="container-fluid">
	<div class="row-fluid">	
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-align-justify"></i>
				</span>
				<h5><?php echo __('Projects'); ?></h5>
			</div>
			<div class="widget-content nopadding">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
					<div class="users index">
						<table id="DataTables_Table_0" class="table table-bordered table-striped table-hover data-table dataTable">
							<tr>
								<th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="descending" aria-label="Rendering engine: activate to sort column ascending">
									<div class="DataTables_sort_wrapper">
										<?php echo $this->Paginator->sort('id'); ?>
										<span class="css_right ui-icon ui-icon-carat-2-n-s"></span>
									</div>
								</th>
								<th><?php echo $this->Paginator->sort('project_name'); ?></th>
								<th><?php echo $this->Paginator->sort('project_billing_code'); ?></th>
								<th><?php echo $this->Paginator->sort('project_description'); ?></th>
								<th><?php echo $this->Paginator->sort('project_client'); ?></th>
								<th><?php echo $this->Paginator->sort('project_budget'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
							<?php foreach ($projects as $project): ?>
							<tr>
								<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
								<td><?php echo h($project['Project']['project_name']); ?>&nbsp;</td>
								<td><?php echo h($project['Project']['project_billing_code']); ?>&nbsp;</td>
								<td><?php echo h($project['Project']['project_description']); ?>&nbsp;</td>
								<td><?php echo h($project['Project']['project_client']); ?>&nbsp;</td>
								<td><?php echo $this->Number->currency(h($project['Project']['project_budget']), 'USD', array('places'  => 0)); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id'])); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id'])); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
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
