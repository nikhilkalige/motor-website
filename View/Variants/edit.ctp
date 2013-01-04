<div class="variants form">
<?php echo $this->Form->create('Variant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Variant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('version');
		echo $this->Form->input('Codename');
		echo $this->Form->input('Firmware');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Variant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Variant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Variants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('controller' => 'firmwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmware'), array('controller' => 'firmwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
