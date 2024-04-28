<?php
require_once("aldeano.php");
require_once("arbusto.php");

// Instanciacion Aldeano - Arbusto
$aldeano = new Aldeano();
$arbusto = new Arbusto();

// Ejecucion
$aldeano->recolectar($arbusto);

require_once("pesquero.php");
require_once("bancodepesca.php");


$bancoDePesca = new BancoDePesca();
$pesquero = new Pesquero();

$pesquero->recolectar($bancoDePesca);
?>
