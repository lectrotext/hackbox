<?php
use Hackbox\Shapes\TriangleSides;

class TriangleSidesTest extends PHPUnit_Framework_TestCase
{
    public function testBadTriangle()
    {
        $this->setExpectedException(
          'Exception', "Sides supplied do not create a triangle!");
        
        $triangle = new TriangleSides(2, 2, 5);
    }
    
    public function testEquilateral()
    {
        $triangle = new TriangleSides("7", "7", "7");
        
        $this->assertEquals(true, $triangle->isEquilateral());
        $this->assertEquals(false, $triangle->isIsosceles());
        $this->assertEquals(false, $triangle->isScalene());
    }
    
    public function testIsosceles()
    {
        $triangle = new TriangleSides(7, 5, 5);
        
        $this->assertEquals(false, $triangle->isEquilateral());
        $this->assertEquals(true, $triangle->isIsosceles());
        $this->assertEquals(false, $triangle->isScalene());                
    }

    public function testScalene()
    {
        $triangle = new TriangleSides(7.125, 6.75, 5.3);
        
        $this->assertEquals(false, $triangle->isEquilateral());
        $this->assertEquals(false, $triangle->isIsosceles());
        $this->assertEquals(true, $triangle->isScalene());                
    }    

    public function testGetPerimeter()
    {
        $triangle = new TriangleSides(10.2, 10.3, 10.65);
        
        $this->assertEquals(31.15, $triangle->getPerimeter());
    }
    
    public function testGetArea()
    {
        $triangle = new TriangleSides(3, 4, 5);
        
        $this->assertEquals(6.0, $triangle->getArea());
    }
}
