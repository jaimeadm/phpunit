<?php
use PHPUnit\Framework\TestCase;

class AssertativaTest extends TestCase {

    public function testArrayHasKey() {

        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertArrayHasKey('nome', $array);
    }

    public function testCount() {

        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertCount(2, $array);   
    }

    public function testEmpty() {

        $a = new Assertativa();
        $array = array(); //$a->getArray();

        $this->assertEmpty($array);   
    }

    public function testContain() {

        $array = array(1, 2, 3, 4, 5, 'Fulano');

        $this->assertContains(3, $array);
    }

    public function testContainOnly() {

        $array = array(1, 2, 3, 4, 5);

        $this->assertContainsOnly('int', $array);
    }

    public function testAttributeExists() {

        $this->assertClassHasAttribute('numero', Assertativa::class);
    }

    public function testRegex() {
        //assertRegExp (deprecated)

        $this->assertMatchesRegularExpression('/^[a-z]{3}$/', 'ola');
    }

    public function testDirExists() {
        $this->assertDirectoryExists('classes');
    }

    public function testDirPermissionRead() {
        $this->assertDirectoryIsReadable('tests');
    }

    public function testDirPermissionWrite() {
        $this->assertDirectoryIsWritable('tests');
    }

    public function testFilaEquals() {
        $this->assertFileEquals('lista1.txt', 'lista2.txt');
    }

    public function testBooleanTrue() {
        $this->assertTrue(is_file('lista1.txt'));
    }

    public function testBooleanFalse() {
        $this->assertFalse(is_file('classes'));
    }

    public function testNull() {
        $idade = null;
        $this->assertNull($idade);
    }

    public function testVarType() {
        //assertInternalType (deprecated)

        $a = new Assertativa();
        $this->assertIsArray($a->getArray());
    }

    public function testEquals() {
        $nome = 'fulano';
        $this->assertEquals('fulano', $nome);
    }

    public function testString() {
        $texto = "Olá, tudo bem?";
        $this->assertStringStartsWith('Olá', $texto);
        $this->assertStringEndsWith('bem?', $texto);
    }

    public function testNumbersGreater() {
        $totalUsuarios = 15;
        $this->assertGreaterThan(10, $totalUsuarios);
        $this->assertGreaterThanOrEqual(15, $totalUsuarios);
    }

    public function testNumbersLess() {
        $totalUsuarios = 9;
        $this->assertLessThan(10, $totalUsuarios);
        $this->assertLessThanOrEqual(15, $totalUsuarios);
    }

}