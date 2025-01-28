<?php

    require_once "./models/CitaModel.php";

    class CitaController {

        /*
        ATRIBUTOS DE CLASE.
        En este caso tenemos CitaModel -> Para poder acceder a la Base de Datos
        */
        private $citaModel;

        /*
        CONSTRUCTOR DE CLASE
        El constructor de clase lo utilizamos para inicializar el atributo
        $citaModel.
        */
        public function __construct() {
            $this->citaModel = new CitaModel();
        }

        /**
         * Método para mostrar el view de AltaCita -> Contiene la página para dar de alta una cita
         */
        public function showAltaCita($errores = []) {
            require_once "./views/citasViews/AltaCitaView.php";
        }


    }

?>