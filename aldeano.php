<?php
class Aldeano{
private $velocidadRecoleccion = 18;
    public function recolectar(Arbusto $arbusto) {
        $tiempo = ceil($arbusto->getAlimento() / $this->velocidadRecoleccion);
    
    echo "<p>¡El aldeano recolecto todo el alimento en $tiempo minutos!</p>";

    }
}
?>