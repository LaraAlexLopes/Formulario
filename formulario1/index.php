<?php
if($_GET){
	$nome = $_GET['nome'];
	$nota = $_GET['nota'];

	 echo $nome . "=>" . $nota;
	 header('Location: resultados.php?nome=' . urlencode($nome) . '&nota=' . urlencode($nota));
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Questão 1</title>
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
	height: 400px;
/*	border: solid #071E4C;*/
	border-radius: 30px;
	box-shadow: 10px 5px 5px #071E4C;
}

body {
	margin: 0px;
}
input{
	width: 325px;
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
	margin-top: 50px;
	width: 280px;
	height: 40px;
	border-radius: 10px;
	border: none;
	margin-bottom: 10px;
	background: url(https://media.istockphoto.com/id/1386836234/pt/vetorial/abstract-blurred-colorful-background.jpg?s=612x612&w=0&k=20&c=UYrwLnDswemCQ0VdE3FDhy-Ajs2rmXBLD3ZN0vOkPJw=);
}
button p{
	color: white;
	margin:10px ;
	font-size: 15px;
}
button:hover{
	margin-left: 70px;
	margin-top: 50px;
	width: 280px;
	height: 40px;
	border-radius: 10px;
	border: none;
/*	opacity: 50%;*/
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
	height: 350px;
	border-radius: 0 0 30px 30px;
}
</style>
<body>
	<form>
		<div class="container">
			<div class="box">
				<div class="titulo">
					<h1>Formulário</h1>
				</div>
				<div class="cor">
					<input type="text" name="nome" placeholder="Nome"><br>
					<select name="nota">
					   <option>Nota</option>
					   <option value="1">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					   <option value="4">4</option>
					   <option value="5">5</option>
					   <option value="6">6</option>
					   <option value="7">7</option>
					   <option value="8">8</option>
					   <option value="9">9</option>
					   <option value="10">10</option>
				  </select>
					<button type="submit"><p>Enviar</P></button>
					<!-- <input type="submit" name="enviar"> -->
				</div>
			</div>
		</div>
	</form>
</body>
</html>
