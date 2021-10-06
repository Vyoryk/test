<?php

class Persona
{
    public $nombre;
    public $peso;
    public $estatura;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        return $this;
    }
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;
        return $this;
    }
    public function calcularIMC()
    {
        if ($this->nombre == null || $this->peso == null || $this->estatura == null) {
            echo 'Necesita ingresar datos.';
        } else if ($this->estatura == 0) {
            echo 'La estatura debe ser mayor a 0.';
        } else {
            $IMC = $this->peso / pow($this->estatura, 2);
            echo 'El nombre es: ' . $this->nombre . '<br>'
                . 'El peso es: ' . $this->peso . ' kilogramos<br>'
                . 'La estatura es: ' . $this->estatura . ' metros<br>'
                . 'El IMS es de: ' . $IMC . ' y su valor corresponde a ';;
            if ($IMC > 0 && $IMC < 18.5) {
                echo 'Delgadez o bajo peso.';
            } else if ($IMC >= 18.5 && $IMC <= 24.9) {
                echo 'Normal.';
            } else if ($IMC >= 25 && $IMC <= 29.9) {
                echo 'Sobrepeso.';
            } else if ($IMC >= 30) {
                echo 'Obesidad.';
            } else {
                echo 'Nada, porque son datos erroneos';
            }
        }
    }
}
