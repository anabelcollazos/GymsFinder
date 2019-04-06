<?php include_once 'include/Head.php';?>
<body>
	<?php include_once 'include/Encabezado.php'?>

<nav class="navbar navbar-default navbar-static-top" id="con3">
    <br>
    <br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<!-- llenar espacio -->
				<?php include_once 'include/Izquierda.php'?>
			</div>
			<div class="col-lg-6 col-md-12">

				<section class="formulario">
					<section class="mensaje-exito">
                        <h1>Su SOLICITUD se envió exitosamente</h1>
                        <a href="SolicitarCupon.php">Enviar nuevo mensaje</a>
                    </section>
				</section>
			</div>
			<div class="col-lg-3 col-md-12" id="Con1">
				<!-- llenar espacio -->
				<?php include_once 'include/Derecha.php'?>
			</div>

		</div>
	</div>
</nav>
<?php include_once 'include/PiePagina.php'?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>