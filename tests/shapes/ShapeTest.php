<?php
use \Mockery as m;

class ShapeTest extends PHPUnit_Framework_TestCase
{
    public function testShape()
    {
        $shape = m::mock('Hackbox\Shape');
        
        $shape->shouldReceive('getName')->andReturn('Rombus');
        $shape->shouldReceive('getPerimeter')->andReturn(12.0);
        $shape->shouldReceive('getArea')->andReturn(30.75);
        
        $this->assertEquals('Rombus', $shape->getName());
        $this->assertEquals(12.0, $shape->getPerimeter());
        $this->assertEquals(30.75, $shape->getArea());
    }

    public function testEmptyShape()
    {
        $shape = new Hackbox\Shape();
        
        $this->assertEquals("", $shape->getName());
        $this->assertEquals(0, $shape->getPerimeter());
        $this->assertEquals(0, $shape->getArea());
    }
}
