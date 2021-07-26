<?php

public class Vehicle
{
   public string $type;
   public string $brand;
   public int $engineCapacity;

    public function __construct(string $type,string $brand,int $engineCapacity)
    {
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    } 

public function setType(string $type)
{
    $this->type=$type;
}
public function getType()
{
    return $this->type;
}
public function setBrand(string $brand)
{
    $this->brand=$brand;
}
public function getBrand()
{
    return $this->brand;
}
public function setEngineCapacity(int $engineCapacity)
{
    $this->engineCapacity=$engineCapacity;
}
public function getEngineCapacity()
{
    return $this->engineCapacity;
}

abstract public function start();

}
 

public class Car extends Vehicle
{
    
    public string $seatsNumber;
    
    public function __construct(string $seatsNumber,string $type,string $brand,int $engineCapacity)
    {
    $this->seatsNumber=$seatsNumber;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    } 
    public function setSeatsNumber(string $seatsNumber)
    {
        $this->seatsNumber=$seatsNumber;
    }
    public function getSeatsNumber()
    {
        return $this->seatsNumber;
    }
    abstract public function autopilot();
}


public class Aircraft extends Vehicle
{
    public string $speed;
    public string $maxFlightDistance;
    
    public function __construct(string $type,string $brand,int $engineCapacity,string $speed,string $maxFlightDistance)
    {
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->speed=$speed;
    $this->maxFlightDistance=$maxFlightDistance;
    } 
    public function setSpeed(string $speed)
    {
        $this->speed=$speed;
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function setMAxFlightDistance(string $maxFlightDistance)
    {
        $this->maxFlightDistance=$maxFlightDistance;
    }
    public function getMaxFlihtDistance()
    {
        return $this->maxFlightDistance;
    }
    abstract public function takeoff();

}
public class Ship extends Vehicle
{
    public string $motorisation;
    
    public function __construct(string $motorisation,string $type,string $brand,int $engineCapacity)
    {
    $this->motorisation=$motorization;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    } 
    public function setMotorisation(string $motorisation)
    {
        $this->motorisation=$motorisation;
    }
    public function getMotorisation()
    {
        return $this->motorisation;
    }  
}

public class OilTanker extends Ship
{
    public string $tonnage;
    
    public function __construct(string $tonnage,string $motorisation,string $type,string $brand,int $engineCapacity)
    {
    $this->tonnage=$tonnage;
    $this->motorisation=$motorization;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    } 
    public function setTonnage(string $tonnage)
    {
        $this->tonnage=$tonnage;
    }
    public function getTonnage()
    {
        return $this->tonnage;
    }  
    abstract public function loadOil();   
}

public class cruiseShip extends Ship
{
    public string $passengerNumber;
    
    public function __construct(string $passengerNumber,string $motorisation,string $type,string $brand,int $engineCapacity)
    {
    $this->passengerNumber=$passengerNumber;
    $this->motorisation=$motorization;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    } 
    public function setPassengerNumber(string $passengerNumber)
    {
        $this->passengerNumber=$passengerNumber;
    }
    public function getPassengerNumber()
    {
        return $this->passengerNumber;
    }
    public function anchor()
    {
        echo "ship anchored";
    }
}



public class commercialPlane extends Aircraft
{
    public string $luggageCapacity;

    public function __construct(string $type,string $brand,int $engineCapacity,string $speed,string $maxFlightDistance,string $luggageCapacity)
    {
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->speed=$speed;
    $this->maxFlightDistance=$maxFlightDistance;
    $this->luggageCapacity=$luggageCapacity;
    } 
    public function setLuggageCapacity(string $luggageCapacity)
    {
        $this->luggageCapacity=$luggageCapacity;
    }
    public function getLuggageCapacity()
    {
        return $this->luggageCapacity;
    } 

}

public class FighterJet extends Aircraft
{
    public string $weapons;

    public function __construct(string $type,string $brand,int $engineCapacity,string $speed,string $maxFlightDistance,string $weapons)
    {
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->speed=$speed;
    $this->maxFlightDistance=$maxFlightDistance;
    $this->weapons=$weapons;
    } 
    public function setWeapons(string $weapons)
    {
        $this->weapons=$weapons;
    }
    public function getWeapons()
    {
        return $this->weapons;
    } 
    public function fire()
    {
        echo "fire";
    }
}

public class Helicopter extends Aircraft
{
    public string $altitude;

    public function __construct(string $type,string $brand,int $engineCapacity,string $speed,string $maxFlightDistance,string $altitude)
    {
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->speed=$speed;
    $this->maxFlightDistance=$maxFlightDistance;
    $this->altitude=$altitude;
    } 
    public function setAltitude(string $altitude)
    {
        $this->altitude=$altitude;
    }
    public function getAltitude()
    {
        return $this->altitude;
    }  

    public function returnToLand()
    {
     echo "helicopter returned";
    }
}

final public class Coupe extends Car
{
    public string $color;
    
    public function __construct(string $seatsNumber,string $type,string $brand,int $engineCapacity,string $color)
    {
    $this->seatsNumber=$seatsNumber;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->color=$color;
    } 
    public function setColor(string $color)
    {
        $this->color=$color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function openDoor(){
        return "doors opened";
    }
} 



public class Hatchback extends Car
{
    public string $trunkVolume;
    
    public function __construct(string $seatsNumber,string $type,string $brand,int $engineCapacity,string $trunkVolume)
    {
    $this->seatsNumber=$seatsNumber;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->trunkVolume=$trunkVolume;
    } 
    public function setTrunkVolume(string $trunkVolume)
    {
        $this->trunkVolume=$trunkVolume;
    }
    public function getTrunkVolume()
    {
        return $this->trunkVolume;
    }
    public function stopEngine()
    {
        return "engine stopped";
    }
}

public class Suv extends Car
{
    public string $wheelSize;
    
    public function __construct(string $seatsNumber,string $type,string $brand,int $engineCapacity,string $wheelSize)
    {
    $this->seatsNumber=$seatsNumber;
    $this->type=$type;
    $this->brand=$brand;
    $this->engineCapacity=$engineCapacity;
    $this->wheelSize=$wheelSize;
    } 
    public function setWheelSize(string $wheelSize)
    {
        $this->wheelSize=$wheelSize;
    }
    public function getWheelSize()
    {
        return $this->wheelSize;
    }
public function depart()
{
echo "car departed";
}
}



?>