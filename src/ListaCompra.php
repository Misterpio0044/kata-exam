<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{


    public function hacer(string $comando) : string
    {
        $palabras = explode(" ", $comando);

        return $palabras[1] ?? "";
    }

}