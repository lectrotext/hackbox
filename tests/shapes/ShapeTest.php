<?php
use \Mockery as m;
use Hackbox\Shape;

class ShapeTest extends PHPUnit_Framework_TestCase
{
    public function testShape()
    {
        $mock = m::mock(new Shape);
        $mock->shouldReceive('getName', 'getPerimeter', 'getArea')
             ->andReturn('Rombus', 12.0, 30.75);
        
        
        $this->assertEquals('Rombus', $mock->getName());
        $this->assertEquals(12.0, $mock->getPerimeter());
        $this->assertEquals(30.75, $mock->getArea());
    }

    public function testEmptyShape()
    {
        $shape = new Shape();
        
        $this->assertEquals("", $shape->getName());
        $this->assertEquals(0, $shape->getPerimeter());
        $this->assertEquals(0, $shape->getArea());
    }
}
