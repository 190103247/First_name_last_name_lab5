<html>

<head>
<meta charset="utf-8">
</head>
<body>
<form method="POST" action="index.php">
	<div class = "inputs">
	<input type="text" placeholder="Автомобиль маркасы" name="car_name">
	<input type="text" placeholder="Дөнгелектер саны" name = "car_w">
	<input type="date" name="date" min="1990-01-01" max="2022-01-01">
	<input type="text" name="weight" placeholder="Масса">
	<input type="text" name="color" placeholder="Түсі">
	</div>
	
	<div class = "submits">
	<input type="submit" name ="add" value="Қосу">
	<input type="submit" name ="choice" value="Таңдау">
	<input type="submit" name ="change" value="Өзгерту">
	<input type="submit" name ="delete" value="Өшіру">
	</div>
</form>
</body>
</html>