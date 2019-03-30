<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SistemaVotos</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css"> -->

    <link rel="stylesheet" href="/src/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <form class="form" action="index.html" method="post">
        <h1>Establecimiento: Escuela Nro 111</h1>
        <h3>Mesa Nro: 12</h3>
        <div class="form-group">
          <label for="cantidad_votantes">Cantidad de votantes</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group">
          <label for="votos_validos">Votos validos</label>
          <input type="number" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group">
          <label for="votos_nulos">Votos nulos</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group">
          <label for="votos_blancos">Votos blancos</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <hr>
        <div class="form-group">
          <label for="frente_victoria">Frente para la victoria</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group">
          <label for="partido_renovador">Partido renovador</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group">
          <label for="juntos_podmeos">Juntos podemos</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group">
          <label for="vamos_todo">Vamos por todo</label>
          <input type="text" class="form-control" id="" placeholder="0">
        </div>

        <!-- <div class="form-group"> -->
          <button type="button" class="btn btn-primary btn-lg pull-right" >Enviar</button>
        <!-- </div> -->

      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="src/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  </body>
</html>
