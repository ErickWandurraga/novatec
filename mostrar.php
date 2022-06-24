<?php
$mostrar = include("db.php");
if ($mostrar){
    $consulta="SELECT * from clientes";
    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        while($row = $resultado-> fetch_array()){
            $id_Cliente = $row ['id_cliente'];
            $Nombre = $row ['Nombre'];
            $Apellido = $row['Apellido'];
            $TipodeDoc = $row['TipodeDoc'];
            $Doc= $row['doc'];
            $Direccion = $row['direccion'];
            $Telefono = $row['telefono'];
            ?>
            <div>
                <h2><?php echo $id_Cliente;?></h2>
                <h2><?php echo $Nombre;?></h2>
                <h2><?php echo $Apellido;?></h2>
                <h2><?php echo $TipodeDoc;?></h2>
                <h2><?php echo $Doc;?></h2>
                <h2><?php echo $Direccion;?></h2>
                <h2><?php echo $Telefono;?></h2>

            </div>
        }
    }
}
