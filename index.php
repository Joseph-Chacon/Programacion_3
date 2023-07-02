<?php
require 'database/conProductos.php';
$db = new Database();
$con = $db->conectar();

$SQL = $con->prepare("SELECT id, nombre, descripcion, precio FROM productos WHERE activo = 1");

$SQL->execute();
$resultado = $SQL->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styleCards.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E-commerce Web</title>
</head>

<body id="body">
    <header id="encabezado">
        <H1 id="e-commerce">E-commerce Web</H1>
        <input type="text" id="busqueda" placeholder="Búsqueda por nombre de artículo">
        <a id="btnBuscar" class="btn btn-primary">
            <i class="fas fa-search search-icon"></i>
        </a>
        <a href="iniciarSesion.html" class="fa-solid fa-user"></a>
        <a href="iniciarSesion.html" class="btn btn-danger" id="cerrarSesion">Cerrar Sesion</a>
    </header>
    <form action="xxxxx" method="POST">
        <div id="opciones">
            <p>Ofertas</p>
            <p>Herramienta</p>
            <p>Cerámica</p>
            <p>Pinturas</p>
            <p>Inicio</p>
        </div>
        <div class="cards-title">
            <?php foreach($resultado as $row){?>
                <div class="cards">
                    <div class="content">
                        <?php 
                            $nombre = $row['nombre'];
                            $imagen = "imagen/" .$nombre. ".jpg";

                            if (!file_exists($imagen)){
                                $imagen = "imagen/no-foto.jpg";
                            }
                        ?>
                        <img src="<?php echo $imagen; ?>" class="pictures">
                        <h2><?php echo $row['nombre']; ?></h2>
                        <p><?php echo $row['descripcion']; ?></p>
                        <p> ₡<?php echo number_format($row['precio'], 2, '.', ','); ?></p>
                    </div>
                    <div class="footer">
                        <button type="submit" id="boton-comprar"> 
                            <i class="fas fa-shopping-cart" id="carrito"></i>
                        </button>
                    </div>
                </div>
            <?php }?>
        </div>
    </form>
    <footer>
        <p>Pie de página</p>
    </footer>
</body>

</html>