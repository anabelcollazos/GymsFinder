<?php include_once 'include/Head.php';?>
<body>
	<div class="logo-container" id="con1">
		<div class="container">	
			<div class="texto">
				<img  src="img/Logo.png" alt="" class="logo">
				<p id="stilo">GYMS FINDER</p> 
			</div>
		</div> 
	</div>

	<nav class="navbar navbar-default navbar-static-top"id="con2">
		<div class="container" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Botón</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">GYMS Finder</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Realice su búsqueda</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Inicio de sesión</a></li>
					<li><a href="#">¿Tiene un gimnasio?</a></li>
				</ul>
			</div>
		</div>
	</nav>

	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="w3-content w3-section grupo" style="max-width:500px">
  					<img class="estilo img-fluid img-thumbnail" src="img/modelo1.png" style="width:100%" id="imagen">
				    <img class="estilo img-fluid img-thumbnail" src="img/modelo2.jpg" style="width:100%" id="imagen">
				    <img class="estilo img-fluid img-thumbnail" src="img/modelo3.jpg" style="width:100%" id="imagen">
				</div>

				<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				  var i;
				  var x = document.getElementsByClassName("estilo");
				  for (i = 0; i < x.length; i++) {
				    x[i].style.display = "none";  
				  }
				  myIndex++;
				  if (myIndex > x.length) {myIndex = 1}    
				  x[myIndex-1].style.display = "block";  
				  setTimeout(carousel, 2000); 
				}
				</script>

			</div>
			<div class="col-lg-6 col-md-12">
				<iframe width="100%" height="315" src="https://www.youtube.com/embed/pn2v9lPakHQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="col-lg-3 col-md-12">
				<img src="img/Logo.png" class="img-fluid img-thumbnail">
				<img src="img/Logo.png" class="img-fluid img-thumbnail mt-5">
			</div>
		</div>
	</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>