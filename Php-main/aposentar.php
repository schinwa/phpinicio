<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Calcular aposentadoria</title>

    <script src="js/script.js"></script>
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
             <div class="masthead-heading text-uppercase">Aposentadoria</div>
         </div>
     </header>

</head>
<body>

    <div id="formAposentar">
        <form>   
                    <!-- Aposentar-->
        <section class="page-section bg-light" id="aposentar">
            <div class="container">
                <div class="text-center">
               
    <div id="telaAposenta">
        <p id="apos"></p>
    </div>

             <!-- Form-->
 <section class="page-section" id="formJuros">
    <div class="container">
                        <!-- Receita input-->
                        <form>
                        <div class="text-center">
                            <p class="section-subheading text-muted">Genero: </p>
                            <input type="radio" id="M" name="mulher" value="M">
                            <label class="masthead-heading text-uppercase" for="M">Mulher</label><br>
                            <input type="radio" id="H" name="homem" value="H">
                            <label class="masthead-heading text-uppercase" for="H">Homem</label><br>
                            <input class="form-control" type="number" id="idade" name="idade" placeholder="Digite sua idade:" required><br>
                            <input class="form-control" type="number" id="tempo" name="tempo" placeholder="Digite o tempo de contribuicao:" required><br> 
                            <a class="btn btn-primary btn-xl text-uppercase" onclick='aposentar()'>Calcule!</a>
                        </div>
                        </form>
                    </div>
                    <div class="form-group">
                    </div>
                </div>
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