<?php
    require_once 'modelobase.php';
    class Pedido extends ModeloBase{

        public $id;
        public $fk_autogenerado;
        public $producto;
        public $cantidad;
        public $subtotal;

        
        public function __construct(){
            //herede la conexion a bd
            parent::__construct();
        }


        public function GuardarAutogenerado(){
            $sql =  "INSERT INTO autogenerado_pedido (id) values ('null');";
            $guardado = $this->db->query($sql);
            return $guardado;
        }

        public function MostrarUltimoRegistro(){
            $sql =  "SELECT MAX(id) FROM autogenerado_pedido;";
            $query = $this->db->query($sql);
            $resultado = $query->fetch_row();
            return $resultado;
        }

        public function InsertarProducto($ultimoRegistro, $producto ,$cantidad ,$subtotal){
           $sql =  "INSERT INTO pedido  (fk_autogenerado, producto, cantidad, subtotal) values ({$ultimoRegistro[0]}, '{$producto}', '{$cantidad}', '{$subtotal}');";
           $guardado = $this->db->query($sql);
           if ($guardado === TRUE) {
                echo'<script type="text/javascript">
                alert("El producto se ha agregado correctamente");
                </script>';
          } else {
                echo'<script type="text/javascript">
                alert("Lo sentimos, el producto no se ha agregado, intentalo nuevamente");
                </script>';
    
          }
           return $guardado;
        }

    }

?>