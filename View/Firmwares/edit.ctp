<div class="firmwares form">
<?php echo $this->Form->create('Firmware'); ?>
	<fieldset>
		<legend><?php echo __('Edit Firmware'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('version');
		echo $this->Form->input('file_link');
		echo $this->Form->input('Codename');
		echo $this->Form->input('Variant');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Firmware.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Firmware.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variants'), array('controller' => 'variants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
	</ul>
</div>
