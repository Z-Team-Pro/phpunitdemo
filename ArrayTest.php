<?php


use PHPUnit\Framework\TestCase;

class ArrayTest extends  TestCase{

   //depends function on  multiple functions

    public  function testOne(){

        $stack=[];
        $this->assertEmpty($stack);
        return 'one';

    }


    public  function testTow(){

        $this->assertTrue(true);
        return 'tow';
    }

    /**
     * @depends testOne
     * @depends  testTow
     */

    public function testMultiDepends ($a,$b){
        $this->assertSame('one',$a);
        $this->assertSame('tow','tow');
    }






}