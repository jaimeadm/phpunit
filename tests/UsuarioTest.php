<?php
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase {

    public function testExpectNomeCompleto() {
        
        $this->expectOutputString('Alan Silva');

        $usuario = new Usuario();
        $usuario->setNome('Alan');
        $usuario->setSobrenome('Silva');
        echo $usuario->getNomeCompleto();
    }

    public function testIdade() {

        $usuario = new Usuario();
        $usuario->setIdade(90);
        $this->assertEquals(90, $usuario->getIdade());
        
        //$this->markTestIncomplete('Falta criar os métodos set e get de idade');
    }

    public function testIdadeString() {

        $usuario = new Usuario();
        $usuario->setIdade(90);
        $this->assertEquals('90 anos', $usuario->getIdade(true));
        
        //$this->markTestIncomplete('Falta criar o método da classe');
    }

}