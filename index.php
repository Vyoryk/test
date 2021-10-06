<?php
require_once 'Persona.php';
$persona1 = new Persona;

$persona1 -> setNombre('Victor')
        ->setPeso(83)
        ->setEstatura(1.7)
        ->calcularIMC();