<?php include_once 'include/Head.php';?>
<body>
	<?php include_once 'include/Encabezado.php'?>

	<nav class="navbar navbar-default navbar-static-top"id="con3">
    <br>
    <br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<!-- llenar espacio -->
				<?php include_once 'include/Izquierda.php'?>
			</div>
			<div class="col-lg-6 col-md-12">
				<?php
                // Llamar campos
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $gmail=$_POST['gmail'];
                $gimnasio=$_POST['gimnasio'];
                $direccion=$_POST['direccion'];
                
                // Datos para el correo

                $destinatario="gymsfinder5@gmail.com";
                $asunto="Solicito cupón desde la web";

                $carta ="De: {$nombre} {$apellido} \n";
                $carta .="Gmail: {$gmail} \n";
                $carta .="Gimnasio: {$gimnasio} \n";
                $carta .="Dirección: {$direccion} \n";

                // Enviando mensaje
                
                if(mail($destinatario, $asunto,$carta))
                {echo 'Enviado correctamente';}
                else{'No se pudo enviar el correo';}
                header('Location:MensajeEnvio.php');
                ?>
			</div>		
			<div class="col-lg-3 col-md-12" id="Con1">
				<!-- llenar espacio -->
				<?php include_once 'include/Derecha.php'?>
			</div>
		</div>
	</div>
	</nav>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>