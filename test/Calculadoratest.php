<?php
class CalculadoraTest extends \PHPUnit\Framework\TestCase
{
public function testSuma()
{
$calc = new Calculadora(3,4);
$this->assertEquals(8, $calc->suma()); 
}
}
?>+