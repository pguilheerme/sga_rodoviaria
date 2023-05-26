<?php
require_once "../model/connect.php";

if(isset($_GET['delete_viagem'])){
  $id_delete = $_GET['id_delete'];
  $sql = "DELETE FROM viagens WHERE id2 = '$id_delete'";
  $con->query($sql);
  header("location: gerencia_destinos.php");
}

$sql1 = "SELECT * FROM viagens";
$result1 = $con->query($sql1);
?>

  <!--REGISTRAR OS DESTINOS-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/gerenciadestinos.css" />
    <title>Gerência | Terminal Rodoviário SGA</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Registre a Viagem</h2>
      </div>
      <form id="formulariogerencia" action="../controller/adm.php" method="post" class="formulariogerencia">
        <div class="form-control">
          <label for="viagem">Destino</label>
          <input type="text" id="viagem" name="destino" placeholder="Digite o destino da viagem" required>
        </div>
        <div class="form-control">
          <label for="hora">Horário</label>
          <input type="time" id="hora" name="horario" placeholder="Digite o horário da viagem" required>
        </div>
        <div class="form-control">
          <label for="date">Data</label>
          <input type="date" name="data" id="date" required>
        </div>
        <div class="form-control">
          <label for="custo">Valor</label>
          <input type="text" id="custo" name="valor" placeholder="Digite o valor da passagem" required>
        </div>
        
        <button type="submit" name="enviar" id="registrar" >Registrar</button>
        <button type="reset" id="limpar">Limpar</button>
      </form>
      <hr>
      <div class="header">
          <h2>Deletar passagens</h2>
      </div>
      <form action="gerencia_destinos.php" method="get" class="formulariogerencia">
        <div class="form-control">
          <input type="number" placeholder="Digite o ID da passagem" name="id_delete">
        </div>
          <button type="submit" name="delete_viagem" id="delete">Deletar</button>
      </form>
      <hr>

      <!--DELETAR AS PASSAGENS-->
<?php
  if ($result1->num_rows > 0) {
?>
      <table>
        <tr>
          <th>ID</th>
          <th>Destino</th>
          <th>Horário</th>
          <th>Data</th>
          <th>Valor(R$)</th>
        </tr>
<?php
  while($row1 = $result1->fetch_assoc()){
?>
  <div class="table_delete">
        <tr>
          <td class='registros'><?=$row1['id2']?></td>
          <td class='registros'><?=$row1['destino']?></td>
          <td class='registros'><?=$row1['horario']?></td>
          <td class='registros'><?=$row1['dataviagem']?></td>
          <td class='registros'><?=$row1['valor']?></td>
        </tr>
  </div>
<?php
  }
?>
      </table>
<?php
  }else{
?>
<p id="null">NÃO HÁ VIAGENS</p>
<?php
  }
  ?>
    </div>
  </body>
</html>