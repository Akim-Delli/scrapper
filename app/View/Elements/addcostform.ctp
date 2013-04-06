<div class="costs form">
<?php echo $this->Form->create('Cost'); ?>
    <fieldset>
    <?php
        echo $this->Form->input('date', array('dateFormat' => 'DMY'
                                              , 'minYear' => date('Y') + 1
                                              , 'maxYear' => date('Y') - 1 ));
        echo $this->Form->input('user_id', array( 'type'    => 'select', 'label' => 'Team Member', 'options' => $usersfirstname));
        echo $this->Form->input('project_id', array( 'type' => 'select', 'options' => $projectslist));
        echo $this->Form->input('billinghours' , array('label' => 'Billing Hours'));
        echo $this->Form->input('fixedcost', array( 'label' => 'Fixed Cost'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('add cost')); ?>
</div>

