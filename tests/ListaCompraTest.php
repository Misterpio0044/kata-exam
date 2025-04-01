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
    public function añadirProductoDevuelveDichoProductoYSuCantidad(): void
    {
        $listaCompra = new ListaCompra();

        $result = $listaCompra->hacer("añadir leche");

        $this->assertEquals("leche x1", $result);
    }


}