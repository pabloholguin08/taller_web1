<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M land</title>
    <link rel="shortcut icon" href="img/teclado.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-dark text-white body">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/microfono.png" width="30" height="30" class="d-inline-block align-top" alt="Logo" loading="lazy">
            <font face="Comic Sans MS">MUSIC LAND</font>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Inicio </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Carrito <span class="sr-only">(current)</span></a>
    </ul>
  </div>
    </nav>
    </header>
    <main>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form action="carrito.php" method="POST">
                <h2 class="text-center mb-4">CARRITO DE COMPRA</h2>

                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad1">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Unidad($)" name="precio1">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 2" name="producto2">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad2">
                    </div>                           
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Unidad($)" name="precio2">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 3" name="producto3">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad3">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Unidad($)" name="precio3">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 4" name="producto4">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad4">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Unidad($)" name="precio4">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 5" name="producto5">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad5">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Unidad($)" name="precio5">
                    </div>
                </div>

                <h1 class="mb-3"></h1>
                <button class="btn btn-warning btn-block" type="submit" name="botonCalcular">Calcular</button>
                </form>

                <?php 
                if(isset($_POST["botonCalcular"])):
               ?>
               <div class="border bg-dark mt-1 text-white pl-3">
                    <h5 class="mt-1">ESTA ES TU FACTURA DE COMPRA</h5>
                    <h5 class="mt-3">
                        <?php
                        $precio1=$_POST["precio1"];
                        $cantidad1=$_POST["cantidad1"];
                        $producto1=$_POST["producto1"];
                        $neto1 = $precio1 * $cantidad1;

                        $precio2=$_POST["precio2"];
                        $cantidad2=$_POST["cantidad2"];
                        $producto2=$_POST["producto2"];
                        $neto2 = $precio2 * $cantidad2;

                        $precio3=$_POST["precio3"];
                        $cantidad3=$_POST["cantidad3"];
                        $producto3=$_POST["producto3"];
                        $neto3 = $precio3 * $cantidad3;

                        $precio4=$_POST["precio4"];
                        $cantidad4=$_POST["cantidad4"];
                        $producto4=$_POST["producto4"];
                        $neto4 = $precio4 * $cantidad4;

                        $precio5=$_POST["precio5"];
                        $cantidad5=$_POST["cantidad5"];
                        $producto5=$_POST["producto5"];
                        $neto5 = $precio5 * $cantidad5;

                        $total = $neto1 + $neto2 + $neto3 + $neto4 + $neto5;

                        echo("El producto 1 es : ".$producto1.", con una cantidad de ".$cantidad1." productos ---->($)".$neto1);
                        echo("<br>");
                        echo("El producto 2 es: ".$producto2.", con una cantidad de ".$cantidad2." productos ---->($)".$neto2);
                        echo("<br>");
                        echo("El producto 3 es : ".$producto3.", con una cantidad de ".$cantidad3." productos ---->($)".$neto3);
                        echo("<br>");
                        echo("El producto 4 es: ".$producto4.", con una cantidad de ".$cantidad4." productos ---->($)".$neto4);
                        echo("<br>");
                        echo("El producto 5 es: ".$producto5.", con una cantidad de ".$cantidad5." productos ---->($)".$neto5);
                        echo("<br>");
                        echo("<br>");
                        echo("*******************");
                        echo("<br>");
                        echo("El total de la compra fué de: ($)".$total)
                        ?>
                    </h5>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    </main>
    <footer>
    
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

