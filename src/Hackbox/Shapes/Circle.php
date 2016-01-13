<?php
namespace Hackbox\Shapes;

use Hackbox\Shape;

/**
 * Class: Circle 
 * 
 * A basic shape only requiring a scalar value of the radius.
 */
class Circle extends Shape
{
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
        $this->name = 'Circle';
        $this->setPerimeter();
        $this->setArea();
    }

    /**
     * Sets the perimeter aka the circumference of a circle.
     */
    public function setPerimeter()
    {
        $this->perimeter = 2 * pi() * $this->radius;
    }

    /**
     * Sets the area of a circle.
     */
    public function setArea()
    {
        $this->area = pi() * pow($this->radius, 2);
    }
}
