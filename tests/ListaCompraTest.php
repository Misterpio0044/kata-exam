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
    public function añadirProductoSinCantidadDevuelveDichoProductoYCantidadUno(): void
    {
        $listaCompra = new ListaCompra();

        $result = $listaCompra->hacer("añadir leche");

        $this->assertEquals("leche x1", $result);
    }

    /**
     * @test
     */
    public function añadirProductoConCantidadDevuelveDichoProductoYSuCantidad(): void
    {
        $listaCompra = new ListaCompra();

        $result = $listaCompra->hacer("añadir leche 3");

        $this->assertEquals("leche x3", $result);
    }


}