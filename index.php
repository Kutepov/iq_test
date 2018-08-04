<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/calc.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<title>World Bank</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-sm-6 text-center text-sm-left"> <a href="#"><img src="img/logo.png" alt="logo"></a></div>
				<div class="col-sm-6 text-center text-sm-right"> <span class="phone">8-800-100-5005</span><br><span class="phone">+7 (3452) 522-000</span></div>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-sm wrapper-menu">
		<button id="toggle-button-menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			Меню
		</button>
		<div class="collapse navbar-collapse text-center" id="navbarNav">
			<ul class="navbar-nav main-menu">
				<li class="nav-item item-menu">
					<a class="nav-link item-menu_link" href="#">Кредитные карты</a>
				</li>
				<li class="nav-item item-menu item-menu__active">
					<a class="nav-link item-menu_link" href="#">Вклады</a>
				</li>
				<li class="nav-item item-menu">
					<a class="nav-link item-menu_link" href="#">Дебетовая карта</a>
				</li>
				<li class="nav-item item-menu">
					<a class="nav-link item-menu_link" href="#">Страхование</a>
				</li>
				<li class="nav-item item-menu">
					<a class="nav-link item-menu_link" href="#">Друзья</a>
				</li>
				<li class="nav-item item-menu">
					<a class="nav-link item-menu_link" href="#">Интернет-банк</a>
				</li>
			</ul>
		</div>
	</nav>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Главная</a></li>
			<li class="breadcrumb-item"><a href="#">Вклады</a></li>
			<li class="breadcrumb-item active" aria-current="page">Калькулятор</li>
		</ol>
	</nav>
	<content>
		<div class="container wrapper-calc">
			<div class="row">
				<div class="col">
					<h1 class="title-calc">Калькулятор</h1>

					<form id="form-calc" class="form-calc" method="POST">
						<div class="form-group">
							<label for="inputDate" class="form-calc_label">Дата оформления вклада</label>
							<input name="inputDate" type="date" class="form-control form-calc_control" id="inputDate" placeholder="Введите дату" value=<?= date('Y-m-d') ?>>
						</div>
						<div class="form-group">
							<label for="contribution" class="form-calc_label">Сумма вклада</label>
							<input type="number" min="1000" max="3000000" class="form-control form-calc_control" id="contribution" name="inputContribution" placeholder="Введите сумму вклада" value="10000" required>
							<div class="form-calc_slider" id="sliderContribution"><span class="form-calc_label-value form-calc_label-value__min">1 тыс. руб.</span><span class="form-calc_label-value form-calc_label-value__max">3 000 000</span></div><br>
							
						</div>
						<div class="form-group">
							<label for="inputDurationContribution" class="form-calc_label">Срок вклада</label>
							<select name="inputDurationContribution" class="form-control form-calc_control" id="inputDurationContribution">
								<option value="1">1 год</option>
								<option value="2">2 года</option>
								<option value="3">3 года</option>
								<option value="4">4 года</option>
								<option value="5">5 лет</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-calc_label">Пополнение вклада</label>
							<input value="false" id="isAddContributionFalse" name="isAddContribution" type="radio"  checked> Нет
							<input value="true" id="isAddContributionTrue" class="form-calc_radio" name="isAddContribution" type="radio"> Да
						</div>
						<div class="form-group">
							<label for="inputSumAddcontribution" class="form-calc_label">Сумма пополнения вклада</label>
							<input disabled type="number" min="1000" max="3000000" class="form-control form-calc_control" id="inputSumAddcontribution" name="inputSumAddcontribution" placeholder="Введите сумму пополнения вклада" value="10000"><div class="form-calc_slider" id="sliderSumAddContribution" ><span class="form-calc_label-value form-calc_label-value__min">1 тыс. руб.</span><span class="form-calc_label-value form-calc_label-value__max">3 000 000</span></div>
						</div>
						<button id="form-calc-btn" type="submit" class="btn btn-success form-calc_submit">Рассчитать</button>
			
						<b class="form-calc_result" style="display: none;">Результат: <span class="form-calc_result-value"></span></b>
					</form>

				</div>
			</div>
		</div>
	</content>
	<footer class="site-footer-wrapper">
		<ul class="row align-items-center site-footer">
			<li class="site-footer_item"><a class="site-footer_link" href="#">Кредитные карты</a></li>
			<li class="site-footer_item"><a class="site-footer_link" href="#">Вклады</a></li>
			<li class="site-footer_item"><a class="site-footer_link" href="#">Дебетовая карта</a></li>
			<li class="site-footer_item"><a class="site-footer_link" href="#">Страхование</a></li>
			<li class="site-footer_item"><a class="site-footer_link" href="#">Друзья</a></li>
			<li class="site-footer_item"><a class="site-footer_link" href="#">Интернет-банк</a></li>
		</ul>
	</footer>
</body>
</html>