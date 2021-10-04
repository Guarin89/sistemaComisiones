<!DOCTYPE html>
<html lang="en">
<head>
<link href="Css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Comisiones </title>
</head>
<body>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<style>h1{color: #FF0083;}</style>
<header>
<center><h1>TIENDA CEREZA  COMISIONES </h1></center>
</header>
<section>
<form action="comision1.php" method="POST">
<div class="form-group">
<label for="FInicial">Fecha Inicial</label>
<input type="date" name="FInicial" class="form-control" id="FInicial">
</div>
<div class="form-group">
<label for="FFinal">Fecha Final</label>
<input type="date" name="FFinal" class="form-control" id="FFinal">
</div>
</section>
<br>

<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    VENDEDOR
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">LORENA</a></li>
    <li><a class="dropdown-item" href="#">MARIANA</a></li>
    <li><a class="dropdown-item" href="#">VANESSA</a></li>
  </ul>
</div>

<!--<div class="dropdown">
  <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    VENDEDOR
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Lorena</a></li>
    <li><a class="dropdown-item" href="#">Mariana</a></li>
    <li><a class="dropdown-item" href="#">Vanessa</a></li>
  </ul>
</div>-->

<br><br>
<center>
<input type="submit" value="CONSULTAR" class="btn btn-danger" name="btn_consultar">
</center>
</body>
</form>
<?php

if(isset($_POST['btn_consultar']))
{
    $FInicial =$_POST['Fecha'];
    $existe = 0;
    if($FInicial==""){
        echo "Consulta Fecha Inicial";
    }else{
        $resultados = mysqli_query($conexion, "SELECT * FROM comision
        WHERE Fecha= '$FInicial'");
        while($consulta = m($resultados))
        {
            echo "
            <table width = '100%' border = '1'>
            <tr>
            <td><b><center>nombreVendedor</center></b></td>
            <td><b><center>FInicial</center></b></td>
            <td><b><center>FFinal</center></b></td>
            <td><b><center>TotalVentas</center></b></td>
            </tr>
            <tr>
            <td><center> ".$consulta['nombre']."</center></td>
            <td><center> ".$consulta['FInicial']."</center></td>
            <td><center> ".$consulta['FFinal']."</center></td>
            <td><center> ".$consulta['TotalVentas']."</center></td>
            </tr>
            </table>";
            $existe++;
        }
    }
}
?>
<br><br>
<center><input type="submit" value="DESCARGAR" class="btn btn-danger" name="btn_descargar"></center>