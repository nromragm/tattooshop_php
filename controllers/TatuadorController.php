
<?php

    require_once "./models/TatuadorModel.php";

    class TatuadorController {

        private $tatuadorModel;

        public function __construct() {
            $this->tatuadorModel = new TatuadorModel();
        }

        public function showAltaTatuador($errores = []) {
            require_once "./views/tatuadoresViews/AltaTatuadorView.php";
        }

        public function insertTatuador($datos = []) {

            $input_nombre = $datos["input_nombre"] ?? "";
            $input_email = $datos["input_email"] ?? "";
            $input_password = $datos["input_password"] ?? "";
            $input_foto = $datos["input_foto"] ?? "";

            $errores = [];

            if ($input_nombre == "" || $input_email == "" || $input_password == "" || $input_foto == "") {
                if($input_nombre == "") {
                    $errores["error_nombre"] = "El campo nombre es obligatorio";
                }
                
                if($input_email == "") {
                    $errores["error_email"] = "El campo email es obligatorio";
                }

                if($input_password == "") {
                    $errores["error_password"] = "El campo password es obligatorio";
                }

                if($input_foto == "") {
                    $errores["error_foto"] = "El campo foto es obligatorio";
                }
            }
            
            $emailRepetido = $this->tatuadorModel->comprobarEmail($input_email);

            if($emailRepetido){
                $errores["error_email2"] = "El email ya existe";
            }

            if (!empty($errores)) {
                $this->showAltaTatuador($errores);

            } else {
                $operacionExitosa = $this->tatuadorModel->insertTatuador($input_nombre, $input_email, $input_password, $input_foto);

                if($operacionExitosa) {
                    require_once "./views/tatuadoresViews/AltaTatuadorCorrectaView.php";

                } else {
                    $errores["error_db"] = "Error al insertar el tatuador, inténtelo de nuevo más tarde.";
                    $this->showAltaTatuador($errores);
                }
            }
        }
    }
?>
