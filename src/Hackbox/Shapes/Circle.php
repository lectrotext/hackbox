<?php
namespace Hackbox\Shapes;

use Hackbox\Shape;
use Hackbox\ShapeContract;

/**
 * Class: Circle 
 * 
 * A basic shape only requiring a scalar value of the radius.
 */
class Circle extends Shape implements ShapeContract
{
    /**
     * Shape Name  
     */
    const SHAPE_NAME = "Circle";
        
    /**
     * @var float $radius
     */
    private $radius;

    /**
     * @param float $radius 
     */
    public function __construct($radius)
    {
        $this->radius = (float) $radius;
        // Set the Shape class member variables.
        $this->name = $this->setName();
        $this->perimeter = $this->setPerimeter();
        $this->area = $this->setArea();
    }
    
    /**
     * Sets the name of the circle. 
     */
    private function setName()
    {
        $this->name = self::SHAPE_NAME;
    }

    /**
     * Sets the perimeter aka the circumference of a circle.
     */
    private function setPerimeter()
    {
        $this->perimeter = 2 * pi() * $this->radius;
    }

    /**
     * Sets the area of a circle.
     */
    private function setArea()
    {
        $this->area = pi() * ($this->radius * $this->radius);
    }
}
