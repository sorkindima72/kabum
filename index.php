
<html>
<head>
<meta http-equiv=»Content-Type» content=»text/html; charset=utf-8″ />
<title>World Bank</title>

  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="ajax.js"></script> 
  <script>
	  $( function() {
		$( "#datepicker" ).datepicker();
	  } );
  </script>

</head>
<body>
<header>
<div class="heder">
	<div class="logo">
		<img src="logo.jpg">
		<div class="brend">
			WORLD BANK<br>Publications
		</div>
	</div>
	
	<div class="number">
		8-800-100-5005<br>+7(3452)522-000
	</div>
</div>



	<div class="menu">
		<ul>
			<li><a href="#" class="first item">Кредитные карты</a></li>
			<li><a href="#" class="item active">Вклады</a></li>
			<li><a href="#" class="item">Дебетовая карта</a></li>
			<li><a href="#" class="item">Страхование</a></li>
			<li><a href="#" class="item">Друзья</a></li>
			<li><a href="#" class="last item">Интернет-банк</a></li>
		</ul>
	</div>
</header>
<div class="main">
	<span><a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор</span>
	<div class="forma">
		<h1>Калькулятор  </h1><br>
		<form method="post" id="ajax_form" action="" >
			<div class="field">
				<div class="lbl">
					<label>Дата оформления вклада </label>
				</div>
				<input type="text" name="date" id="datepicker" value="гггг.мм.дд">
				<br><br>
			</div>
			
			<div class="field">
				<div class="lbl">
					<label>Сумма вклада </label>
				</div>
				<input type="text" name="summn" id="tv1" value="10000" size="8" onchange="document.getElementById('rv1').value = this.value;">
				<input type="range" min="1000" max="3000000" id="rv1" step="1000" value="10000" onchange="document.getElementById('tv1').value = this.value;">
				<div>
				<div class="oneth">1 тыс. руб.</div>
				<div class="threemil">3000000</div>
				</div>
				
			</div>
			
			<div class="field">
				<div class="lbl">
					<label>Срок вклада </label>
				</div>
				<select>
					<option>1 год</option>
					<option>2 года</option>
					<option>3 года</option>
					<option>4 года</option>
					<option>5 лет</option>
				</select><br><br>
			</div>
			
			<div class="field">
				<div class="lbl">
					<label>Пополнение вклада </label>
				</div>
				<input type="radio" class="vybor" value="no" checked name="vybor"/><span>Нет</span><input type="radio" class="vybor" value="yes" name="vybor"/><span>Да</span><br><br>
			</div>
			
			<div class="field">
				<div class="lbl">
					<label>Сумма пополнения вклада </label>
				</div>
				<input type="text" name="summadd" id="tv2" value="10000" size="8" onchange="document.getElementById('rv2').value = this.value;">
				
				<input type="range" min="1000" max="3000000" step="1000" id="rv2" value="10000" onchange="document.getElementById('tv2').value = this.value;"> 
				<div class="oneth">1 тыс. руб.</div>
				<div class="threemil">3000000</div>
			</div>
			
			
		</form>
		<div class="field">
			<input type="button" onclick="clatc()"  class="but" id="btn" value="Рассчитать" />
		<div id="result_form"></div> 
			</div>
	</div>
</div>



<footer>

<div class="foter">

		<ul>
			<li><a href="#">Кредитные карты</a></li>
			<li><a href="#">Вклады</a></li>
			<li><a href="#">Дебетовая карта</a></li>
			<li><a href="#">Страхование</a></li>
			<li><a href="#">Друзья</a></li>
			<li><a href="#">Интернет-банк</a></li>
		</ul>
</div>
</footer>
</body>


</html>
