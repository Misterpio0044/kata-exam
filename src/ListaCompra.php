<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{


    public function hacer(string $comando) : string
    {
        $productos = explode(" ", $comando);
        $cantidad = $productos[2] ?? 1;

        return $productos[1] . " x" . $cantidad;
    }


}