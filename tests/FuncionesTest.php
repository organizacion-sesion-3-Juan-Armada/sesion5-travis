<?php
use PHPUnit\Framework\TestCase;
require 'Funciones.php';

class FuncionesTest extends TestCase
{
    private $funciones;
 
    protected function setUp(): void
    {
        $this->funciones = new Funciones();
    }
 
    protected function tearDown(): void
    {
        $this->funciones = NULL;
    }
 
    //public function testEs_Par1(): void
    //{
    //    $result = $this->funciones->es_par(1);
    //    $this->assertEquals(true, $result);
    //}
	
	public function testEs_Par2(): void
    {
        $result = $this->funciones->es_par(2);
        $this->assertEquals(true, $result);
		
		$result = $this->funciones->es_par(5); 
		$this->assertEquals(false, $result);
		
		$result = $this->funciones->es_par(0); 
		$this->assertEquals(true, $result);
		

    }
}
