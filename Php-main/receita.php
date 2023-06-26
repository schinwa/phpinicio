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
     <link rel="icon" type="image/x-icon" href="img/iconjs.ico" />
     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles.css" rel="stylesheet" />
 </head>
 <body id="page-top">

     <!-- Navigation-->
     <?php include ("menu.php"); ?>

     <!-- Masthead-->
     <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Calcular</div>
            <div class="masthead-heading text-uppercase">Receita</div>
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
<section class="page-section" id="formReceita">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Calcular</h2>
            <h3 class="section-subheading text-muted">Receita de bolo de fuba</h3>
        </div>

        <!-- 
            3 ovos inteiros
2 xícaras (chá) de açúcar
2 xícaras (chá) de fubá
3 colheres (sopa) de farinha de trigo
1/2 copo (americano) de óleo
1 copo (americano) de leite
1 colher (sopa) de fermento em pó-->
                        <!-- Receita input-->
                        <form>
                        <div class="text-center">
                        <input class="form-control" id="num" type="number" name="num" placeholder="Quantidade de receita" required>
                        <a class="btn btn-primary btn-xl text-uppercase" onclick='receita()'>Calcule!</a>
                        </div>
                        </form>
                    </div>
                    <div class="form-group">
                    </div>
               
                    <section class="page-section" id="formReceita">
                        <div class="container">
                            <div class="text-center">
                                <h3 class="section-heading text-uppercase">Uma receita:</h3>
                                <p class="section-subheading text-muted">3 ovos inteiros</p>
                                <p class="section-subheading text-muted">2 xícaras (chá) de açúcar</p>
                                <p class="section-subheading text-muted">2 xícaras (chá) de fubá</p>
                                <p class="section-subheading text-muted">3 colheres (sopa) de farinha de trigo</p>
                                <p class="section-subheading text-muted">1/2 copo (americano) de óleo</p>
                                <p class="section-subheading text-muted">1 copo (americano) de leite</p>
                                <p class="section-subheading text-muted">1 colher (sopa) de fermento em pó</p>
                            </div>
                </div>
            </div>
</section>








    <!--Carrossel-->
    <div class="row">
        <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width:100%;margin: auto;">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          </div>
          
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/bolo1.png" alt="bolo" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="img/bolo2.png" alt="bolo" class="d-block" style="width:100%">
            </div>
          
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
    </section>
    
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