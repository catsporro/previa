<?php

    if(!isset($_POST['codigo'])){
        require_once 'autoload.php';

        $nombreControlador = 'PedidoController';
        $accionMostrar = 'mostrarInicio';

        $controlador = new $nombreControlador();
        $controlador->$accionMostrar();
    }
    else if (isset($_POST['codigo'])) {

        require_once 'autoload.php';

        //Permite obtener los valores que se hayan digitado en los campos de texto
        $nombreProducto = $_POST["txtNombreProducto"];
        $cantidad = $_POST["txtCantidad"];
        $valor = $_POST["txtValor"];

        $nombreControlador = 'PedidoController';
        $accionInsertarProducto = 'insertarProducto';

        $controlador = new $nombreControlador();
        $controlador->$accionInsertarProducto($nombreProducto, $cantidad, $valor);
     
    }
    else if(isset($_POST['guardarFactura'])){
        require_once 'autoload.php';

        $nombreProducto = $_POST["txtNombreProducto"];
        $cantidad = $_POST["txtCantidad"];
        $valor = $_POST["txtValor"];
    

        $nombreControlador = 'PedidoController';
        $accionInsertarProducto = 'mostrarFactura';

        
        $controlador = new $nombreControlador();
        $controlador->$accionInsertarProducto($nombreProducto, $cantidad, $valor);
    }







/*if(isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
    
}else{
    echo"La pagina no existe!";
    exit();
}
if(class_exists($nombre_controlador)){
   
    $controlador = new $nombre_controlador();
    if(isset($_GET['action'])  && method_exists($controlador,$_GET['action'] )){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo"La pagina no existe!!";
    }
}else{
    echo"La pagina no existe!!!";
}*/

?>