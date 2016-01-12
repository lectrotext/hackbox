<?php

class CircleTest extends PHPUnit_Framework_TestCase
{
    public function testCircleName()
    {
        $circle = new Hackbox\Shapes\Circle(.05);
        
        $this->assertEquals("Circle", $circle->getName());
    }
    
    public function testCirclePerimeter()
    {
        $circle = new Hackbox\Shapes\Circle(3);
        
        $this->assertEquals(18.85, round($circle->getPerimeter(), 2));
    }
    
    public function testCircleArea()
    {
        $circle = new Hackbox\Shapes\Circle("10");
    
        $this->assertEquals(314.16, round($circle->getArea(), 2));
    }
}
