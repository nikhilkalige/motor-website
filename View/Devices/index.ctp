<div class="devices index">
	<h2><?php echo __('Devices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bootloader_version'); ?></th>
			<th><?php echo $this->Paginator->sort('device_no'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('file_link'); ?></th>
			<th><?php echo $this->Paginator->sort('variant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('firmware_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($devices as $device): ?>
	<tr>
		<td><?php echo h($device['Device']['id']); ?>&nbsp;</td>
		<td><?php echo h($device['Device']['bootloader_version']); ?>&nbsp;</td>
		<td><?php echo h($device['Device']['device_no']); ?>&nbsp;</td>
		<td><?php echo h($device['Device']['created']); ?>&nbsp;</td>
		<td><?php echo h($device['Device']['modified']); ?>&nbsp;</td>
		<td><?php echo h($device['Device']['file_link']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($device['Variant']['Codename'], array('controller' => 'variants', 'action' => 'view', $device['Variant']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($device['Firmware']['Codename'], array('controller' => 'firmwares', 'action' => 'view', $device['Firmware']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $device['Device']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $device['Device']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $device['Device']['id']), null, __('Are you sure you want to delete # %s?', $device['Device']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Device'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Variants'), array('controller' => 'variants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('controller' => 'firmwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmware'), array('controller' => 'firmwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
