<?php

namespace Deg540\DockerPHPBoilerplate;

use function Sodium\add;

class ListaCompra
{

    private array $listado = [];

    public function __construct()
    {
        $this->listado = [];
    }


    public function hacer(string $comando) : string
    {


        $productos = explode(" ", $comando);

        $producto = $productos[1];
        $cantidad = $productos[2] ?? 1;

        foreach ($this->listado as $elemento) {

            $productos = explode(" ", $elemento);

            if ($elemento[0] == $producto) {
                $cantidad = $cantidad + ;
            }
        }

        $this->listado[] = $producto . " x" . $cantidad;

        return $this->listado[0];
    }


}