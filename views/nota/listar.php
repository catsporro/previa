<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<h3>Listar Nota</h3>

<button type="button" class="btn btn-primary">Botonnnnn</button>
<button type="button" class="btn btn-danger">Danger</button>
<h3>Listar Notas</h3>
<hr>
<?php  while($nota = $notas->fetch_object()):  ?>
<b><?=$nota->titulo ?></b> - <?=$nota->fecha ?> <br>
<?=$nota->descripcion ?>
<hr>
<br>
<?php  endwhile;  ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>




