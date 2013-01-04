<div class="firmwares view">
<h2><?php  echo __('Firmware'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($firmware['Firmware']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($firmware['Firmware']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($firmware['Firmware']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Link'); ?></dt>
		<dd>
			<?php echo h($firmware['Firmware']['file_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codename'); ?></dt>
		<dd>
			<?php echo h($firmware['Firmware']['Codename']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Firmware'), array('action' => 'edit', $firmware['Firmware']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Firmware'), array('action' => 'delete', $firmware['Firmware']['id']), null, __('Are you sure you want to delete # %s?', $firmware['Firmware']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmwares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmware'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variants'), array('controller' => 'variants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Devices'); ?></h3>
	<?php if (!empty($firmware['Device'])): ?>
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
		foreach ($firmware['Device'] as $device): ?>
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
	<h3><?php echo __('Related Variants'); ?></h3>
	<?php if (!empty($firmware['Variant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Codename'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($firmware['Variant'] as $variant): ?>
		<tr>
			<td><?php echo $variant['id']; ?></td>
			<td><?php echo $variant['version']; ?></td>
			<td><?php echo $variant['created']; ?></td>
			<td><?php echo $variant['Codename']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'variants', 'action' => 'view', $variant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'variants', 'action' => 'edit', $variant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'variants', 'action' => 'delete', $variant['id']), null, __('Are you sure you want to delete # %s?', $variant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
