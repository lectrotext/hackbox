<?php
namespace Hackbox;

/**
 * Interface: ShapeContract
 * 
 * Any class extending Shape should also implement this interface so that the 
 * member variables of Shape are indeed set by the extending class. 
 */
interface ShapeContract 
{
    public function setName();
    public function setPerimeter();
    public function setArea();
}
