<?php


   //test exceptions
 class ExceptionsTest extends  PHPUnit\Framework\TestCase {

        public function testThrowException(){

            $this->expectException(InvalidArgumentException::class);

 }



 }

