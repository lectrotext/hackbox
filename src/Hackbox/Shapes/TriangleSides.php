<?php
namespace Hackbox\Shapes;

/**
 * Class: TriangleSides
 *
 * TriangleSides enforces the basic geometerical fact that a triangle must
 * have 3 sides and that any 2 sides added together are greater than the 
 * remaining side.
 * 
 * TrianglesSides can also perform basic geometerical computations where all
 * three values of the triangle's sides are known.
 */
class TriangleSides
{
    /**
     * Side A
     * @var float $a 
     */
    private $a;
    
    /**
     * Side B
     * @var float $b 
     */
    private $b;    

    /**
     * Side C
     * @var float $c 
     */
    private $c;
    
    /**
     * @param float $a
     * @param float $b
     * @param float $c 
     */
    public function __construct($a, $b, $c)
    {
        $this->a = (float) $a;
        $this->b = (float) $b;
        $this->c = (float) $c;
        
        $this->isTriangle();
    } 
    
    /**
     * Checks to see if the sum of any 2 sides is greater than the remaining side.
     * @return boolean
     * @throws \Exception 
     */
    private function isTriangle()
    {
        if (($this->a + $this->b > $this->c) &&
            ($this->a + $this->c > $this->b) && 
            ($this->b + $this->c > $this->a)) {
            return true;
        } else {
            throw new \Exception("Sides supplied do not create a triangle!");
        }
    }
    
    /**
     * Determines whether the triangle is equilateral.
     * @return bool 
     */
    public function isEquilateral()
    {
        //If all three sides are the same length the triangle is equilateral.
        return ($this->a == $this->b && $this->b == $this->c);
    }
    
    /**
     * Determines whether the triangle is scalene.
     * @return bool 
     */
    public function isScalene()
    {
        //If no sides have the same length the triangle is scalene.
        return ($this->a != $this->b && 
                $this->b != $this->c &&
                $this->a != $this->c);
    }

    /**
     * Determines whether the triangle is isosceles.
     * @return bool 
     */
    public function isIsosceles()
    {
        //If triangle is not scalene and is not equilateral it's isosceles.
        return (!$this->isEquilateral() && !$this->isScalene());
    }    
    
    /**
     * Computes the perimeter of the triangle.
     * @return float
     */
    public function getPerimeter()
    {
        return ($this->a + $this->b + $this->c);
    }
    
    /**
     * Compute the area of a triangle using Heron's Formula.
     * @return float
     */
    public function getArea()
    {
        // semiperimeter
        $s = ($this->a + $this->b + $this->c) / 2;
        
        return  sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }
}
