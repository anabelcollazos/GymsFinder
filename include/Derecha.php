        <div class="w3-content w3-section" style="max-width:500px">
					<img class="estilo1 img-fluid img-thumbnail" src="img/Modelos/chico1.jpeg" style="width:100%" id="imagen">
					<img class="estilo1 img-fluid img-thumbnail" src="img/Modelos/chico2.jpg" style="width:100%" id="imagen">
					<img class="estilo1 img-fluid img-thumbnail" src="img/Modelos/chico3.jpg" style="width:100%" id="imagen">
				</div>

				<script>
				var Index = 1;
				carouse();
				function carouse() {
				  var m;
				  var n = document.getElementsByClassName("estilo1");
				  for (m = 0; m < n.length; m++) {
				    n[m].style.display = "none";
				  }
				  Index++;
				  if (Index > n.length) {Index = 1}
				  n[Index-1].style.display = "block";
				  setTimeout(carouse, 2000);
				}
				</script>