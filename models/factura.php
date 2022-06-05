<?php
    require_once 'modelobase.php';
    class Factura extends ModeloBase{

        /*public $id;
        public $fk_autogenerado;
        public $producto;
        public $cantidad;
        public $subtotal;*/

        
        public function __construct(){
            //herede la conexion a bd
            parent::__construct();
        }

        public function MostrarFactura(){

            $sql =  "SELECT fac.id ,cl.nombre, fac.total, fac.fecha, fac.estado, tippag.descripcion FROM cliente AS cl 
            INNER JOIN factura as fac 
            ON cl.id = fac.fk_cliente 
            INNER JOIN tipo_pago as tippag 
            ON tippag.id = fac.fk_tipopago 
            INNER JOIN autogenerado_pedido as aut 
            ON aut.id = fac.fk_autogenerado;";

            $query = $this->db->query($sql);
            return $query;
        }

    }

?>