<?php
        $usuarios = loadEventsFromJson();
        // $usuarios = [
        //     "usuario1" => ["nombre" => "ñengoflow", "email" => "retrasaomental@gmail.net", "pass" => "1234"],
        //     "usuario2" => ["nombre" => "ayayay", "email" => "ayayay@gmail.net", "pass" => "1234"],
        // ];

        if(isset($_POST["email"]) && isset($_POST["pass"])) {
            $nombre = "";
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $loginCorrecto = false;
            foreach($usuarios as $usuario) {
                if($usuario["email"] == $email && $usuario["pass"] == $pass) {
                    $nombre = $usuario["nombre"];
                    $loginCorrecto = true;
                    break;
                }
            }
            if($loginCorrecto) {
                require_once "pokeapi.php";
            } else {
                require_once "index.php";
                $color = "red";
                echo "<p style='color:$color;'>Login incorrecto</p>";
                echo "<style>
                    #email, #pass {
                        border-color: red;
                    }
                      </style>"; 
            }
        }
?>