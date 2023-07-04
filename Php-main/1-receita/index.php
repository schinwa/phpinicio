<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <script src="js/script.js"></script>
    <link rel="stylesheet" id="stylesheet" href="Estilo/light.css"/>
    <script src="script.js"></script>
    <link rel="stylesheet" id="stylesheet" href="Estilo/light.css"/>

     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="img/phpicon.ico" />
     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/stylesphp.css" rel="stylesheet" />
 </head>
 <body id="page-top">

     <!-- Navigation-->
     <?php include ("menuphppages.php"); ?>

     <!-- Masthead-->
     <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Entrada, Processamento e Saída de dados.</div>
            <div class="masthead-heading text-uppercase">Introdução</div>
        </div>
    </header>

</head>
<body>
   <title>Multiplicar Receita</title>
</head>
<body>
   <div id="telaReceita">
       <p id="paragReceita"></p>
   </div>

   <!-- Form-->
   <div class="container-fluid mt-3">
  <h1>Dobrar Receita</h1>
  <p>Neste exemplo, recebemos um número e multiplicamos cada ingrediente da receita.</p>
    
    <h5>Mousse de limão</h5>

    <br>1 lata de leite condensado
    <br>1 lata de creme de leite
    <br>1,5 xícara de suco de limão

    <form method="POST" action="action.php">
      Multiplicar receita por:
      <input type="number" id="num" name="num">
      <input type="submit" value="ok">
    </form>

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