<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Color</title>
    <style>
        /* Estilo inicial del label */
        #mi-label {
            color: red;
        }
    </style>
</head>
<body>

<!-- Etiqueta que cambiará de color -->
<label id="mi-label"><?php echo "Este es mi label"; ?></label>

<!-- Botón para cambiar el color -->
<button onclick="cambiarColor()">Cambiar Color a Azul</button>

<script>
    function cambiarColor() {
        // Cambia el color a azul
        <?php echo 'document.getElementById("mi-label").style.color = "blue";'; ?>
    }
</script>

</body>
</html>
