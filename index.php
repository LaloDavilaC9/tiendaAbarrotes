<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
    <div id="buscador">
    <form action="procesa.php" method="POST">
        <input type="text" class="buscadorTexto">
        <input type="submit" id="botonBuscar" value="BUSCAR">
        
    </form>

    </div> 

    <h3 id="titulo">Tienda de abarrotes.com</h3>

   
    <?php 
        include("metodos.php");
        menu();
        echo "<h4 id=tituloInicio >TOP JUEGOS DEL DIA</h4>";
        paginaPrincipal();
        
        

    ?>


       



    







    
</body>
</html>