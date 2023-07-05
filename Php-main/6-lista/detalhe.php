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
        <div class="container">Banco de dados.</div>
            <div class="masthead-heading text-uppercase">Detalhes de itens</div>
        </div>
    </header>

    </body>
<body>

   <!-- Form-->
   <div class="container-fluid mt-3">
  <h1>Detalhes do item</h1>
  <p>Abaixo os detalhes de um item da lista.</p> 

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
      if(!empty($result)) {
        echo "<br><b>id</b>: ". $result[0]['id'];
        echo "<br><b>Campo 01</b>: ". $result[0]['campo_01'];
        echo "<br><b>Campo 02</b>: ". $result[0]['campo_02'];
        echo "<br><b>Campo 03</b>: ". $result[0]['campo_03'];
        echo "<br><b>Campo 04</b>: ". $result[0]['campo_04'];
        echo "<br><b>Campo 05</b>: ". $result[0]['campo_05'];
        echo "<br><b>Campo 06</b>: ". $result[0]['campo_06'];
        echo "<br><b>Campo 07</b>: ". $result[0]['campo_07'];
        echo "<br><b>Campo 08</b>: ". $result[0]['campo_08'];
        echo "<br><b>Campo 09</b>: ". $result[0]['campo_09'];
        echo "<br><b>Campo 10</b>: ". $result[0]['campo_10'];
      } 
      $dbh = null;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      die();
    }
  ?>

<br><br>

<a href="excluir.php?id=<?php echo $id; ?>" class="btn btn-danger">
    <img src="/web_responsivo/img/trash.png" width="15" /> Excluir
</a>

<br><br>

<a href="index.php">Voltar</a>

<br><br>
Fontes:
<br> <a href="https://www.flaticon.com/free-icons/trash" >https://www.flaticon.com/free-icons/trash</a>


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