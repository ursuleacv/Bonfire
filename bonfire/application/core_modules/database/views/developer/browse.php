<?php if (isset($rows) && is_array($rows) && count($rows)) :?>
	<p><b><?php e(lang('db_sql_query')); ?></b></p>

	<p><?php e($query); ?></p>

	<p><?php echo e(lang('db_total_results')); ?>: <?php echo count($rows); ?></p>

	<div class="hscroll">

		<table class="zebra-striped">
			<thead>
				<tr>
				<?php
					$heads = $rows[0];

					foreach ($heads as $field => $value)
					{
						echo "<th>$field</th>\n";
					}
				?>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($rows as $row) : ?>
				<tr>
					<?php foreach ($row as $key => $value) :?>
					<td><?php echo $value; ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

	</div>
<?php else: ?>
	<div class="notification attention">
		<p><?php e(lang('db_no_rows')); ?></p>
	</div>
<?php endif; ?>
