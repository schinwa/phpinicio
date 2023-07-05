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
 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 
 
    </head>
 <body id="page-top">

     <!-- Navigation-->
     <?php include ("../menuphppages.php"); ?>

     <!-- Masthead-->
     <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Banco de Dados, Responsividade com Bootstrap e Media Queries</div>
            <div class="masthead-heading text-uppercase">Cadastro</div>
        </div>
    </header>

</body>
<body>

   <!-- Form-->
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