<?php
class Pesquero{
    private $velocidadRecoleccion = 18;

    public function recolectar(BancoDePesca $bancoDePesca) {
        $tiempo = ceil($bancoDePesca->getAlimento() / $this->velocidadRecoleccion);

        echo "<p>¡El aldeano pesquero recolecto comida en $tiempo minutos!</p>";
    }
}
?>