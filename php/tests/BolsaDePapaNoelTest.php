<?php

require('BolsaDePapaNoel.php');

test("Agrego un regalo a la bolsa y compruebo que esté en la bolsa", function() {
    $bolsa = new BolsaDePapaNoel();
    $regalo = new Regalo("Playstation 5", 240);

    $bolsa->agregarRegalo($regalo);

    expect($bolsa->yaExiste($regalo))->toBeTrue();
});

test('Compruebo que si no agregué un regalo a la bolsa, no esté dentro de la bolsa', function() {
    $bolsa = new BolsaDePapaNoel();
    $regalo = new Regalo("Samsung Galaxy S20", 400);

    expect($bolsa->yaExiste($regalo))->toBeFalse();
});

test("No es posible agregar dos veces un mismo regalo", function() {
    $bolsa = new BolsaDePapaNoel();
    $regalo1 = new Regalo("Iphone 13", 500);
    $regalo2 = new Regalo("Iphone 13", 500);

    $bolsa->agregarRegalo($regalo1);
    expect(fn() => $bolsa->agregarRegalo($regalo2))->toThrow('El regalo ya fue agregado');
});

test("No puedo agregar un regalo que pese más de 5 kg (5000 gramos)", function() {
    $bolsa = new BolsaDePapaNoel();
    $regalo = new Regalo("Televisor 60'", 8000);

    expect(fn() => $bolsa->agregarRegalo($regalo))->toThrow("La bolsa no puede contener mas de 5000 gramos");
});

test("Agrego a la bolsa regalos por un peso de 240 gramos y hay dentro exactamente 240 gramos", function() {
    $bolsa = new BolsaDePapaNoel();
    $regalo1 = new Regalo("Iphone 11", 194);
    $regalo2 = new Regalo("Airpods", 46);

    $bolsa->agregarRegalo($regalo1);
    $bolsa->agregarRegalo($regalo2);

    expect($bolsa->pesoActual())->toBe(240);
});

test("Obtengo el regalo más pesado de la bolsa", function() {
    $bolsa = new BolsaDePapaNoel();
    $regalo1 = new Regalo("Libro: Harry Potter y la piedra filosofal", 220);
    $regalo2 = new Regalo("Cubo de Rubik", 120);
    $regalo3 = new Regalo("Casco de Ironman", 1496);

    $bolsa->agregarRegalo($regalo1);
    $bolsa->agregarRegalo($regalo2);
    $bolsa->agregarRegalo($regalo3);

    expect($bolsa->regaloMasPesado())->toBe($regalo3->name);
});
