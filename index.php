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
// Instanciacion  Pesquero--BancoDePesca
$pesquero = new Pesquero();
$bancoDePesca = new BancoDePesca();

// Ejecucion
$pesquero->recolectar($bancoDePesca);
?>
