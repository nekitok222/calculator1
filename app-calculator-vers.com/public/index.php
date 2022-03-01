<?php
// через рекваер и переименовать в ресурс дата положить его в папку конфиг
include 'data.php';
// include 'script.php';
$ton=$_POST['cargo'];
$month=$_POST['month'];

if ($_POST['type']=='shrot'){
    $answer = $shrot[$ton][$month];
}
else if($_POST['type']=='zhmyh'){
    $answer = $zhmyh[$ton][$month];

}
else if($_POST['type']=='soya'){
    $answer = $soya[$ton][$month];

}


?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Калькулятор рассчета стоимости грузоперевозок</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form method ="POST">
<!-- Убрать алайн -->
<!-- убрать числовые значения в неймингах -->
<!-- От корня структура public , а паблике css , на том же уровне где паблик - папка app, на том же уровне где app и public - config -->
	<h1 align="center">Калькулятор рассчета стоимости грузоперевозок</h1>
	<div class="calc">
		<div class="mounth">
		<p>Выберите месяц доставки:</p>
		<select id="month" class="list1" name="month">
			<?php foreach($monthList as $key => $value): ?>
				<?php echo "<option value='$key'>$value</option>" ?>
			<?php endforeach ?>
		</select>
		</div>
		<div class="materialtype">
		<p>Выберите тип сырья:</p>
		<select id="type" class="list1" name="type">
			<?php foreach($typeList as $key=>$value): ?>
				<?php echo "<option value='$key'>$value</option>" ?>
			<?php endforeach ?>
		</select>
		</div>
		<div class="cargo">
		<p>Выберите тоннаж товара:</p>
		<select id="cargo" class="list1" name="cargo">
			<?php foreach($cargoList as $key): ?>
				<?php echo "<option value='$key'>$key</option>" ?>
			<?php endforeach ?>
		</select>
		</div>
		
	</div>
	<div class="button">
        <input type="submit" value="Рассчитать" class="btn">
		<div class="textarea">Ответ:<br><?php echo $_POST['cargo'].', '.$_POST['month'].' = '.$answer; if($answer){echo ' тонн';};?></div>
    </div>
	</form>
	<?php
	if ($_POST['type']=='shrot'){
    include 'shrot.php';
}
else if($_POST['type']=='zhmyh'){
    include 'zhmyh.php';

}
else if($_POST['type']=='soya'){
    include 'soya.php';

}
else{};
	?>
</body>
</html>

<!-- Без лишних файлов -->
