<!DOCTYPE html>
    <html lang="en">
    <head>
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
        <div class="container">
            <div class="masthead-subheading">Listas de dados que cabem na tela do celular</div>
            <div class="masthead-heading text-uppercase">Lista Responsiva</div>
        </div>
    </header>

</head>
<body>
   <title>Lista</title>
</head>
<body>
   <div id="telaReceita">
       <p id="paragReceita"></p>
   </div>

   <!-- Form-->
   <div class="container-fluid mt-3">
  <h1>Minha Lista</h1>
  <p>Abaixo uma lista com a classe .table-responsive que apresenta um scrool horizontal em telas reduzidas:</p>
    

  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Coluna 01</th>
          <th>Coluna 02</th>
          <th>Coluna 03</th>
          <th>Coluna 04</th>
          <th>Coluna 05</th>
          <th>Coluna 06</th>
          <th>Coluna 07</th>
          <th>Coluna 08</th>
          <th>Coluna 09</th>
          <th>Coluna 10</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include("../banco_dados_conexao.php");
          try {
            $sth = $dbh->prepare('SELECT * from minha_tabela');
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
              foreach($result as $row) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["campo_01"] ."</td>";
                echo "<td>". $row["campo_02"] ."</td>";
                echo "<td>". $row["campo_03"] ."</td>";
                echo "<td>". $row["campo_04"] ."</td>";
                echo "<td>". $row["campo_05"] ."</td>";
                echo "<td>". $row["campo_06"] ."</td>";
                echo "<td>". $row["campo_07"] ."</td>";
                echo "<td>". $row["campo_08"] ."</td>";
                echo "<td>". $row["campo_09"] ."</td>";
                echo "<td>". $row["campo_10"] ."</td>";
                echo "</tr>";
              }
            } 
            $dbh = null;
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
          }
        ?>

      </tbody>
    </table>
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