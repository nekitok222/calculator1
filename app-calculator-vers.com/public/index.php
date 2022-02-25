
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

    <form action="script.php" method ="POST">

	<h1 align="center">Калькулятор рассчета стоимости грузоперевозок</h1>
	<div class="calc">
		<div class="mounth">
		<p>Выберите месяц доставки:</p>
		<select id="mounth" class="list1" name="mounth">
			<option value="jan">Январь</option>
			<option value="feb">Февраль</option>
			<option value="aug">Август</option>
			<option value="sep">Сентябрь</option>
			<option value="oct">Октябрь</option>
			<option value="nov">Ноябрь</option>
		</select>
		</div>
		<div class="materialtype">
		<p>Выберите тип сырья:</p>
		<select id="type" class="list2" name="type">
			<option value="shrot"id = "shrot" name="shrot">Шрот</option>
			<option value="zhmyh"id = "zhmyh" name="zhmyh">Жмых</option>
			<option value="soya"id = "soya" name="soya">Соя</option>
		</select>
		</div>
		<div class="cargo">
		<p>Выберите тоннаж:</p>
		<select id="cargo" class="list3" name="cargo">
			<option value="ton25">25 тонн</option>
			<option value="ton50">50 тонн</option>
			<option value="ton75">75 тонн</option>
			<option value="ton100">100 тонн</option>
			</select>
		</div>
		
	</div>
	<div class="button">
        <input type="submit" value="Рассчитать" class="btn" name="submit">
		<div class="textarea"><p>Здесь будет показана стоимость</p>
        <div><?php echo $answer?></div>
    </div>
        
	</div>
</form>
</body>
</html>


