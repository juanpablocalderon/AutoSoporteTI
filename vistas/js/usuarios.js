/*--===========================================
        =SUBIR FOTO DEL USUARIO=
============================================--*/

$(".nuevaFoto").change(function(){


    var imagen = this.files[0];
    console.log("imagen", imagen);

/*--===========================================
        =VALIDAR TAMAÑO DE LA FOTO=
============================================--*/

if(imagen[" type"]  != "image/jpg" && imagen["type"] != "image/png" ){

        $(".nuevaFoto").val("");

        swal({

            title: "Error al subir la imagen",
            text: "!La imagen debe estar en formato JPG o PGN!",
            type: "error",
            confirmButtonText: "cerrar"
        });

    }else if(imagen["size"] > 2000000){

         $(".nuevaFoto").val("");

        swal({

            title: "Error al subir la imagen",
            text: "!La imagen no debe pesar mas de 2mb",
            type: "error",
            confirmButtonText: "cerrar"
        });

    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL (imagen);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);


        })        

    }

})