<?php
namespace Hackbox\Shapes;

use Hackbox\Shape;
use Hackbox\IShape;

/**
 * Class: Triangle 
 * 
 * A basic shape that needs a TriangleSides Object in order to determine name  
 * and compute area & perimeter values.
 */
class Triangle extends Shape implements IShape
{
    /**
     * Shape Name  
     */
    const SHAPE_NAME = "Triangle";

    /**
     * Triangle Types  
     */    
    const TYPE_EQUILATERAL = "Equilateral"; 
    const TYPE_ISOSCELES = "Isosceles";
    const TYPE_SCALENE = "Scalene";    
    
    /**
     * @var TriangleSides $sides 
     */
    private $sides;
    
    /**
     * Whether the triangle is equilateral, isosceles, or scalene
     * @var string  
     */
    private $type;
    
    /**
     * @param TriangleSides $sides 
     */
    public function __construct(TriangleSides $sides)
    {
        $this->sides = $sides;
        // Set the Shape class member variables.
        $this->setName();
        $this->setPerimeter();
        $this->setArea();
    }
    
    /**
     * Sets the name of the shape and the type (equilateral, isosceles, or 
     * scalene)
     */
    public function setName()
    {
        if ($this->sides->isEquilateral()) {
            $this->type = self::TYPE_EQUILATERAL;
        } elseif ($this->sides->isScalene()) {
            $this->type = self::TYPE_SCALENE;
        } else {
            $this->type = self::TYPE_ISOSCELES;
        }
        
        $this->name = $this->type . " " . self::SHAPE_NAME;
    }
    
    /**
     * Sets is the perimeter of the triangle. 
     */
    public function setPerimeter()
    {
        $this->perimeter = $this->sides->getPerimeter();
    }
    
    /**
     * Sets the area of the triangle. 
     */
    public function setArea()
    {
        $this->area = $this->sides->getArea();
    }
}


