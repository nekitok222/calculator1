

<h2 align ="center" >Таблица рассчета Сои</h2>
	<table align = "center" >
	<tr>
		<th>Месяц\Тоннаж</th> 
		<?php foreach($monthList as $key=>$value): ?>
			<th>
				<?= $value ?>
			</th>
		<?php endforeach; ?>
	</tr>
	<?php foreach($soya as $key=>$value): ?>
	<tr>
		<td>
			<?= $key ?>
		</td>
		<?php foreach ($value as $key2 => $item): ?>
			<td <?php if($key==$_POST['cargo'] && $key2==$_POST['month']){ echo "class = 'aim'";}?>>
			<?= $item  ?>
			</td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
	</table>
	