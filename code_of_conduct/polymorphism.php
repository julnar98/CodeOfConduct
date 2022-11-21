<?php

//Conditional using Switch Case

class SpeedMeasure
{
    public function getSpeed()
    {
        switch ($this->type) {
            case Car:
                return $this->getBaseSpeed();
            case Train:
                return $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfFactors;
            case Plane:
                return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
        }
        throw new Exception("Measured");
    }
}

//OOP Polymorphism (rep[lacing switch cases])

abstract class SpeedMeasure
{

    abstract public function getSpeed();

}

class Car extends SpeedMeasure
{
    public function getSpeed()
    {
        return $this->getBaseSpeed();
    }
}
class Train extends SpeedMeasure
{
    public function getSpeed()
    {
        return $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfFactors;
    }
}
class Plane extends SpeedMeasure
{
    public function getSpeed()
    {
        return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
    }
}

$speed = $speed_measured->getSpeed();
