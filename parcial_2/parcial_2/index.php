<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Inventario</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa Pricing Table template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free Web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
	<!-- Custom Theme files -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">
	<!-- //web font -->
</head>

<body>
	<?php
	require_once 'inventory.php';
	require_once 'item.php';
	require_once 'sword.php';
	require_once 'itemWeightComparator.php';
	require_once 'pizza.php';
	require_once 'weapons.php';
	require_once 'bow.php';

	$inventory = new Inventory();

	$a = new Sword(30.4219, 0.05, 300, 2.032);
	$b = new Consumable("Poción", 150, 1.02, true);
	$c = new Bow(20, 0.05, 450, 13.01);
	$pizza = new Pizza(12, false);

	$inventory->addItem($a);
	$inventory->addItem($b);
	$inventory->addItem($c);
	$inventory->addItem($pizza);
	?>
	<!-- main -->
	<div class="main">
		<h1>Inventario</h1>
		<div class="main-agileinfo">
			<div id="owl-demo" class="owl-carousel owl-theme"><!-- owl-carousel -->
				<div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3>Inventario</h3>
						</div>
						<div class="pricing-bottom">
							<p>
								<?php echo $inventory->__toString() . PHP_EOL; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="pricing">
						<div class="pricing-top">
							<h3>Inventario ordenado por orden natural</h3>
						</div>
						<div class="pricing-bottom">
							<p>
								<?php echo $inventory->sort(); ?>
								<?php echo $inventory->__toString() . PHP_EOL; ?>
							</p>
								<?php echo $inventory->sort(new ItemWeightComparator()); ?>
								<?php echo $inventory->__toString() . PHP_EOL; ?>
						</div>
					</div>
				</div>




				<div class="item">
					<div class="pricing w3layouts">
						<div class="pricing-top ">
							<h3>Inventario</h3>
						</div>
						<div class="pricing-bottom">
							<p>
								<?php echo $inventory->__toString() . PHP_EOL; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="pricing pricing-ten">
						<div class="pricing-top top-two">
							<h3>Numero de Items en el inventario</h3>
						</div>
						<div class="pricing-bottom">
							<p>
								<?php echo $inventory->length() ?>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="pricing pricing-ten">
						<div class="pricing-top top-two">
							<h3>Pizza</h3>
						</div>
						<div class="pricing-bottom">
							<p>
								<?php echo $pizza ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //owl-carousel -->
			<div class="agileits-buy">
				<a class="popup-with-zoom-anim" href="" onclick="toggleDiv()">Usar Espada</a>
			</div>
			<div class="item" id="div_oculto" style="display:none;">
				<div class="pricing pricing-three agileits">
					<div class="pricing-top top-three">
						<h3>Uso de la espada</h3>
					</div>
					<div class="pricing-bottom">
						<p>
							<?php
								echo $a->use();
							?>
						</p>
					</div>
				</div>
			</div>

			<div class="agileits-buy">
				<a class="popup-with-zoom-anim" href="" onclick="toggleDivPolish()">Polishear la Espada</a>
			</div>
			<div class="item" id="div_polish" style="display:none;">
				<div class="pricing pricing-three agileits">
					<div class="pricing-top top-three">
						<h3>Uso de la espada</h3>
					</div>
					<div class="pricing-bottom">
						<p>
							<?php
							echo $a->polish();
							?>
						</p>
					</div>
				</div>
			</div>

			<div class="agileits-buy">
				<a class="popup-with-zoom-anim" href="" onclick="toggleDivArco()">Usar Arco</a>
			</div>
			<div class="item" id="div_arco" style="display:none;">
				<div class="pricing pricing-five">
					<div class="pricing-top top-five">
						<h3>Uso del arco</h3>
					</div>
					<div class="pricing-bottom w3ls">
						<p>
							<?php echo $c->use() . PHP_EOL; ?>
							<br>
							<?php echo $c->use() . PHP_EOL; ?>
						</p>
					</div>
				</div>
			</div>

			<div class="agileits-buy">
				<a class="popup-with-zoom-anim" href="" onclick="toggleDivPolishArco()">Polishear la Arco</a>
			</div>
			<div class="item" id="div_polish_arco" style="display:none;">
				<div class="pricing pricing-three agileits">
					<div class="pricing-top top-three">
						<h3>Polishear arco</h3>
					</div>
					<div class="pricing-bottom">
						<p>
							<?php
							echo $c->polish();
							?>
						</p>
					</div>
				</div>
			</div>

			<div class="agileits-buy">
				<a class="popup-with-zoom-anim" href="" onclick="toggleDivInventory()">Comer un pedazo de pizza</a>
			</div>
			<div class="item" id="div_inventory" style="display:none;">
				<div class="pricing pricing-three agileits">
					<div class="pricing-top top-three">
						<h3>Inventory</h3>
					</div>
					<div class="pricing-bottom">
						<p>
							<?php
							echo $pizza->eat();
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //main -->

	<!-- copyright -->
	<div class="copyright">
		<p>© 2023 Inventario. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">Samuel
				Lasso, Miguel Rodríguez y Keily Marín</a></p>
	</div>
	<!-- //copyright -->
	<!-- js -->
	<script src="assets/js/jquery-1.9.1.min.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds 
				items: 3,
				itemsDesktop: [640, 5],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //js -->
	<!-- popup js -->
	<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<script>
		function toggleDiv() {
			// Obtenemos el div
			var div = document.getElementById("div_oculto");

			// Cambiamos la propiedad display del div a block o none
			div.style.display = div.style.display === "block" ? "none" : "block";
			setTimeout(() => {
				div.style.display = "none";
			}, 3000);
		}

		function toggleDivPolish() {
			// Obtenemos el div
			var div = document.getElementById("div_polish");

			// Cambiamos la propiedad display del div a block o none
			div.style.display = div.style.display === "block" ? "none" : "block";
			setTimeout(() => {
				div.style.display = "none";
			}, 3000);
		}

		function toggleDivArco() {
			// Obtenemos el div
			var div = document.getElementById("div_arco");

			// Cambiamos la propiedad display del div a block o none
			div.style.display = div.style.display === "block" ? "none" : "block";
			setTimeout(() => {
				div.style.display = "none";
			}, 3000);
		}

		function toggleDivPolishArco() {
			// Obtenemos el div
			var div = document.getElementById("div_polish_arco");

			// Cambiamos la propiedad display del div a block o none
			div.style.display = div.style.display === "block" ? "none" : "block";
			setTimeout(() => {
				div.style.display = "none";
			}, 3000);
		}

		function toggleDivInventory() {
			// Obtenemos el div
			var div = document.getElementById("div_inventory");

			// Cambiamos la propiedad display del div a block o none
			div.style.display = div.style.display === "block" ? "none" : "block";
			setTimeout(() => {
				div.style.display = "none";
			}, 3000);
		}
	</script>
	<!-- //popup js -->
</body>

</html>