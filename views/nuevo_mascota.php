 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <title></title>
    </head>

    <body>

        <div class="container">
            <h1>Crear Mascota</h1>

            <div class="row">
                <form class="col s12" action="<?php echo base_url('mascota/guardar')?>" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="codigo" type="text" class="validate" name="codigo">
                            <label for="">Codigo</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nombre" type="text" class="validate" name="nombre">
                            <label for="">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="raza" type="text" class="validate" name="raza">
                            <label for="">Raza</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="sexo" type="text" class="validate" name="sexo">
                            <label for="">Sexo</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="color" type="text" class="validate" name="color">
                            <label for="">Color</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="telefono" type="text" class="validate" name="telefono">
                            <label for="">Telefono</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </body>

    </html>