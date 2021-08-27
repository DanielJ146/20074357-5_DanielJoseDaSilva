<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contato</title>
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
        <img src="../images/contato.jpg" width="100%">
        <div id="hor">
            <h2>Horario de atendimento:</h2>
            <h3>Segunda a sexta-feira das 07h às 18h</h3>
            <h3>sac:0800 954 XXXX</h3>
        </div>
        <div>
            <div>
            <h2>Dados pessoais</h2>
            <form action="" >
            Nome completo:
            <input type="text" name="nome" >
            E-mail:
            <input type="email" name="email"><br />
            Telefone:
            <input type="text" name="numero" >
            Data de nascimento
            <input type="date" name="data"><br />
            <input type="submit" name="enviar">
            </form>
            </div>
        </div>
</body>
</html>
<?php
    include "../Js/rodape.php";
?>