<?php

class ControladorUsuario{

/*--===========================================
  =    INGRESO DE USUARIOS       =
  ============================================--*/

    static public function ctrIngresoUsuario(){

  		if(isset($_POST['ingUsuario'])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuarios";

                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);


                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){

                    $_SESSION["iniciarsesion"] = "ok";

                    echo '<script>

                            window.location = "inicio";

                    </script>';    



                }else{

                    echo '<br><div class="alert alert-danger">Error al ingresar al sistema, vuelve a intentarlo </div>';

                }  
            }
        }
  	}	

 

/*--===========================================
  =    REGISTRO DE USUARIOS       =
  ============================================--*/

    static public function ctrCrearUsuario(){

        if(isset($_POST["nuevoUsuario"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóú ]+$/', $_POST["nuevoNombre"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

                /*--===========================================
                        =    VALIDAR IMAGEN       =
                 ============================================--*/

                $ruta = "";

                if(isset($_FILES["nuevaFoto"]["tmp_name"])){


                    list($ancho,$alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                /*--===========================================
                        =    DIRECTORIO PARA GUARDAR FOTO      =
                 ============================================--*/

                    $directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

                    mkdir($directorio, 0755);


                /*--===========================================
                = DE ACUERDO AL TIPO DE IMAGEN SE APLICAN LAS FUNCIONES POR DEFECTO PHP      =
                 ============================================--*/


                 if($_FILES["nuevaFoto"]["type"]== "image/jpg"){

                    /*--===========================================
                        =   GUARDAR LA IMAGENEN EL DIRECTORIO   =
                    ============================================--*/

                    $aleatoreo = mt_rand(100,999);

                    $ruta = "vistas/img/usuarios".$_POST["nuevoUsuario"]."/".$aleatoreo.".jpg";

                    $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

                    $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagejpeg($destino, $ruta);

                 }

                 if($_FILES["nuevaFoto"]["type"]== "image/png"){

                    /*--===========================================
                        =   GUARDAR LA IMAGENEN EL DIRECTORIO   =
                    ============================================--*/

                    $aleatoreo = mt_rand(100,999);

                    $ruta = "vistas/img/usuarios".$_POST["nuevoUsuario"]."/".$aleatoreo.".png";

                    $origen = imagecreatefrompgn($_FILES["nuevaFoto"]["tmp_name"]);

                    $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagepng($destino, $ruta);

                }
                    
                } 

                $tabla ="usuarios";

                $datos = array("nombre"=> $_POST["nuevoNombre"],
                                "usuario"=> $_POST["nuevoUsuario"],
                                "password"=> $_POST["nuevoPassword"],
                                "perfil"=> $_POST["nuevoPerfil"],
                                "foto" => $ruta);

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $datos);

            }

                if ($respuesta == "ok"){


            }else{

                echo '<script> 

                    Swal.fire({

                        icon: "error" ,
                        title: " ! El usuario no puede ir vacio o llevar caracteres especiales",
                        showConfirmButton: true,
                        confimButtomText: "Cerrar",
                        closeOnConfirm: false


                    }).then((result)=>{


                        if(result.value){

                            window.location = "usuarios"

                        }
                    });

                </script>';

            }

        }

    }

}

