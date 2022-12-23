<?php

/* Executar Teste */
// ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ArquivoTest.php

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase {

    public function testFalhaNoInclude() {
        // $this->expectDeprecation()
        // $this->expectNotice()
        // $this->expectWarning()
        $this->expectError();

        include 'config.php';      
    }

    public function testArquivoExiste() {
        $this->assertTrue(
            file_exists('README.md')
        );
    }
} 