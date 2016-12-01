<?php include 'php/popularmapa.php'; ?>

<!DOCTYPE html>
<html lang="pt">
	<meta charset="utf-8" http-equiv="Content-Type" content="text/html"/>
    
	<head>
		<title> Início - Searching Health - Hortolândia</title>
		
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

	</head>
	<body>
		<div class="pagina">
			<div class="topo">
				<nav class="navbar navbar-default">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Início</a></li>
						<li><a href="cadastrodepostos.html">Cadastro de Postos</a></li>
						<li><a href="contato.html">Contato</a></li>
						<li><a href="sobre.html">Sobre</a></li>
					</ul>
				</nav>
			</div>

			<div class="conteudo">
				<center><h2> Searching Health <br> Locais de Atendimento de Saúde em Hortolândia </h2></center>
				<center><div id="mapid" class="mapa" style="width: 800px; height: 500px;"></div></center>
		
				<script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>

				<script>
					var mymap = L.map('mapid').setView([-22.8769465,-47.2440486], 13);

				    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {maxZoom: 18, attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +	'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +	'Imagery © <a href="http://mapbox.com">Mapbox</a>',	id: 'mapbox.streets'}).addTo(mymap);
                
                    <?php
                        
                        foreach ($ps_saude as $p_saude){
                            $nome = $p_saude['p_nome'];
                            $lat = $p_saude['p_lat'];
                            $lon = $p_saude['p_lon'];
                            $endereco = $p_saude['p_endereco'];
                            $telefone = $p_saude['p_telefone'];
                            
                            echo "L.marker([$lat, $lon]).addTo(mymap)".".bindPopup('<b>$nome</b><br><b>$endereco</b><br><b>Telefone:</b> <b>$telefone</b>');";
                        }
                    ?>
                    var marker0 = L.marker([-22.8769834,-47.2794131]).addTo(mymap).bindPopup("<b>Hortolândia</b>").openPopup();
                    
				</script>
				<br>
			</div>

			<div class="rodape">
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><center><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />Este trabalho está licenciado sob uma licença <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a></center>
			</div>
		</div>
	</body>
</html>
