<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
		</tr>
		
		<?php foreach ($students as $student) { ?>
			<tr>
				<td><?= $student["student_id"] ?></td>
				<td><?= $student["student_name"] ?></td>
			</tr>
		<?php } ?>

	</table>
</div>