<?php
use PHPUnit\Framework\TestCase;

class AssertativaTest extends TestCase {

    public function testArrayHasKey() {
        //assertArrayHasKey

        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertArrayHasKey('nome', $array);
    }

    public function testCount() {
        //assertCount

        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertCount(2, $array);   
    }

    public function testEmpty() {
        //assertEmpty

        $a = new Assertativa();
        $array = array(); //$a->getArray();

        $this->assertEmpty($array);   
    }

    public function testContain() {
        //assertContains

        $array = array(1, 2, 3, 4, 5, 'Fulano');

        $this->assertContains(3, $array);
    }

    public function testContainOnly() {
        //assertContainsOnly

        $array = array(1, 2, 3, 4, 5);

        $this->assertContainsOnly('int', $array);
    }

    public function testAttributeExists() {
        //assertClassHasAttribute

        $this->assertClassHasAttribute('numero', Assertativa::class);
    }

    public function testRegex() {
        //assertRegExp (deprecated)
        //assertMatchesRegularExpression

        $this->assertMatchesRegularExpression('/^[a-z]{3}$/', 'ola');
    }

}