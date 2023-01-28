<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>ACCESO A UBICACION</title>
</head>
<body>
    <H1>Acceso A Ubicacion por gps</H1>

    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <button id="btnIniciar" class="btn btn-info">Iniciar</button>
                <button id="btnDetener" class="btn btn-danger">Detener</button>
                <br>
                <strong>Latitud: </strong><span id="latitud"></span>
                <strong>Longitud: </strong><span id="longitud"></span>
                <a href="ubicaciones.txt">Ver Ubicaciones</a>
                <pre id="log"></pre>
            </div>
        </div>
    </div>
    <script src="miscript.js"></script>
</body>
</html>