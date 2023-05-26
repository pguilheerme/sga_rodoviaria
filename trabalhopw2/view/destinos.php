<?php
require_once "../model/connect.php";

$sql = "SELECT * FROM viagens";
$result1 = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/destinos.css" />
    <title>Destinos | Terminal Rodoviário de SGA</title>
</head>
<body>
<div class="centro">
            <div class="logo"><img src="../assets/logo.jpg" width="100px"></div>
            <div class="menu">
               <a href="index.php">Início</a>
               <a href="atendimento.php">Atendimento</a>
               <a href="sobrenos.php">Sobre nós</a>
            </div>
            <div id="login">
                <a href="login.php" id="textlogin">Login</a>
            </div>
    </div>
    <?php
  if ($result1->num_rows > 0) {
?>
   <h1><span style="color: #F27405">TABELA</span>  <span style="color: #034159">DE</span>  <span style="color:#038C3E">DESTINOS</span></h1> 
   <br>
   <br>
   <p><b>Logo abaixo você pode acompanhar a tabela dos destinos que estamos ofertando:</</b></p> 
   <br>
   <br>
      <table>
        <tr>
          <th id='destino'>Destino</th>
          <th id='time'>Horário</th>
          <th id='data'>Data</th>
          <th id='valor'>Valor(R$)</th>
        </tr>
<?php
  while($row1 = $result1->fetch_assoc()){
?>
  <div class="table_delete">
        <tr>
          <td class="registros"><?=$row1['destino']?></td>
          <td class="registros"><?=$row1['horario']?></td>
          <td class="registros"><?=$row1['dataviagem']?></td>
          <td class="registros"><?=$row1['valor']?></td>
        </tr>
  </div>
<?php
  }
?>
      </table>
      <footer>
        <p>Copyright &copy; instituição: Terminal Rodoviário SGA</p>
    </footer>
<?php
  }else{
?>
<p id="null">NÃO HÁ DESTINOS</p>
<?php
  }
  ?>
    </div>
  </body>
</html>