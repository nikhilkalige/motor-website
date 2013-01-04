<div class="devices form">
<?php echo $this->Form->create('Device'); ?>
	<fieldset>
		<legend><?php echo __('Add Device'); ?></legend>
	<?php
		echo $this->Form->input('bootloader_version');
		echo $this->Form->input('device_no');
		echo $this->Form->input('file_link');
		echo $this->Form->input('variant_id');
		echo $this->Form->input('firmware_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Variants'), array('controller' => 'variants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('controller' => 'firmwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmware'), array('controller' => 'firmwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
