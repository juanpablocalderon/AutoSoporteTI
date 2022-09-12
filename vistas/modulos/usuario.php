<div class="content-wrapper">
 
 <section class="content-header">

    <h1>
        Usuario
        <small>Usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Usuario</li>
      </ol>
    </section>

      <div class="content">

        <div class="box">

          <div class="box-header with-border">

            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>                            

            </button>
          
          </div>

        </div>

        <div class="box-body">


          <div class="box">

            <table class="table table-bordered table-striped dt-responsive tablas">

              <thead>
                
                <tr>
                  
                  <th style="width:10px">Id</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Telefono</th>
                  <th>Foto</th>
                  <th>Cargo</th>
                  <th>Id Caso</th>
                  <th>Acciones</th>

                </tr>



              </thead>

            <tbody>

              <tr>

              <td>01</td>
              <td>pepohijbjhblkn</td>
              <td>admin</td>
              <td>3014962783</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td>00001</td>
              <td>
                
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

              </tr>

                            <tr>

              <td>02</td>
              <td>Isabella Calderon</td>
              <td>admin</td>
              <td>3014465168</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>user</t>
              <td>00002</td>
              <td>
                
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

              </tr>

              

              <td>03</td>
              <td>Constanza Gomez</td>
              <td>admin</td>
              <td>301471654</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>temp</t>
              <td>00003</td>
              <td>
                
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

              </tr>
              
            </thead>  

          </table>

        </div>
        
      </div>
      
    </div>
     
  </section>
    
</div>

    <!--===========================================
  =MODAL AGREGAR USUARIO=
  ============================================-->

 <!-- Modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">
   
    <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">


           <!--===========================================
              =CABEZA DEL MODAL=
           ============================================--> 

    <div class="modal-header" style="background: #3c8dbc;color: white;" >

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Usuario</h4>

    </div>

      <div class="modal-body">

        <div class="box-body">

         <!--===========================================
              =ENTRADA PARA EL NOMBRE=
           ============================================--> 


        <div class="form-group">

          <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-users"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>

          </div>

        </div>

          <!--===========================================
                  =MODAL AGREGAR USUARIO=
             ============================================-->

        <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-key"></i></span>

              <input type="text"class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>

            </div>

        </div>

          <!--===========================================
                  =MODAL AGREGAR CONTRASEÑA=
             ============================================-->

        <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <input type="password"class="form-control input-lg" name="nuevoPassword" autocomplete="on" placeholder="Ingresar contraseña" required>

            </div>

        </div>  

        </div>


        <!--===========================================
                  =SELECCIONAR PERFIL=
         ============================================-->        

          
          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoPerfil">

                  <option value="">Seleccionar Perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="temp">Temporal</option>   
                  <option value="user">Usuario</option> 

                </select>

            </div>       

          </div>


           <!--===========================================
                  =SUBIR FOTO=
         ============================================-->        

          
          <div class="form-group">

            <div class="panel">SUBIR FOTO</div>

            <input type="file" class="nuevaFoto" id="nuevaFoto" name="nuevaFoto">

            <p class="help-block">Peso maximo de la foto 20mb</p>

            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">  
            

          </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>

      </div>

      <!-- ?php -->

        <!-- $crearUsuario = new ControladorUsuarios(); -->
        <!-- $crearUsuario -> ctrCrearUsuario(); -->


      <!-- ?> -->


      
    


      </form>

    </div>


  </div>

</div>
