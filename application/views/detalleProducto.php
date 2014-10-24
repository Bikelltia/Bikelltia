<div class="divBody panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Detalle de Flores</h3>
	</div>
	<div class="panel-body">
		<div id="items">
			<img src="/bikelltia/img/floral1.jpg" class="imgItem" onclick="cambiar('/bikelltia/img/floral1.jpg')">
			<img src="/bikelltia/img/floral2.jpg" class="imgItem" onclick="cambiar('/bikelltia/img/floral2.jpg')">
			<img src="/bikelltia/img/floral3.jpg" class="imgItem" onclick="cambiar('/bikelltia/img/floral3.jpg')">
		</div>
		<div id="view"> 
			<a href="/bikelltia/img/floral1.jpg" class="classF"  title="FLORAL">  
			    <img src="/bikelltia/img/floral1.jpg" class="imgView" name="flor" onmouseover="zoom(flor)">
			</a>
		</div>
		<div id="details">
			<h2>Floral 1</h2>
			<p> Precio: $54</p>
			<br>
			<p>NUMERO DE FLORES:  32</p>
			<p>NUMERO DE COLORES: 12</p>	
			<br>
			<div id="colors">
				<img src="/bikelltia/img/floral1.jpg" class="imgItem">
			</div>
			<br>
			<div class="btn-group">
				<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-shopping-cart"></span>
					Comprar
				</button>
				<button type="submit" class="btn btn-warning">
					<span class="glyphicon glyphicon-hand-right"></span>
					Me gusta
				</button>
				<button type="submit" class="btn btn-danger">
					<span class="glyphicon glyphicon-share-alt"></span>
					Regresar
				</button>
			</div>
		</div>
	</div>
</div>
<script type='text/javascript'>
	$(document).ready(function() {
		var options = {           
			zoomType: 'standard',  
			alwaysOn : false,  
			zoomWidth: 200,  
			zoomHeight:160,  
			position:'left',  
			xOffset: 230,  
			yOffset:10,  
			showEffect : 'fadein',  
			hideEffect: 'fadeout'
		};
		
		$('.classF').jqzoom(options); 
	});
	function cambiar(value){
		document.images["flor"].src = value;
	}
</script>