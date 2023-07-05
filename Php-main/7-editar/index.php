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
        <div class="container">Banco de dados - Lista cliclável com função Editar</div>
            <div class="masthead-heading text-uppercase">Editar</div>
        </div>
    </header>
    </body>
<body>

   <!-- Form-->
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