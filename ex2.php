<?php
//nu e finalizat
public class Vehicle
{
    public string $type;
   
    public int $engineCapacity;
    public function getEngine(string $engineCapacity):string
    {
    return this->$engineCapacity;
    } 
}

public class Hatchback extends Vehicle
{
    
    public string $brand;
}

public class Suv extends Vehicle
{
    public string $seatsNumber;
}


?>
