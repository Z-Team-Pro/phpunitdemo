<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 12/08/18
 * Time: 04:00 م
 */
  require_once  './Code/Subject.php';
  require_once  './Code/Observer.php';

class SubjectTest extends  PHPUnit\Framework\TestCase
  {


    public  function  testObserversAreUpdated(){
        //create mock form observer with only update method
         $observer=$this->getMockBuilder(Observer::class)
                        ->setMethods(['update'])
                        ->getMock();

         //setup expectation for observer to call update just once with something String
        $observer->expects($this->once())
                 ->method('update')
                 ->with($this->equalTo('someThing'));

        //create Subject Object and attach mocked observer to it
        $Subject= new Subject('Ramy');
        $Subject->attach($observer);
        // Call the doSomething() method on the $subject object
        // which we expect to call the mocked Observer object's
        // update() method with the string 'something'.
        $Subject->doSomething();

    }

    public  function testErrorReport (){

        //create a mock from observer class with only error report funciton
        $observer= $this->getMockBuilder(Observer::class)
                        ->setMethods(['reportError'])
                        ->getMock();
        //create expectation fro this method
        $observer->expects($this->once())
                  ->method('reportError')
                  ->with($this->greaterThan(0),
                          $this->stringContains('someThing'),
                           $this->anything());

        //create Subject Object and attach observer to it

        $Subject= new Subject('Ramy');
        $Subject->attach($observer);
        //call dosomeThingBad
        $Subject->doSomethingBad();

    }


  }