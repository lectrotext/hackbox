<?php
namespace Hackbox;

/**
 * Interface: IShape
 * 
 * Any class extending Shape should also implement this interface so that the 
 * member variables of Shape are indeed set by the extending class. 
 */
interface IShape 
{
    public function setName();
    public function setPerimeter();
    public function setArea();
}
