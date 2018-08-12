<?php
/**
 *
 * Created by PhpStorm.
 * User: ramy
 * Date: 12/08/18
 * Time: 01:51 م
 */

use PHPUnit\Framework\TestCase;
require_once './Code/Work.php';
class DoubleTest extends TestCase{



    public  function testCreateMockFromWork () {
        //create mock from work class

        $stub= $this->createMock(Work::class);
        $stub->method('doSomeThing')->willReturn('test');

        $this->assertSame('test',$stub->doSomeThing());
     }

     public function testCallBackfromMockClass(){

        $stub=$this->createMock(Work::class);
        $stub->method('doSomeThing')
            ->willReturnCallback('strtoupper');

        //then this funciton will return the vlue of strtoupper with arrgument
         $this->assertSame('RAMY',$stub->doSomeThing('ramy'));

     }




}