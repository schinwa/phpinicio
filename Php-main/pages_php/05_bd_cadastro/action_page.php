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
  <h1>Banco de Dados - Tela de cadastro</h1>
  <p>Responsividade com Bootstrap e Media Queries</p> 
</div>

<div class="container-fluid mt-3">
  <h1>Cadastrar</h1>
  
  <?php
    include("../banco_dados_conexao.php");
    try {
      $stmt = $dbh->prepare("insert into minha_tabela (campo_01,campo_02,campo_03,campo_04,campo_05,campo_06,campo_07,campo_08,campo_09,campo_10) values (?,?,?,?,?,?,?,?,?,?);");
      $stmt->bindParam( 1, $_POST["col-01"] );
      $stmt->bindParam( 2, $_POST["col-02"] );
      $stmt->bindParam( 3, $_POST["col-03"] );
      $stmt->bindParam( 4, $_POST["col-04"] );
      $stmt->bindParam( 5, $_POST["col-05"] );
      $stmt->bindParam( 6, $_POST["col-06"] );
      $stmt->bindParam( 7, $_POST["col-07"] );
      $stmt->bindParam( 8, $_POST["col-08"] );
      $stmt->bindParam( 9, $_POST["col-09"] );
      $stmt->bindParam(10, $_POST["col-10"] );
      if($stmt->execute()) {
        ?>
        <div class="alert alert-success" role="alert">
          Dado cadastrado com sucesso!
          <br>
          <a href="../04_bd_lista/">Listar</a>
        </div>
        <?php
      }
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }
?>
    

  

</div>

<br><br>
</body>
</html>

