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

    ?>


    <div class="mejoresJuegos">
        <table>
            <tr>
                <td>
                    <a href=""  class="nombreJuego" >Nombre del juego</a>
                </td>
                <td>
                    <img src="imagenes/halo.jpg" id="img" alt="">
                </td>
                <td>
                    <b  class="precioJuego" >$1999.99</b>
                </td>
                <td>
                    <i  class="ratingJuego">rating</i>
                </td>
                <td>
                <b  class="cantidadJuego" >100 Unidades</b>
                </td>
            
            </tr>
        </table>



    </div>







    
</body>
</html>