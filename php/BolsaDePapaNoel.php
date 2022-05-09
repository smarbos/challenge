<?php

class Regalo {
    public function __construct(public string $name, public int $peso) {
        $this->name = $name;
        $this->peso = $peso;
    }
}

class BolsaDePapaNoel {

    public function __construct() {
        $this->bolsa = array();
        $this->pesoTotal = 0;
    }

    public function sortByPeso($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    public function agregarRegalo(Regalo $regalo) {
        if ($this->yaExiste($regalo)) {
            throw new Exception("El regalo ya fue agregado");
        } else if ($regalo->peso > 5000) {
            throw new Exception("La bolsa no puede contener mas de 5000 gramos");
        } else {
            array_push($this->bolsa, $regalo);
            $this->pesoTotal = $this->pesoTotal+$regalo->peso;
        }
    }

    public function yaExiste(Regalo $regalo) {
        print_r($this->bolsa);
        if (in_array($regalo, $this->bolsa)) {
            return true;
        } else {
            return false;
        };
    }

    public function pesoActual() {
        return $this->pesoTotal;
    }

    public function regaloMasPesado() {
        usort($this->bolsa, array($this, "sortByPeso"));
        return $this->bolsa[0]->name;
    }
}
