<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Módulos</title>
    <link rel="shortcut icon" href="img/logorojo.png">
	<link rel="stylesheet" type="text/css" href="EstiloInicio.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
    <script  src = " https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script >
    
    <link  rel = " stylesheet " href = " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css " >
    <script  src = " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " > </script >
    
    <link  rel = " stylesheet " href = " https://use.fontawesome.com/releases/v5.0.8/css/solid.css " >
    <script  src = " https://use.fontawesome.com/releases/v5.0.7/js/all.js " > </script >
    <link rel="stylesheet" type="text/css" href="Modulos.css">
    </head>
<body>
<header>
         <nav style="background-color: #F75554; height: 90px;  font-family: popins, sans-serif; text-transform:capitalize;" class="navbar custom-navbar navbar-expand-lg py-2">
          
         <a href="Modulos.html"><img src="./loggo1.jpg" style="width: 55px; height: 60px; margin-left: 50px;" ></a>
          <img style=" margin-left: 75%;" src="https://img.icons8.com/office/65/000000/user.png"/>
        <div style="width: 20%;" > 
            Johny Sierra <br>
           <a href=""style="color: black; text-decoration:none"> Admón </a>  <br>
           <a href="PagInicio.html" style="color: black; text-decoration:none "  > Cerrar Sesión  </a>            
        </div>
    </nav>

</header>
 <section class="page-section portfolio" id="portfolio">

            <div class="container">
                <h1 class="page-section-heading text-center text-uppercase text-white mb-0"></h1>
                <div class="row justify-content-center">
                    <div class="col-md-3 col-lg-2 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"> </div>
                            </div>
                           <a href="RegistrarUsu.html" class="btn btn-Usuarios"><span>USUARIOS</span></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a href="modulo_Ventas.html" class="btn btn-Compras"><span>COMPRAS</span></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a href="consultarproducto.html" class="btn btn-Inventario"><span>INVENTARIO</span></a>
                        </div>
                    </div>
                                    <div class="col-md-3 col-lg-2 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"> </div>
                            </div>
                            <a href="" class="btn btn-Ventas"><span>VENTAS</span></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"> </div>
                    </div>
                        
             
                    </div>
                </div>

            </div>
        </section>
  <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap" id="forter">
  <i>Creado por: Maria Fernada Castillo, Daniela Padilla Blanco y Johny Sierra Martinez</i>
</footer>
</body>
</html>
<script>
    alert('')
</script>


<?php
include './includes/db.php';
echo "hello world";
?>  