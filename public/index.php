<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS API USER</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<section id="information">
    <div class="container">
        <p>Buenas y bienvenido!!</p>
        <p>Si has llegado hasta aquí, es porque eres desarrollador y quieres saber como implementar la API de usuarios en tu entorno.</p>
        <p>Pues bien, te explico los pasos a seguir, y creeme es bastante sencillo.</p>
        <br>
        <p>En primer lugar tienes que estar familiarizado con la estructura de carpetas de este proyecto.</p>
        <div class="information-folder">
            <p>
                Actualmente, la carpeta más importante es la <strong>"src"</strong>, dentro de esta carpeta, hay otras dos subcarpetas que contienen, 
                las llamadas necesarias para poder registrar un usuario y obtener todos sus datos, una vez registrados.
            </p>

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p>
                            1.) src/Helpers/ApiCalls.php => Esta clase contiene todas las llamadas que se hacen contra la API.
                        </p>
                        <p>
                            2.) src/Http/UserApiCall.php => Esta clase contiene todos los métodos necesarios para tratar la información de cada usuario.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</html>