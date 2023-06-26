<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistemas Web Responsivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php include("../menu.php"); ?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Banco de Dados - Editar</h1>
  <p>Lista cliclável com função Editar</p> 
</div>
  
<div class="container-fluid mt-3">
  <h1>Minha Lista</h1>
  <p>Abaixo uma lista com todos os itens da tabela.</p>
  <p>É possível clicar em cada item, para ter acesso aos detalhes deste item.</p>
  <p>Na tela de detalhe estão os botões para excluir e editar o registro.</p>
    

  
  
<div class="list-group">
  <?php
    include("../banco_dados_conexao.php");
    try {
      $sth = $dbh->prepare('SELECT id, campo_01 from minha_tabela');
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      if(!empty($result)) {
        foreach($result as $row) {
          echo "<a href='detalhe.php?id=".$row["id"]."' class='list-group-item list-group-item-action'>".$row["campo_01"]."</a>";
        }
      } 
      $dbh = null;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      die();
    }
  ?>
</div>

</div>

<br><b>
</body>
</html>

