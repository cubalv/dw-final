<?php
    $nombre1=$_POST['nombre1'];
    $nombre2=$_POST['nombre2'];
    $nombre3=$_POST['nombre3'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $apellido3=$_POST['apellido3'];
    $fecha_nac=$_POST['fecha_nac'];
    $telefono=$_POST['telefono'];
    $depto=$_POST['depto'];
    $correo_elec=$_POST['correo_elec'];
    $carrera=$_POST['carrera'];
    $jornada=$_POST['jornada'];
    $titulo=$_POST['titulo'];
    $dpi=$_POST['dpi'];

    $conexion=mysqli_connect('localhost','root','','final');
    $consulta="INSERT INTO estudiante(id, nombre1, nombre2, nombre3, apellido1, apellido2, apellido3, fecha_nac, telefono, depto, correo_elec, carrera, jornada, titulo, dpi) VALUES ('$nombre1', '$nombre2', '$nombre3', '$apellido1', '$apellido2', '$apellido3', '$fecha_nac', '$telefono', '$depto', '$nombre2', '$correo_elec', '$carrera', '$jornada', '$titulo', '$dpi' )";
    $ejecutar=mysqli_query($conexion, $consulta);
    if(!$ejecutar){
        echo "Ocurrió un error";
    }else{
        header("Location: index.php");
    }
?>
