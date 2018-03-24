
<?php
$sesion=unserialize($_GET["var"]);
$sesion_nombre=$sesion['nombre_contacto'];
 ?>
<div class="modal-dialog modal-lg " >
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Informacion</h4>
  </div>
  <div class="modal-body">

      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Datos  del usuario  </h3>
        </div>

        <form role="form">
          <div class="box-body">
            <div class="form-group ">
              <label for="selectRol">Rol  </label>
              <select class="form-control " id="selectRol" disabled>
                <option value="<?php echo $rol; ?>" ><?php echo $rol; ?></option>
                <option value="administrador">ADMINISTRADOR</option>
                <option value="asistente">ASISTENTE</option>
              </select>
            </div>

            <div class="form-group ">
              <label for="usuario">Usuario  </label>
              <input class="form-control " type="text" id="usuario" value="<?php echo $usuario ?>" placeholder="Usuario . . ." disabled >
            </div>
            <div class="form-group ">
              <label for="clave">Clave</label>
              <input class="form-control " type="text" id="clave" value="<?php echo $usuario ?>" placeholder="Clave . . ." disabled >
            </div>

            <div class="form-group ">
              <label for="selectEstado">Estado </label>
              <select class="form-control " id="selectEstado" disabled>
                <option value="<?php echo $estado; ?>" ><?php echo $estado; ?></option>
                <option value="activo">ACTIVO</option>
                <option value="inactivo">INACTIVO</option>
              </select>
            </div>
            <div class="form-group ">
              <label >Nombre del cliente  </label>
              <input class="form-control " type="text" value="<?php echo $sesion_nombre; ?>" placeholder="Nombre . . ." disabled>
            </div>

            <div class="form-group ">
              <label >Tipo de Documento  </label>
              <select class="form-control " disable>
                <?php
                   if($arrayObj['tipo_documento'] == "cc"){
                     echo "<option value='cc' >Cedula de ciudadania</option>";
                   }else{
                     if($arrayObj['tipo_documento'] == "ce"){
                        echo "<option value='ce' >Cedula de extranjeria</option>";
                     }else{
                         echo "<option value='ti' >Tarjeta de identidad</option>";
                     }
                   }

                ?>
                <option value="cc" >Cedula de ciudadania</option>
                <option value="ce">Cedula de extranjeria</option>
                <option value="ti">Tarjeta de identidad</option>
              </select>
            </div>
            <div class="form-group ">
              <label >Numero de documento </label>
              <input class="form-control "  value="<?php echo $arrayObj['numero_documento']; ?>" type="text" placeholder="numero de documento . . ." disabled>
            </div>
            <div class="form-group ">
              <label >Direccion </label>
              <input class="form-control "  value="<?php echo $arrayObj['direccion']; ?>" type="text" placeholder="Direccion . . ." disabled>
            </div>
            <div class="form-group ">
              <label >Ciudad </label>
              <input class="form-control " value="<?php echo $arrayObj['ciudad']; ?>" type="text" placeholder="Ciudad . . ." disabled>
            </div>

            <div class="form-group ">
              <label >Fijo </label>
              <input class="form-control " value="<?php echo $arrayObj['direccion']; ?>" type="text" placeholder="Fijo Telefonico . . ." disabled>
            </div>
            <div class="form-group ">
              <label >celular #1 </label>
              <input class="form-control "  value="<?php echo $arrayObj['celular1']; ?>" type="text" placeholder="Celular . . ." disabled>
            </div>
            <div class="form-group ">
              <label >celular #2 </label>
              <input class="form-control " type="text" value="<?php echo $arrayObj['celular1']; ?>"  placeholder="Celular . . ." disabled>
            </div>
            <div class="form-group ">
              <label >celular #3 </label>
              <input class="form-control " type="text" value="<?php echo $arrayObj['celular3']; ?>" placeholder="Celular . . ." disabled>
            </div>
            <div class="form-group ">
              <label >Email </label>
              <input class="form-control " type="text" value="<?php echo $arrayObj['email']; ?>" placeholder="nombre@empresa.com  . . ." disabled>
            </div>
          </div>

        </form>
      </div>


  </div>
  <div class="modal-footer">
    <input type="submit" class="btn btn-default" value="Editar"/>
    <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
  </div>
</div>

</div>
