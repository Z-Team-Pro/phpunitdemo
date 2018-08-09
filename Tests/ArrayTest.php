<?php


use PHPUnit\Framework\TestCase;

class ArrayTest extends  TestCase{

   //test data provider with array of arrays

    public function additionProvider (){

        //must return array of arrays
        //better to user keys in the array as the test result will contain the key that fail the test

        return [
            'allZero'=>['0',0,0],
            'oneZero'=>[1,0,1],
           'ones'=> [1,1,2]
        ];



    }

    //adding the previous data provider to the test function

    /**
     * @dataProvider additionProvider
     */
    public function testDataProvider($a,$b,$c){
        //where a+b=c

        $this->assertSame($c,$a+$b);

    }


}