<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Calculator;
use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function añadirProductoDevuelveDichoProducto()
    {
        $listaCompra = new ListaCompra();

        $result = $listaCompra->hacer("añadir pan");

        $this->assertEquals("pan", $result);
    }
}