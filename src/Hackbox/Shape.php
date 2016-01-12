<?php 
namespace Hackbox;

/**
 * Class Shape
 * 
 * Stores and retrieves the name, perimeter and area of a shape. 
 */
class Shape 
{
    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var float $perimeter
     */
    protected $perimeter;

    /**
     * @var float $area
     */
    protected $area;

    /**
     * Gets the name of the shape.
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the perimeter of the shape.
     * @return float $perimeter 
     */
    public function getPerimeter()
    {
        return $this->perimeter;
    }
    
    /**
     * Gets the area of the shape.
     * @return float $area 
     */
    public function getArea()
    {
        return $this->area;
    }

}
