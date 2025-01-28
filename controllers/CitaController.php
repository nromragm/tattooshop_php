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

        public function insertCita($datos = []) {

            // EXTRAER LOS DATOS DEL FORMULARIO Y ALMACENARLOS EN VARIABLES
            $input_id = $datos["input_id"] ?? "";
            $input_descripcion = $datos["input_descripcion"] ?? "";
            $input_fecha_cita = $datos["input_fecha_cita"] ?? "";
            $input_cliente = $datos["input_cliente"] ?? "";
            $input_tatuador = $datos["input_tatuador"] ?? "";

            // COMPROBAR SI LOS DATOS DEL FORMULARIO SON CORRECTOS -> SI NO VIENEN VACIOS
            $errores = [];
            if($input_id == "" || $input_descripcion == "" || $input_fecha_cita == "" || $input_cliente == "" || $input_tatuador == "" ) {

                // COMPROBÉIS QUÉ CAMPO ESTÁ VACÍO Y LO AÑADÁIS A UN ARRAY DE ERRORES
                if($input_id == "") {
                    $errores["error_id"] = "El campo id es obligatorio";
                    /*
                        [
                            "error_id" -> "El campo id es obligatorio",
                        ]
                    */
                }

            }

            if($errores) {
                $this->showAltaCita($errores);
            }

        }


    }

?>