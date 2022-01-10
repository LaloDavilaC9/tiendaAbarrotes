<?php

    function conectar(){
        //Parametros de conexion.
        $servername = 'localhost';
        $database = 'tienda';
        $username = "root";
        $password = "";

        //Crear la conexion.
        $conn = mysqli_connect($servername, $username, $password, $database);
        //Revisar si se realizo la conexion.
        if(!$conn) {
            die("ERROR: La conexion no se realizó correctamente." . mysqli_connect_error());
        }
        $cbd = mysqli_select_db($conn, $database);
        if(!$cbd) {
            die("ERROR DE CONEXION CON LA BASE DE DATOS");
        }
        return($conn);
    }
    
    function paginaPrincipal(){
        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }
        $sql = "SELECT * FROM producto WHERE rating = 5";
        $result = $conexion->query($sql);
        if ($result->num_rows>0) {
            //si hay

            echo "<div id='mejoresJuegos'>
            <table id='tablaJuegos' border=1>";

            while ($row=$result->fetch_assoc()) {
                $id=$row['id_producto'];
                $nombre=$row['nombre'];
                $descripcion=$row['descripcion'];
                $precio=$row['precio'];
                $stock=$row['stock'];
                $img=$row['img'];
                $rating=$row['rating'];
                $seccion=$row['seccion'];

               echo  "
            <tr>
                <td>
                    <a href='juego.php?id=$id&nombre=$nombre'  class='nombreJuego' >".$nombre."</a>
                </td>
                <td>
                    <i  class='descripcion'>".$descripcion."</i>
                </td>
                <td>
                    <b  class='precioJuego' >".$precio."</b>
                </td>
                <td>
                    <b  class='cantidadJuego' >".$stock."</b>
                </td>
                <td>
                    <img src='imagenes/".$img.".jpg' id='img' alt=''>
                </td>
                <td>
                    <i  class='ratingJuego'>".$rating."</i>
                </td>
                <td>
                    <i  class='seccion'>".$seccion."</i>
                </td>
             </tr>";




            }
            echo"</table></div>";

        }
         mysqli_close($conexion);


        
    }

    function generarProducto($id){

        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }

        $sql = "SELECT * FROM producto WHERE id_producto = $id";
        $result = $conexion->query($sql);

        if ($result->num_rows>0) {
            

            while ($row=$result->fetch_assoc()) {
                $id=$row['id_producto'];
                $nombre=$row['nombre'];
                $descripcion=$row['descripcion'];
                $precio=$row['precio'];
                $stock=$row['stock'];
                $img=$row['img'];
                $rating=$row['rating'];
                $seccion=$row['seccion'];

            }

            echo"<h3>$nombre</h3>
<img src='imagenes/$img.jpg' id='imagenJuegoSeleccionado' alt=''>
<p id='descripcionJuegoSeleccionado'>$descripcion</p>
<b id='precioJuegoSeleccionado'>$precio</b>
<b id='stockJuegoSeleccionado'>$stock</b>
<b id='ratingJuegoSeleccionado'>$rating</b>
<b id='seccionJuegoSeleccionado'>$seccion</b>
<button type='submit'>Comprar</button>";




        }        
    }






    function menu (){
        echo "<table border=1>
        <tr>
            <th><a href='index.php'>Inicio</a>
            </th>
            <th><a href='categorias.php'>Categorias</a>
            </th>
            <th><img src='imagenes/1.png'  id='carrito' alt=''><a href='carrito.php'> Carrito  </a>
            </th>
            <th><a href='contacto.php'>Contacto</a>
            </th>
        </tr>
    </table>";
    }

    

?>

