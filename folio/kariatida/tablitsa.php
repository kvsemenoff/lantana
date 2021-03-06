<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная страница</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans" />
	

	<meta content="telephone=no" name="format-detection"/>
	

	

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

<?php require_once('includes/header.php'); ?>
<?php require_once('includes/banner.php'); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="ab-tablitsa">

					<table>
					  <tr class="bl">
					    <td>№ п/п </td>
					    <td>Наименование работ</td>
					    <td>Ед.Изм.</td>
					    <td>Стоимость.руб</td>
					  </tr>
					  <tr class="table-zag">
					    <td colspan="4">Раздел 1. Земляные работы</td>
					    
					  </tr>
					  <tr>
					    <td>1</td>
					    <td>Разработка грунта вручную</td>
					    <td>м3</td>
					    <td>800.00</td>
					  </tr>
					  <tr>
					    <td>2</td>
					    <td>Устройство основания песчаного или щебеночного<br>(с разравниванием и уплотнением вибротрамбовкой)</td>
					    <td>м3</td>
					    <td>400.00</td>
					  </tr>
					  <tr class="table-zag">
					    <td colspan="4">Раздел 2. Бетонные и ж/б работы (монолитные)</td>
					  </tr>
					  <tr>
					    <td>1</td>
					    <td>Устройство бетонной подготовки</td>
					    <td>м3</td>
					    <td>3000.00</td>
					  </tr>
					  <tr>
					    <td>2</td>
					    <td>Устройство ленточных монолитных фундаментов</td>
					    <td>м3</td>
					    <td>4300.00</td>
					  </tr>
					  <tr>
					    <td>3</td>
					    <td>Устройство ростверков</td>
					    <td>м3</td>
					    <td>4500.00</td>
					  </tr>
					  <tr>
					    <td>4</td>
					    <td>Устройство ж/б свай (ø300мм, L=1,8м)</td>
					    <td>шт</td>
					    <td>1000.00</td>
					  </tr>
					</table>

				</div>
			</div>	
		</div>
	</div>
</section>

<?php require_once('includes/footer.php'); ?>
</body>
</html>
