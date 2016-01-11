<?php
use Hackbox\Shapes\Circle;

class CircleTest extends PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $circle = new Circle(.05);
        
        $this->assertEquals("Circle", $circle->getName());
    }
    
    public function testPerimeter()
    {
        $circle = new Circle(3);
        
        $this->assertEquals(18.85, round($circle->getPerimeter(), 2));
    }
    
    public function testArea()
    {
        $circle = new Circle("10");
    
        $this->assertEquals(314.16, round($circle->getArea(), 2));
    }
}
