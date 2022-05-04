<?php

class Regalo {
    public function __construct(public string $name, public int $peso) {}
}

class BolsaDePapaNoel {
    public function agregarRegalo(Regalo $regalo) {
        throw new Exception("To be implemented");
    }

    public function yaExiste(Regalo $regalo) {
        throw new Exception("To be implemented");
    }

    public function pesoActual() {
        throw new Exception("To be implemented");
    }

    public function regaloMasPesado() {
        throw new Exception("To be implemented");
    }
}