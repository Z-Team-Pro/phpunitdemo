<?php

Class OutputTest extends  PHPUnit\Framework\TestCase{


    //test the output of the function
    public function testOutput(){
        $this->expectOutputString('foo');
        echo 'foo';
    }


    //incomplete test
//
//    public  function testIncomplte(){
//        //write some test here then mark the function as incomplete
//
//        $this->markTestIncomplete();
//
//    }



}