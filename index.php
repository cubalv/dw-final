<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incripcion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <nav class="barra-nav">
            <ul class="menu">
                <li class="texto_titulo">INSCRIPCION</li>
            </ul>
        </nav>
    </header>

    <div class="titulo-cont">
        <h1 class="titulo">Llena tus datos!</h1>
    </div>
    <div class="contenedor-principal">
            <form action="insert_alumno.php" method='post' class="formulario-contenedor" >
                <section  class="p1-form">
                <label>Primer apellido</label>
                <input type="text" maxlength="50" required placeholder="Primer apellido" class="textbox" name="nombre1">
                
                <label>Segundo apellido</label>
                <input type="text" maxlength="50" required placeholder="Segundo apellido" class="textbox" name="nombre2">
                
                <label>Apellido de casada</label>
                <input type="text" maxlength="50" placeholder="Apellido de casada" class="textbox" name="nombre3">
                
                <label>Primer Nombre</label>
                <input type="text" maxlength="50" required placeholder="Primer Nombre" class="textbox" name="apellido1">
                
                <label>Segundo nombre</label>
                <input type="text" maxlength="50" required placeholder="Segundo Nombre" class="textbox" name="apellido2">
                
                <label>Tercer nombre</label>
                <input type="text" maxlength="50" placeholder="Tercer Nombre" class="textbox" name="apellido3">
                <label>Fecha Nacimiento</label>
                <input type="date" required class="textbox" name="fecha_nac">
                <label>DPI</label>
                <input type="text" minlength="13" maxlength="13" placeholder="Escribir DPI sin espacios ni guiones"  class="textbox" name="dpi">
            </section>    
            <section class="p2-form">      
                <label for="">Telefono</label>
                <input type="tel" required  class="textbox" name="telefono">

                <label>Departamento</label>
                <select  class="textbox" name="depto">
                    <option value="" selected>Seleccione</option>
                    <option value="#">Quetzaltenango</option>
                    <option value="#">Guatemala</option>
                    <option value="#">Peten</option>
                    <option value="#">Solola</option>
                    <option value="#">...</option>
                </select>
                 
                <label for="">Correo electronico</label>
                <input type="email" placeholder="Email" required  class="textbox" name="correo_elec">
            
            <label>Carrera</label>
            <select  class="textbox" name="carrera">
                <option value="" selected>Seleccione</option>
                <option value="#">Ing. Sistemas</option>
                <option value="#">Ing. Electronica</option>
                <option value="#">Ing. Telecomunicaciones</option>
                <option value="#">...</option>
            </select>
            <label>Jornada</label>
            <select  class="textbox" name="jornada">
                <option type="radio" name="jornada">Matutina</option>
                <option type="radio" name="jornada">Vespertina</option>
                <option type="radio" name="jornada">Fin de semana</option>   
            </select>
             
            <label>Título de nivel medio</label>
            <input type="text" minlength="13" maxlength="13" placeholder="Escriba el titulo" name="titulo">
            
             
            <label>Adjuntar fotografía Título de nivel medio</label>
             
            <input
            type="file"
            id="docpicker"
            accept=".png" value="Adjuntar en formato .png"/>
            <button class="boton-envir">enviar informacion</button>
        </section>
            </form>
    </div>
</body>
</html>