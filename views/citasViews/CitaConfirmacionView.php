<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://assets-prd.ignimgs.com/2021/11/10/img-5126-1636581484404.PNG');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .confirmacion-cita {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: auto;
            font-size: 16px;
            line-height: 1.5;
        }

        .foto-tatuador img {
            border-radius: 50%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="confirmacion-cita">
        <h1 style="color: green;">ALTA CORRECTA</h1>

        <h2>Informacion de la cita: </h2>

        <p><b>Fecha de la cita:</b> <?= $fecha_cita_formatted ?></p>
        
        <p><b>Descripción de la cita:</b> <?= $input_descripcion ?></p>
        
        <p><b>Nombre del cliente:</b> <?= $input_cliente ?></p>

        <h2>Información del Tatuador</h2>
        <p><b>Nombre del tatuador:</b> <?= $tatuador["nombre"] ?></p>
        <p><b>Email del tatuador:</b> <?= $tatuador["email"] ?></p>
        
        <div class="foto-tatuador">
            <img src="<?= $tatuador["foto"] ?>" alt="Foto del tatuador" width="200">
        </div>
    </div>
</body>
</html>