<div class="w3-content w3-section" style="max-width:500px">
  	<img class="estilo img-fluid img-thumbnail" src="img/Modelos/chica1.jpg" style="width:100%" id="imagen">
	<img class="estilo img-fluid img-thumbnail" src="img/Modelos/chica2.jpg" style="width:100%" id="imagen">
	<img class="estilo img-fluid img-thumbnail" src="img/Modelos/chica3.png" style="width:100%" id="imagen">
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