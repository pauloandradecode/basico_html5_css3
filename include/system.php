<?php
	class page{

		var $analitycs;
		var $selector;
		var $titulo;

		function set_id_analitycs($analitycs){
			$this->analitycs = $analitycs;
		}
		function set_selector($selector){
			$this->selector = $selector;
		}
		function set_titulo($titulo){
			$this->titulo = $titulo;
		}

		function contenedor(){
			?>
			<section id="contenedor">
				<article class="subcontenedor">
					<h2>Propiedades</h2>
					<p>La miel de abeja contiene varias propiedades para el ser humano como ser antiseptico para heridas en la piel, tratamiento de la tos y vias respiratorias, asi como efectos calmantes en el cuerpo.</p>
				</article>
				<article class="subcontenedor">
					<h2>Beneficios</h2>
					<p>Entre los beneficios que otorga consumir la miel de abeja encontramos principalmente la de endulzar y preparar alimentos, pero el verdadero beneficio se encuentra en sus propiedades antisepticas y curativas.</p>
				</article>
				<article class="subcontenedor">
					<h2>Uso Medicinal</h2>
					<p>Sin duda el uso de la miel como metodo medicinal es muy bueno aparte de ser 100% natural, entre algunos remedios encontramos el tratamiento para la tos, estres y anciedad y ulceras estomacales.</p>
				</article>
			</section>
			<?php
		}
		function contenido(){
			?>
			<section id="contenido">
				<article id="contenido_principal">
					<h2>Remedios medicinales con miel de abeja</h2>
					<p class="contenido_titulo">Remedio para el asma</p>
					<p class="contenido_texto">Se recomienda tomar una taza de leche tibia con una cucharada de canela en polvo y dos cucharadas de miel 3 veces al dia.</p>
					<p class="contenido_titulo">Remedio para la tos</p>
					<p class="contenido_texto">Para el tratamiento de la tos es muy bueno tomar una cucharada de miel y agregarle algunas gotas de limon puede ser cada 4 horas o tanto como sea necesario.</p>
					<p class="contenido_titulo">Remedio para ulsera estomacal</p>
					<p class="contenido_texto">Es muy recomendable tomar una cuchara de miel en ayunas diariamente, dejar diluir en la boca antes de tragar, esto ayudara a restaurar la flora intestinal</p>
					<p class="contenido_titulo">Remedio para quemaduras</p>
					<p class="contenido_texto">Aplicar en el area afectada 2 o 3 cucharadas de miel, esto proporcionara un rapido alivio y disminuira el dolor y la comezon.</p>
					<p class="contenido_titulo">Remedio para el insomnio</p>
					<p class="contenido_texto">Para combatir el insomnio es muy recomendable tomar una taza de leche tibia con 2 cucharadas de miel antes de dormir.</p>
				</article>
				<aside id="menu_principal">
					<p id="menu_titulo">Solicita tu presupuesto</p>
					<form action="" method="post">
						<p><label>Nombre.- </label></p>
						<p class="center"><input type="text" class="input" placeholder="Ingresa tu nombre" required /></p>
						<p><label>Email.- </label></p>
						<p class="center"><input type="email" class="input" placeholder="Ingresa tu email" required /></p>
						<p><label>Necesito un presupuesto de.-</label></p>
						<p class="center"><textarea rows="6"></textarea></p>
						<p class="center"><input type="submit" value="SOLICITAR" id="submit" /></p>
					</form>
				</aside>
			</section>
			<?php
		}
		function footer(){
			?>
			</section>
				<footer>
					<p>
						<a href="index.php" rel="nofollow">Inicio</a> - 
						<a href="acerca_de.php" rel="nofollow">Acerca De</a> - 
						<a href="producto.php" rel="nofollow">Productos</a> - 
						<a href="contacto.php" rel="nofollow">Contactanos</a>
					</p>
					<p>Todos los derechos reservados <?php echo date(Y); ?></p>
				</footer>

		        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
		        <script src="js/plugins.js"></script>
		        <script src="js/main.js"></script>

		        <script>
		            var _gaq=[['_setAccount','<?php echo $this->analitycs; ?>'],['_trackPageview']];
		            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		            s.parentNode.insertBefore(g,s)}(document,'script'));
		        </script>
		    </body>
		</html>
		<?php
		}
		function head(){
			?>
			<!DOCTYPE html>
			<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
			<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
			<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
			<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    		<head>
		        <meta charset="utf-8">
		        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		        <title><?php echo $this->titulo; ?></title>
		        <meta name="description" content="">
		        <meta name="viewport" content="width=device-width">
		        <link rel="icon" href="favicon.ico" type="image/x-icon">
		        <link rel="stylesheet" href="css/main.css">
		        <link rel="stylesheet" href="css/formato.css">
		        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		    </head>
		    <body id="<?php echo $this->selector; ?>">
		    	<section id="wrapper">
		    <?php
		}
		function nav(){
			?>
			<nav>
				<ul>
					<li id="inicio"><a href="index.php">Inicio</a></li>
					<li id="acerca"><a href="acerca_de.php">Acerca de nosotros</a></li>
					<li id="producto"><a href="productos.php">Productos</a></li>
					<li id="contacto"><a href="contacto.php">Contactanos</a></li>
				</ul>
			</nav>
			<?php
		}
		function portada(){
			?>
			<section id="portada">
				<article>
					<img src="img/portada.jpg" />
				</article>
			</section>
			<?php
		}
	}
?>