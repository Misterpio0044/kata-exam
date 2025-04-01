<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{


    public function hacer(string $comando) : string
    {
        $productos = explode(" ", $comando);
        $cantidad = count($productos) - 1;

        return $productos[1] . " x" . $cantidad;
    }


}