<?php
    class PedidoController{
        
        public function mostrarInicio(){
            //Model
            require_once 'models/pedido.php';
            require_once 'models/factura.php';
            $pedido = new Pedido();
            $factura = new Factura();
            $ultimoRegistro = $pedido->MostrarUltimoRegistro();
            $_SESSION['ultimoRegistro'] = $ultimoRegistro[0];
            $pedido->GuardarAutogenerado();
            $pedidos = $pedido->MostrarTodos('pedido');
            $facturas = $factura->MostrarFactura();
            //view
            require_once 'views/pedido/pedido.php';
            
        }

        public function insertarProducto($producto,$cantidad,$subtotal){
            require_once 'models/pedido.php';
            $pedido = new Pedido();
            $pedido->producto = $producto;
            $pedido->cantidad = $cantidad;
            $pedido->subtotal = $subtotal;
            $ultimoRegistro = $pedido->MostrarUltimoRegistro();
            $_SESSION['ultimoRegistro'] = $ultimoRegistro[0];
            $pedido->InsertarProducto($_SESSION['ultimoRegistro'], $producto ,$cantidad ,$subtotal);
            $pedidos = $pedido->MostrarTodos('pedido');
            //view
            require_once 'views/pedido/pedido.php';
        }

        public function mostrarUltimoRegistro(){
            //Model
            require_once 'models/pedido.php';
            $pedido = new Pedido();
            
            $ultimoRegistro = $pedido->MostrarUltimoRegistro();
            //view
            require_once 'views/pedido/pedido.php';
            
        }


        public function mostrarFactura(){
            //Model
            require_once 'models/pedido.php';
            $factura = new Factura();
            $pedido = new Pedido();

            $pedido->GuardarAutogenerado();
            $ultimoRegistro = $pedido->MostrarUltimoRegistro();
            $_SESSION['ultimoRegistro'] = $ultimoRegistro[0];
            $facturas = $factura->MostrarFactura();
            //view
            require_once 'views/pedido/pedido.php';
            
        }

        public function editar(){
            
        }

        public function borrar(){
            
        }

     


    }

?>