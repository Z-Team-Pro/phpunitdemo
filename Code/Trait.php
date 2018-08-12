<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 12/08/18
 * Time: 05:47 م
 */
Trait TraitDemo {

    public  function  concert(){
      return $this->AbstractMethod();
    }
    public  abstract function AbstractMethod();

}