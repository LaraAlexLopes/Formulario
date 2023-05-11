<?php
  $nome = $_GET['nome'];
  $nota = $_GET['nota'];
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
  border-radius: 30px;
  box-shadow: 10px 2px 5px #071E4C;
}

body {
  margin: 0px;
}
h1{
  text-align: center;
  margin-top: 0px;
  padding-top:15px ;
  font-family: "poppins",sans-serif;
  color: #ffffee;
}
.titulo{
/*  margin-bottom: 20px;*/
  border-radius: 30px 30px 0px 0px;
/*  border: solid black;*/
  width: 100%;
  height: 70px;
  margin-left: 0px;
  background: url(https://media.istockphoto.com/id/1386836234/pt/vetorial/abstract-blurred-colorful-background.jpg?s=612x612&w=0&k=20&c=UYrwLnDswemCQ0VdE3FDhy-Ajs2rmXBLD3ZN0vOkPJw=);
}
.cor{
  background: white;
  height: 300px;
  border-radius: 0 0 30px 30px;
  padding-top: 35px;

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
  font-weight: bold;
  color: gray;
  margin-top: 5px;
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
</style>
<body>
  <form>
    <div class="container">
      <div class="box">
        <div class="titulo">
          <h1>Resultado</h1>
        </div>
        <div class="cor">
          <h2>Nome</h2>
          <p> <?php echo htmlspecialchars($nome); ?></p>
          <h2>Nota</h2>
          <p><?php echo htmlspecialchars($nota); ?></p>
          
        </div>
      </div>
    </div>
  </form>
</body>
</html>