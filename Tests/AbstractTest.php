<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 13/08/18
 * Time: 12:52 م
 */
 require_once './Code/AbstractDemo.php';
class AbstractTest extends  \PHPUnit\Framework\TestCase
{

    public  function  testAbstractCalss(){
        //create mock for abstract Class
        $mock= $this->getMockForAbstractClass(AbstractDemo::class);
        //create expectation for this mock
        $mock->expects($this->any())
              ->method('AbstractMethod')
              ->will($this->returnValue(true));
        //run the function

        $this->assertTrue($mock->concert());
}

}