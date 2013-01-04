<div class="variants view">
<h2><?php  echo __('Variant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($variant['Variant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($variant['Variant']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($variant['Variant']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codename'); ?></dt>
		<dd>
			<?php echo h($variant['Variant']['Codename']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Variant'), array('action' => 'edit', $variant['Variant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Variant'), array('action' => 'delete', $variant['Variant']['id']), null, __('Are you sure you want to delete # %s?', $variant['Variant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Variants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('controller' => 'firmwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmware'), array('controller' => 'firmwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Devices'); ?></h3>
	<?php if (!empty($variant['Device'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bootloader Version'); ?></th>
		<th><?php echo __('Device No'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('File Link'); ?></th>
		<th><?php echo __('Variant Id'); ?></th>
		<th><?php echo __('Firmware Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($variant['Device'] as $device): ?>
		<tr>
			<td><?php echo $device['id']; ?></td>
			<td><?php echo $device['bootloader_version']; ?></td>
			<td><?php echo $device['device_no']; ?></td>
			<td><?php echo $device['created']; ?></td>
			<td><?php echo $device['modified']; ?></td>
			<td><?php echo $device['file_link']; ?></td>
			<td><?php echo $device['variant_id']; ?></td>
			<td><?php echo $device['firmware_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devices', 'action' => 'view', $device['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devices', 'action' => 'edit', $device['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devices', 'action' => 'delete', $device['id']), null, __('Are you sure you want to delete # %s?', $device['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Firmwares'); ?></h3>
	<?php if (!empty($variant['Firmware'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('File Link'); ?></th>
		<th><?php echo __('Codename'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($variant['Firmware'] as $firmware): ?>
		<tr>
			<td><?php echo $firmware['id']; ?></td>
			<td><?php echo $firmware['version']; ?></td>
			<td><?php echo $firmware['created']; ?></td>
			<td><?php echo $firmware['file_link']; ?></td>
			<td><?php echo $firmware['Codename']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'firmwares', 'action' => 'view', $firmware['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'firmwares', 'action' => 'edit', $firmware['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'firmwares', 'action' => 'delete', $firmware['id']), null, __('Are you sure you want to delete # %s?', $firmware['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Firmware'), array('controller' => 'firmwares', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
