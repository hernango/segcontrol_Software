
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");

class sesionController{

  public function validarSesion($u,$c){
    $s = new usuariosDAO();
    $obj = $s->validadSesion($u,$c);
    if(is_null($obj) ){
        echo  "<span> No se encuentra el usuario o la contraseña es incorrecta </span>";
    }else{
      $cookie = new usuario(
        $obj->getId_usuario(),
        $obj->getId_rol(),
        $obj->getUsuario(),
        $obj->getClave(),
        $obj->getEstado()
      );
      //$url="master.php?id_usuario=".$obj['id']."&rol=".$obj['rol']."&nombre=".$obj['nombre']."&estado=".$obj['estado']."&id_sesion_tipo=".$obj['id_sesion_tipo'];
      $url ="master.php?array=".urlencode(serialize($cookie));
      echo  "<script>window.location.replace('".$url."');</script> ";
      //header('Location: ../../vistas/master.php?array='.serialize($cookie));
   }
 }
}
?>
