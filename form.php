<?php
if($_GET){

	$nome = $_GET['nome'];
	$senha = $_GET['senha'];
	// $quatro = $_GET['04'];
	// $cinco = $_GET['58'];
	// $nove = $_GET['910'];

	$_GET['quatro'] = ( isset($_GET['quatro']) ) ? true : null;
	$_GET['cinco']  = ( isset($_GET['cinco']) )  ? true : null;
	$_GET['nove'] = ( isset($_GET['nove']) ) ? true : null;

	$_GET['azul'] = ( isset($_GET['azul']) ) ? true : null;
	$_GET['vermelha']  = ( isset($_GET['vermelha']) )  ? true : null;
	$_GET['cinza'] = ( isset($_GET['cinza']) ) ? true : null;
	$_GET['amarela']  = ( isset($_GET['amarela']) )  ? true : null;
	$_GET['marrom'] = ( isset($_GET['marrom']) ) ? true : null;

	 header('Location: resultado.php?nome=' . urlencode($nome) . '&senha=' . urlencode($senha) . '&azul=' . urlencode($azul) . '&vermelha=' . urlencode($vermelha) . '&amarela=' . urlencode($amarela) . '&cinza=' . urlencode($cinza) . '&marrom=' . urlencode($marrom) . '&quatro=' . urlencode($quatro) . '&cinco=' . urlencode($cinco) . '&nove=' . urlencode($nove));
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Questão 3</title>
</head>
<style type="text/css">
.container {
	width: 100vw;
	height: 100vh;
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	background:url(https://img.freepik.com/fotos-gratis/fundo-azul-do-gradiente-de-luxo-abstrato-liso-azul-escuro-com-vinheta-preta-studio-banner_1258-54587.jpg) repeat;
}
.box {
	width: 430px;
	height: 600px;
/*	border: solid #071E4C;*/
	border-radius: 30px;
	box-shadow: 10px 5px 5px #071E4C;
}

body {
	margin: 0px;
}
input{
	width: 335px;
	height: 35px;
	border-radius: 5px;
	border: solid 1px;
/*	margin-bottom: 15px;*/
	padding-left: 5px;
	padding: 3px;
	color: gray;
	font-size: 13px;
	font-weight: bold;
	margin-top: 20px;
	margin-left: 50px;
	margin-right: 50px;
}
select{
	width: 335px;
	height: 40px;
	border-radius: 5px;
	border: solid 1px;
/*	margin-bottom: 15px;*/
	padding-left: 5px;
	padding: 3px;
	color: gray;
	font-size: 13px;
	font-weight: bold;
	margin-top: 20px;
	margin-left: 50px;
	margin-right: 50px;
}
button{
	margin-left: 70px;
	margin-top: 40px;
	width: 280px;
	height: 40px;
	border-radius: 10px;
	border: none;
	margin-bottom: 10px;
	background: url(https://media.istockphoto.com/id/1386836234/pt/vetorial/abstract-blurred-colorful-background.jpg?s=612x612&w=0&k=20&c=UYrwLnDswemCQ0VdE3FDhy-Ajs2rmXBLD3ZN0vOkPJw=);
}
h4{
	color: white;
	margin:10px ;
	font-size: 15px;
}
h5{
	color: gray;
	display: inline-block;
	padding: 5px;
	margin-top:0px ;
	font-family: "poppins",sans-serif;
	font-size: 13px;
}
button:hover{
	margin-left: 70px;
	margin-top: 40px;
	width: 280px;
	height: 40px;
	border-radius: 10px;
	border: none;
	opacity: 90%;
	background: url(https://media.istockphoto.com/id/1386836234/pt/vetorial/abstract-blurred-colorful-background.jpg?s=612x612&w=0&k=20&c=UYrwLnDswemCQ0VdE3FDhy-Ajs2rmXBLD3ZN0vOkPJw=);
}
h1{
/*	border: solid black;*/
	text-align: center;
	margin-top: 0px;
	padding-top:15px ;
	font-family: "poppins",sans-serif;
	color: #ffffee;
}
.titulo{
/*	margin-bottom: 20px;*/
	height: 50px;
	border-radius: 30px 30px 0px 0px;
/*	border: solid black;*/
	width: 100%;
	height: 70px;
	margin-left: 0px;
	background: url(https://media.istockphoto.com/id/1386836234/pt/vetorial/abstract-blurred-colorful-background.jpg?s=612x612&w=0&k=20&c=UYrwLnDswemCQ0VdE3FDhy-Ajs2rmXBLD3ZN0vOkPJw=);
}
.cor{
	background: white;
	height: 590px;
	border-radius: 0 0 30px 30px;
}
p{
  font-family: "poppins",sans-serif;
  width: 325px;
  height: 25px;
  border-radius: 8px;
  border: solid 1px;
  padding-left: 5px;
  padding: 3px;
  padding-top: 10px;
  color: gray;
  font-size: 14px;
  color: gray;
  margin-top: 20px;
  margin-left: 50px;
  margin-right: 50px;
}
h2{
  font-family: "poppins",sans-serif;
  width: 325px;
  padding-left: 5px;
  color: gray;
  font-size: 13px;
  font-weight: bold;
  color: black;
  margin-bottom: 0px;
  margin-left: 50px;
  margin-right: 50px;
}
label{
	border: none;
	margin-left: 52px;
}
.chkAzul{
	display: inline-block;
}
.chkAzul input {
    display: none;
}

.chkAzul span {
    width: 20px;
    height: 20px;
    display: block;
    background-color: #3D8AF6;
    border: 1px solid #DDD;
/*    background-color: #c03;*/
}

.chkAzul input:checked + span {
    background-color: #0E3EEC;
    border: solid black 1px;
}
.chkVermelho{
	display: inline-block;
}
.chkVermelho input {
    display: none;
}

.chkVermelho span {
    width: 20px;
    height: 20px;
    display: block;
    background-color: #F6403D;
    border: 1px solid #DDD;
/*    background-color: #c03;*/
}

.chkVermelho input:checked + span {
    background-color: #EC0E17;
    border: solid black 1px;
}
.chkCinza{
	display: inline-block;
}
.chkCinza input {
    display: none;
}

.chkCinza span {
    width: 20px;
    height: 20px;
    display: block;
    background-color: #CFC9C9;
    border: 1px solid #DDD;
/*    background-color: #c03;*/
}

.chkCinza input:checked + span {
    background-color: #989891;
    border: solid black 1px;
}
.chkAmarelo{
	display: inline-block;
}
.chkAmarelo input {
    display: none;
}

.chkAmarelo span {
    width: 20px;
    height: 20px;
    display: block;
    background-color: #F4F43D;
    border: 1px solid #DDD;
/*    background-color: #c03;*/
}

.chkAmarelo input:checked + span {
    background-color: #F2EE0C;
    border: solid black 1px;
}
.chkMarrom{
	display: inline-block;
}
.chkMarrom input {
    display: none;
}

.chkMarrom span {
    width: 20px;
    height: 20px;
    display: block;
    background-color: #775942;
    border: 1px solid #DDD;
/*    background-color: #c03;*/
}

.chkMarrom input:checked + span {
    background-color: #67422D;
    border: solid black 1px;
}
#radio{
	display: inline-block;
	padding: 0px;
}
</style>
<body>
	<form action="resultado.php" method="GET">
		<div class="container">
			<div class="box">
				<div class="titulo">
					<h1>Formulário</h1>
				</div>
				<div class="cor">
					<input type="text" name="nome" placeholder="Nome"><br>
					<input type="password" name="senha" placeholder="Senha"><br>
					<p>Cores</p>
						<label class="chkAzul">
			   			 <input type="checkbox" name="azul" value="azul"/>
			   			 <span></span>
						</label>
						<label class="chkVermelho">
			   			 <input type="checkbox" name="vermelha" value="vermelha"/>
			   			 <span></span>
						</label>
						<label class="chkCinza">
			   			 <input type="checkbox" name="cinza" value="cinza"/>
			   			 <span></span>
						</label>
						<label class="chkAmarelo">
			   			 <input type="checkbox" name="amarela" value="amarela" />
			   			 <span></span>
						</label>
						<label class="chkMarrom">
			   			 <input type="checkbox" name="marrom" value="marrom"/>
			   			 <span></span>
						</label>
						<p>Notas</p>
						<div id="radio">
							<input type="radio" name="quatro" value="quatro" style="width:15px; height:15px; margin-right: 5px;"><h5>Entre 0 a 4</h5><br>
							<input type="radio" name="cinco" value="cinco" style="width:15px; height:15px; margin-right: 5px;"><h5>Entre 5 a 8</h5><br>
							<input type="radio" name="nove" value="nove" style="width:15px; height:15px; margin-right: 5px;"><h5>Entre 9 a 10</h5><br>
						</div>
					<button type="submit"><h4>Enviar</h4></button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
