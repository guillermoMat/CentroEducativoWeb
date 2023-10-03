
<!--       guardamos las citas  -->

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombrePadre = $_POST["nombrePadre"];
    $nombreMadre = $_POST["nombreMadre"];
    $apellidoPadre=$_POST["apellidoPadre"];
    $apellidoMadre=$_POST["apellidoMadre"];
    $telefonoPadre=$_POST["telefonoPadre"];
    $telefonoMadre = $_POST["telefonoMadre"];
    $comentario = "Padre: " . $nombrePadre ." ".$apellidoPadre ." - Madre: " . $nombreMadre ." ".$apellidoMadre . " - Telefono Padre: ". $telefonoPadre." - Telefono Madre: ". $telefonoMadre."\n\n" ;

    // Abre el archivo de comentarios (o crea uno si no existe)
    $archivo = fopen("solicitudCitas.txt", "a");
}
    if ($archivo) {
        fwrite($archivo, $comentario);
        fclose($archivo);

        #echo "Solicitud de cita agendada correctamente.";
    }else{
        #echo "Error al guardar cita.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción</title>

   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>




<!--       definimos la estructura html para agendar cita  -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="display-5 fw-bolder" style="text-align: center;margin-top: 20px;margin-left: 40px;text-decoration:underline">Agendar cita</h1>
                    </div>
<div class="container mt-5" style="margin-bottom: 20px;">
  
  <h4>Dejenos sus datos para que la institución organice una cita para poder empezar con los tramites correspondientes.</h4>
  <form  method="post"  id="miFormulario">
    <div class="form-group">
      <label for="nombre">Nombre del padre:</label>
      <input type="text" class="form-control" id="nombre" name="nombrePadre" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="nombre">Apellido del padre:</label>
      <input type="text" class="form-control" id="nombre" name="apellidoPadre" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre de la madre:</label>
      <input type="text" class="form-control" id="nombre" name="nombreMadre" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="nombre">Apellido de la madre:</label>
      <input type="text" class="form-control" id="nombre" name="apellidoMadre" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="nombre"> Teléfono padre:</label>
      <input type="number" class="form-control" id="nombre" name="telefonoPadre" step="1"  required autocomplete="off">
      <!--  <input type="text" class="form-control" id="nombre" name="telefonoPadre" autocomplete="off">
    
       ten en cuenta que esto aún permite valores decimales y también permite que el usuario ingrese caracteres especiales como el signo más (+) y el signo menos (-).
       Si deseas restringir la entrada a números enteros, puedes usar el atributo step con un valor de 1:
    -->
    </div>
    <div class="form-group">
      <label for="nombre"> Teléfono madre:</label>
      <!--  <input type="text" class="form-control" id="nombre" name="telefonoMadre" autocomplete="off"> -->
      <input type="number" class="form-control" id="nombre" name="telefonoMadre"  step="1" required autocomplete="off">
    </div>
     <input type="submit" class="btn btn-primary" value="Enviar datos" onclick="mostrarAviso()"> 
    
  </form>
</div>

<script>
    function mostrarAviso() {
      alert('Solicitud agendada, la institución se contactara en los próximos días.');
    }
  </script>


<!-- footer     -->
<footer>
<div class="copyright py-4 text-center" style="background-color:#1b263b;margin-top: 100px;">
            <div class="container"><a href="index.php">Volver Inicio</a></div>
        </div>
        </footer>

    


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    
</body>
</html>