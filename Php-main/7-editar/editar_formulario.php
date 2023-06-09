<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Sistemas Web Responsivos</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="img/phpicon.ico" />
     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="../css/stylesphpp.css" id="stylesheet" rel="stylesheet" />
 </head>
 <body id="page-top">

     <!-- Navigation-->
     <?php include ("../menuphppages.php"); ?>

     <!-- Masthead-->
     <header class="masthead">
        <div class="container">Banco de dados, Responsividade com Bootstrap e Media Queries</div>
            <div class="masthead-heading text-uppercase">Tela de edição</div>
        </div>
    </header>

</body>
<body>>

   <!-- Form-->
   <div class="container-fluid mt-3">
  <h1>Editar</h1>
  <p>Aqui temos 3 níveis de responsividade:</p>
  <ul>
  <li>Em telas maiores, os campos são apresentados em 2 colunas.</li>
  <li>Em telas menores, aparece apenas 1 coluna de campos.</li>
  <li>Em telas menores de 600px, Media Query é usado para ocultar os <i>labels</i></li>
  </ul>

<!-- Warning Alert -->
<div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
    <i class="bi-exclamation-triangle-fill"> Esse formulário é uma cópia da tela de cadastro. Porém, o banco de dados é acessado para preencher o formulário com os dados do item a ser alterado.</i>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<?php 
  $id = $_GET['id'];
?>

<?php
    include("../banco_dados_conexao.php");
    try {
      
      $sth = $dbh->prepare("SELECT * FROM minha_tabela WHERE id = ?");
      $sth->bindParam( 1, $id );
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }
?>

  <form name="myForm" action="editar_action_page.php" onsubmit="return validateForm()" method="post">
    <div class="row">
      <div class="col-md-6 mt-1">
        <label for="col-01">Coluna 01:</label>
        <input type="text" class="form-control" id="col-01" placeholder="Valor para coluna 01" name="col-01" value="<?php echo $result[0]["campo_01"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-02">Coluna 02:</label>
        <input type="text" class="form-control" id="col-02" placeholder="Valor para coluna 02" name="col-02" value="<?php echo $result[0]["campo_02"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-03">Coluna 03:</label>
        <input type="text" class="form-control" id="col-03" placeholder="Valor para coluna 03" name="col-03" value="<?php echo $result[0]["campo_03"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-04">Coluna 04:</label>
        <input type="text" class="form-control" id="col-04" placeholder="Valor para coluna 04" name="col-04" value="<?php echo $result[0]["campo_04"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-05">Coluna 05:</label>
        <input type="text" class="form-control" id="col-05" placeholder="Valor para coluna 05" name="col-05" value="<?php echo $result[0]["campo_05"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-06 mt-1">Coluna 06:</label>
        <input type="text" class="form-control" id="col-06" placeholder="Valor para coluna 06" name="col-06" value="<?php echo $result[0]["campo_06"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-07">Coluna 07:</label>
        <input type="text" class="form-control" id="col-07" placeholder="Valor para coluna 07" name="col-07" value="<?php echo $result[0]["campo_07"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-08">Coluna 08:</label>
        <input type="text" class="form-control" id="col-08" placeholder="Valor para coluna 08" name="col-08" value="<?php echo $result[0]["campo_08"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-09">Coluna 09:</label>
        <input type="text" class="form-control" id="col-09" placeholder="Valor para coluna 09" name="col-09" value="<?php echo $result[0]["campo_09"];?>">
      </div>
      <div class="col-md-6 mt-1">
        <label for="col-10">Coluna 10:</label>
        <input type="text" class="form-control" id="col-10" placeholder="Valor para coluna 10" name="col-10" value="<?php echo $result[0]["campo_10"];?>">
      </div>
    </div>
    <div class="row">
      <div class="col m-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $result[0]["id"];?>">
  </form>

  <a href="detalhe.php?id=<?php echo $id;?>">Voltar</a>

</div>
   
            <!-- Footer-->
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-start">Copyright &copy; Ana Schincariol 2023</div>
                        <div class="col-lg-4 my-3 my-lg-0">
    
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="link-dark text-decoration-none me-3" href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'>Privacy Policy</a>
                            <a class="link-dark text-decoration-none" href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'>Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
        
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
</body>
</html>