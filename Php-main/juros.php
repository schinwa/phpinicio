<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Calcular Juros</title>

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

<!-- navgation -->
<?php include("menu.php"); ?>
 
 <!-- Masthead-->
 <header class="masthead">
     <div class="container">
         <div class="masthead-subheading">Calcular</div>
         <div class="masthead-heading text-uppercase">Juros</div>
     </div>
 </header>

</head>

 <!-- Form-->
 <section class="page-section" id="formJuros">
    <div class="container">
                        <!-- Receita input-->
                        <form>
                        <div class="text-center">
                            <input class="form-control" type="number" id="cap" name="cap" placeholder="Insira o capital:" required><br>
                            <input class="form-control" type="number" id="taxa" name="taxa" placeholder="Insira a taxa de juros:" required><br>
                            <input class="form-control" type="number" id="tempo" name="tempo" placeholder="Insira as parcelas em meses:" required><br> 
                            <a class="btn btn-primary btn-xl text-uppercase" onclick='juros()'>Calcule!</a>
                        </div>
                        </form>
                    </div>
                    <div class="form-group">
                    </div>
                </div>
            </div>
</section>

    <div id="telaJuros">
        <p id="juros"></p>
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