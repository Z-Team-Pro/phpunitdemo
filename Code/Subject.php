<?php
require_once 'Observer.php';
class Subject
{
    protected $observers = [];
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function doSomething()
    {
// Do something.
// ...
// Notify observers that we did something.
        $this->notify('someThing');
    }
    public function doSomethingBad()
    {
        foreach ($this->observers as $observer) {
            $observer->reportError(42, 'Something bad happened', $this);
        }
    }
    protected function notify($argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }
// Other methods.
}