<?php
use \Mockery as m;
use Hackbox\Shapes\Triangle;
use Hackbox\Shapes\TriangleSides;

class TriangleTest extends PHPUnit_Framework_TestCase
{
    public function testTriangle()
    {
        $sides = m::mock(new TriangleSides(3,4,5));
        $sides->shouldReceive('isEquilateral', 
                              'isIsosceles', 
                              'isScalene',
                              'getPerimeter',
                              'getArea')
              ->andReturn(false, false, true, 12, 6);
        
        $triangle = new Triangle($sides);
        
        $this->assertEquals("Scalene Triangle", $triangle->getName());
        $this->assertEquals(12, $triangle->getPerimeter());
        $this->assertEquals(6, $triangle->getArea());
    }
}

?>
