<?php
#La inmutabilidad es la capacidad que se tiene para no modificarse

class Location {
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX():float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function move(float $x, float $y) : Location
    {
        return $this->calculateNewPosition($x, $y);
    }

    private function calculateNewPosition(float $x, float $y) : Location
    {
        return new Location($this->x + $x, $this->y + $y);
    }
}

$location = new Location(1, 3);

$newLocation = $location->move(10, 22);
echo $location->getX() . " immutability.php" . $location->getY() . "<br>";
echo $newLocation->getX() . " immutability.php" . $newLocation->getY() . "<br>";