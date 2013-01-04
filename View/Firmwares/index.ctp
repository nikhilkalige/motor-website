<div class="firmwares index">
	<h2><?php echo __('Firmwares'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('file_link'); ?></th>
			<th><?php echo $this->Paginator->sort('Codename'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($firmwares as $firmware): ?>
	<tr>
		<td><?php echo h($firmware['Firmware']['id']); ?>&nbsp;</td>
		<td><?php echo h($firmware['Firmware']['version']); ?>&nbsp;</td>
		<td><?php echo h($firmware['Firmware']['created']); ?>&nbsp;</td>
		<td><?php echo h($firmware['Firmware']['file_link']); ?>&nbsp;</td>
		<td><?php echo h($firmware['Firmware']['Codename']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $firmware['Firmware']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $firmware['Firmware']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $firmware['Firmware']['id']), null, __('Are you sure you want to delete # %s?', $firmware['Firmware']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Firmware'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variants'), array('controller' => 'variants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variant'), array('controller' => 'variants', 'action' => 'add')); ?> </li>
	</ul>
</div>
