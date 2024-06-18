<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #a3c5e0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
        }

        .row {
            max-width: 500px;
            padding: 20px;
            background-color: #dce5ef;
            border-radius: 20px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row m-3 g-3 text-center needs-validation" novalidate>
            <h2 class="text-center">Formulario de Registro</h2>
            <form action="register_process.php" method="POST">
                <div class="col position-relative">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control text-center" id="nombre" name="nombre" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="apellidos" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control text-center" id="apellidos" name="apellidos" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="number" min="18" class="form-control text-center" id="edad" name="edad" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="pais">País:</label>
                    <select class="form-select text-center" id="pais" name="pais" onchange="actualizarPrefijo()" required>
                        <option selected>Seleccione un país</option>
                        <option value="es" data-prefijo="+34 ">España</option>
                        <option value="us" data-prefijo="+1 ">Estados Unidos</option>
                        <option value="fr" data-prefijo="+33 ">Francia</option>
                    </select>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="telef" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control text-center" id="telef" name="telef" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="mail" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control text-center" id="mail" name="mail" placeholder="Escribe tu Correo Electrónico" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control text-center" id="usuario" name="usuario" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="passw" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control text-center" id="passw" name="passw" placeholder="Introduce tu contraseña" required>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="text_area" class="form-label">Información Adicional:</label>
                    <textarea id="text_area" class="form-control text-center" name="text_area" rows="10" cols="50" required></textarea>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="genero">Género:</label>
                    <select class="form-select text-center" id="genero" name="genero" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <label for="estado_civil">Estado Civil:</label>
                    <select class="form-select text-center" id="estado_civil" name="estado_civil" required>
                        <option value="soltero">Soltero</option>
                        <option value="casado">Casado</option>
                        <option value="divorciado">Divorciado</option>
                        <option value="viudo">Viudo</option>
                    </select>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col position-relative">
                    <h2 style="font-size: 20px">¿Tienes experiencia?</h2>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="experiencia" id="experiencia_si" value="si">
                        <label class="form-check-label" for="experiencia_si">Sí</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="experiencia" id="experiencia_no" value="no">
                        <label class="form-check-label" for="experiencia_no">No</label>
                    </div>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>
                <div class="col-12 position-relative">
                    <h2 style="font-size: 20px">Lenguaje de programación favorito:</h2>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leng_fav" id="leng_fav" value="php" required>
                        <label class="form-check-label" for="leng_fav">PHP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leng_fav" id="leng_fav" value="js" required>
                        <label class="form-check-label" for="leng_fav">JS</label>
                    </div>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col-12 position-relative">
                    <input type="checkbox" id="estudiante" name="estudiante">
                    <label for="estudiante">¿Eres estudiante?</label><br>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div>

                <div class="col-12 position-relative">
                    <input type="checkbox" id="trabajo" name="trabajo">
                    <label for="trabajo">¿Tienes trabajo?</label>
                    <div class="valid-tooltip">
                        Valor Correcto
                    </div>
                    <div class="invalid-tooltip">
                        Valor Incorrecto
                    </div>
                </div><br>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Registrarte</button>
                </div><br>
            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>