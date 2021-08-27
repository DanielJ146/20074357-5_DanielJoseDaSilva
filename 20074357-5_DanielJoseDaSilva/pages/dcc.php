<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produtos</title>
	<?php
	    include "../css/estilo.php";
    ?>
</head>
<body>
	<div class="central" id="cabecalho">
        <div id="menu">
        <ul>
        	<div>
				<img src="../images/logo.png" width="10%">
	        </div>
        	<li><a href="../index.php">Home</a></li>
        	<li><a href="../pages/dcc.php">Produtos</a></li>
        	<li><a href="../pages/quem_somos.php">Quem somos</a></li>
        	<li><a href="contato.php">Contato</a></li>
        	<li><a href="https://www.google.com.br/maps/place/Indian%C3%B3polis+Residence/@-8.2889399,-35.9570852,18.2z/data=!4m5!3m4!1s0x7a98a4d0cf4d943:0xe5d2f2f95227ab8!8m2!3d-8.2885524!4d-35.9564837">Localização</a></li>
        </ul>
        </div>
    </div>
    <div id="doces">
    <h2>Doces tradicionais</h2>
    <div id="tradicionais">
        <div>
        <p><a href="doce_leite.php">Doce de leite</a></p>
    	<img src="../images/doce_leite.jpg" width="17%">
        </div>
        <div>
        <p><a href="pudim_condensado.php">Pudim de leite condensado</a></p>
    	<img src="../images/pudim.jpg" width="25%">
        </div>
        <div>
        <p><a href="docinho_leite.php">Docinho de leite ninho</a></p>
        <img src="../images/docinho_leite.jpg" width="24%">
        </div>
    </div>
    <h2>Doces com chocolate</h2>
    <div id="chocolate">
    	<div>
    	<p><a href="mousse_cafe.php">Mousse de chocolate e café</a></p>
    	<img src="../images/Mousse_de_chocolate_cafe.jpg" width="22%">
        </div>
        <div>
        <p><a href="brownie.php">brownie de chocolate</a></p>
    	<img src="../images/brownie.jpg" width="22%" >
        </div>
        <div>
        <p><a href="muffin.php">Muffin de chocolate</a></p>
    	<img src="../images/muffin.jpg" width="28%">
        </div>
    </div>
</body>
</html>
<?php
    include "../Js/rodape.php";
?>