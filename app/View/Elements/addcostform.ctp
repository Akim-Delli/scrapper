<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-pencil"></i>
                    </span>
                    <h5>Add Billing Hours</h5>
                </div>
                <div class="widget-content nopadding" style="display: none;">
                        <div class="costs form">
                        <?php echo $this->Form->create('Cost', array( 'class' => 'form-horizontal',
                                                                      'inputDefaults' => array(
                                                                                                'label' => false,
                                                                                                'div' => array('class' => 'controls')
                                                                                            )
                                                                    )
                                                        );
                        ?>
                            <fieldset>
                                <div class="control-group">
                                    <div class="control-label">Date</div>
                                    
                                        <?php echo $this->Form->input('date', array('dateFormat' => 'DMY'
                                                                            , 'minYear' => date('Y') + 1
                                                                            , 'maxYear' => date('Y') - 1 ));
                                        ?>
                                </div>
                                <div class="control-group">
                                    <div class="control-label">Team Member</div>
                                        <?php echo $this->Form->input('user_id', array( 'type'  => 'select', 'options' => $usersfirstname)); ?>
                                </div>
                                <div class="control-group">
                                    <div class="control-label">Project</div>
                                    <?php echo $this->Form->input('project_id', array( 'type' => 'select', 'options' => $projectslist)); ?>
                                </div>
                                <div class="control-group">

                                    <div class="control-label">Billing Hours</div>
                                    
                                        <?php echo $this->Form->input('billinghours'); ?>
                                    </div>
                                <div class="control-group">
                                    <div class="control-label">Fixed Cost</div>
                                    <?php echo $this->Form->input('fixedcost'); ?>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-primary" type="submit">add Billing Hours</button>
                                </div>
                            </fieldset>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="log" class="container-fluid"></div>
