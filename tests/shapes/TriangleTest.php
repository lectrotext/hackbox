<?php
use \Mockery as m;
use Hackbox\Shapes\Triangle;

class TriangleTest extends PHPUnit_Framework_TestCase
{
    public function testTriangle()
    {
        $sides = m::mock(new TriangleSides());
        $sides->shouldReceive('isEquilateral',  
                              'isScalene',
                              'getPerimeter',
                              'getArea')
              ->andReturn(true, false, 12.45, 18.02);
        
        $triangle = new Triangle($sides);
        
        $this->assertEquals("Equilateral Triangle", $triangle->getName());
        $this->assertEquals(12.45, $triangle->getPerimeter());
        $this->assertEquals(18.02, $triangle->getArea());
    }
}
