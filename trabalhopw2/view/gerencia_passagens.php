<?php
require_once "../model/connect.php";

if(isset($_GET['delete_passagem'])){
  $id_delete = $_GET['id_delete'];
  $sql = "DELETE FROM passagens_clientes WHERE id3 = '$id_delete'";
  $con->query($sql);
  header("location: gerencia_passagens.php");
}

$sql1 = "SELECT * FROM passagens_clientes";
$result1 = $con->query($sql1);
?>

  <!--REGISTRAR OS DESTINOS-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/gerenciapassagens.css" />
    <title>Gerência | Terminal Rodoviário SGA</title>
  </head>
  <body>
       <div class='container'>
        <header>
          <h2>Deletar passagens</h2>
      <form action="gerencia_passagens.php" method="get" class="formulariogerencia">
        <div class="form-control">
          <input type="number" placeholder="Digite o ID da passagem" name="id_delete">
        </div>
          <button type="submit" name="delete_passagem" id="delete">Deletar</button>
      </form>
      <hr>

      <!--DELETAR AS PASSAGENS-->
<?php
  if ($result1->num_rows > 0) {
?>
      <table>
        <tr>
          <th id='id'>ID</th>
          <th id='nomecompleto'>Nome Completo</th>
          <th id='cpf'>CPF</th>
          <th id='telefone'>Telefone</th>
          <th id='destino'>Destino</th>
          <th id='data'>Data</th>
          <th id='horario'>Horario</th>
        </tr>
<?php
  while($row1 = $result1->fetch_assoc()){
?>
  <div class="table_delete">
        <tr>
          <td class='registros'><?=$row1['id3']?></td>
          <td class='registros'><?=$row1['nomecompleto']?></td>
          <td class='registros'><?=$row1['CPF']?></td>
          <td class='registros'><?=$row1['telefone']?></td>
          <td class='registros'><?=$row1['destinos']?></td>
          <td class='registros'><?=$row1['dataviagem']?></td>
          <td class='registros'><?=$row1['horario']?></td>
        </tr>
  </div>
<?php
  }
?>
      </table>
<?php
  }else{
?>
<p id="null">NÃO HÁ PASSAGENS</p>
<?php
  }
  ?>
    </div>
  </body>
</html>