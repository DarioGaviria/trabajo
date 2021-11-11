<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link rel="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>VETERINARIA</title>
</head>
<body>
  <center><h1>Veterinaria tu Mascotas</h1></center>
  
  <table class="table table-hover table-dark">
  <thead>
   <tr>
   <td>Codigo</td>
            <td>Nombre</td>
            <td>Raza</td>
            <td>Sexo</td>
            <td>Color</td>
            <td>Telefono</td>
            <td>Opciones</td>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($mascotas as $mascota):?>
  <tr>
  <td><?php echo $mascota->codigo?></td>
  <td><?php echo $mascota->nombre?></td>
  <td><?php echo $mascota->raza?></td>
  <td><?php echo $mascota->sexo?></td>
   <td><?php echo $mascota->color?></td>
    <td><?php echo $mascota->telefono?></td>
     <td>
              <a href="">
                <i class="material-icons">edit</i>
              </a>
              <a href="<?php echo base_url('mascota/eliminar/'.$mascota->codigo)?>">
                <i class="material-icons">delete_sweep</i>
              </a>
            </td>
   </tr>
  <?php endforeach;?>
  
    </tbody>
     </table>  
  <a href="<?php echo base_url('mascota/nuevo')?>" class="waves-effect waves-light btn-small"><center><H1>INGRESE LA NUEVA MASCOTA !</H1></center></a>

  <img src="../img/animales.jpg"  width="580" height="390" />
  <img src="../img/tigre.jpg" width="580" height="390" />

</body>
</html>