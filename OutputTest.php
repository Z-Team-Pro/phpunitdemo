<?php

Class OutputTest extends  PHPUnit\Framework\TestCase{


    //test the output of the function
    public function testOutput(){
        $this->expectOutputString('foo');
        echo 'fo';
    }



}