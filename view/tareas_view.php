<?php
include_once 'libs/Smarty.class.php';

class TareasView {
  private $smarty;
    private $errores;


function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}

function mostrar($tareas){
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->assign('tareas', $tareas);
  $this->smarty->display('index.tpl');
  $this->smarty->display('footer.tpl');
}

function mostrarError($error){
  array_push($this->errores, $error);
}



}


?>
