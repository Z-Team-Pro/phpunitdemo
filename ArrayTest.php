<?php


use PHPUnit\Framework\TestCase;

class ArrayTest extends  TestCase{

   //depends function on function

    public  function  testEmpty(){

        $stack=[];
        $this->assertEmpty($stack);
        return $stack;

    }
    /**
     * @depends testEmpty
     */


    public  function testPush(array  $stack){


        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));
        return $stack;
    }

    /**
     * @depends testPush
     */

    public function testPop (array $stack){

        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);

    }




}