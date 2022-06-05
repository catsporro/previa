<?php
    class NotaController{
        
        public function mostrar(){
            //Model
            require_once 'models/nota.php';
            $notac = new Nota();
        
            $notas = $notac->MostrarTodos('notas');
            //View
            require_once 'views/factura/factura.php';
            
        }

        public function editar(){
            
        }

        public function borrar(){
            
        }

        public function crear(){
            require_once 'models/nota.php';
            $notac = new Nota();
           /* $notac->usuario_id = 1;
            $notac->titulo = "Ingles";
            $notac->descripcion = "expreciencia educativa desde php";*/
            $notac->GuardarAutogenerado();
            
            header('Location: index.php?controller=Nota&action=mostrar');
        }


    }

?>