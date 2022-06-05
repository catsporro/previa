<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Crear Factura</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<br>
<br>
<br>

<div class="container">

    <div class="row">
        <div class="col-6 col-sm-3">
                <h3>Crear Factura</h3>
        </div>
        <div class="col-6 col-sm-3">
            <h3># <?=$_SESSION['ultimoRegistro']?></h3>
        </div>
    </div>

    <br>

    <form class="p-4" method="POST" action="index.php">    
        <div class="row">
            <div class="col-6 col-sm-6">
                <input type="text" class="form-control" name="txtNombreCliente" placeholder="Nombre Cliente">
            </div>
            <div class="col-6 col-sm-6">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tipo Pago
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Contado</a>
                        <a class="dropdown-item" href="#">Crédito</a>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
        </div>
        <br><br>

        
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <?php  while($pedido = $pedidos->fetch_object()): ?> 
                <tbody>
                    <tr>
                        <th scope="row"><?=$pedido->id ?></th>
                        <td><?=$pedido->producto ?></td>
                        <td><?=$pedido->cantidad ?></td>
                        <td><?=$pedido->subtotal ?></td>  
                    </tr>
                </tbody>
            <?php  endwhile;  ?>
        </table>

        <div class="row">
            <div class="col-6 col-sm-3">
                <input type="text" class="form-control" name="txtNombreProducto" placeholder="Nombre Producto">
            </div>
            <div class="col-6 col-sm-3">
                <input type="text" class="form-control" name="txtCantidad" placeholder="Cantidad">
            </div>
            <div class="col-6 col-sm-3">
                <input type="text" class="form-control" name="txtValor" placeholder="Valor">
            </div>
            <div class="col-6 col-sm-3">
                <button type="submit" class="btn btn-primary" name="codigo">Agregar</button>
            </div>
            <div class="w-100"></div>
        </div>
        <br><br>
        <div class="row justify-content-end">
            <div class="col-12 col-sm-3">
                <button type="submit" name="guardarFactura" class="btn btn-primary">Guardar Factura</button>
            </div>
            <div class="w-100"></div>
        </div>
        <br><br>
    </form>

    <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">TipoPago</th>
                </tr>
            </thead>
            <?php  while($factura = $facturas->fetch_object()): ?> 
                <tbody>
                    <tr>
                        <th scope="row"><?=$factura->id ?></th>
                        <td><?=$factura->nombre ?></td>
                        <td><?=$factura->total ?></td>
                        <td><?=$factura->fecha ?></td>  
                        <td>
                            <?php if($factura->estado == 1) { ?>
                                Activa
                            <?php } 
                             else { ?>
                                Cancelada   
                            <?php } ?>
                        </td>  
                        <td>
                            <?=$factura->descripcion ?>
                        </td>  
                    </tr>
                </tbody>
            <?php endwhile;  ?>
    </table>
    
</div>


<br>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>




