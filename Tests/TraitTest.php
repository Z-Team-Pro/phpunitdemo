<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 12/08/18
 * Time: 05:51 م
 */

require_once  './Code/Trait.php';

class TraitTest extends  \PHPUnit\Framework\TestCase
{


     public function testMockTrait(){
         //create mock from the Trait

         $mock= $this->getMockForTrait(TraitDemo::class );
          //set expectation for mock

         $mock->expects($this->any())
               ->method('AbstractMethod')
               ->will( $this->returnValue(true));

         //call the Mocked functions

         $this->assertTrue($mock->concert());
     }


}