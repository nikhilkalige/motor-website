<div class="devices view">
<h2><?php  echo __('Device'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($device['Device']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bootloader Version'); ?></dt>
		<dd>
			<?php echo h($device['Device']['bootloader_version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device No'); ?></dt>
		<dd>
			<?php echo h($device['Device']['device_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($device['Device']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($device['Device']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Link'); ?></dt>
		<dd>
			<?php echo h($device['Device']['file_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['Variant']['id'], array('controller' => 'variants', 'action' => 'view', $device['Variant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firmware'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['Firmware']['id'], array('controller' => 'firmwares', 'action' => 'view', $device['Firmware']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device'), array('action' => 'edit', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device'), array('action' => 'delete', $device['Device']['id']), null, __('Are you sure you want to delete # %s?', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variants'), array('controller' => 'variants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('controller' => 'firmwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmware'), array('controller' => 'firmwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
