<?php
declare(strict_types=1);

class Dog {
    // Constant definitions.
    const MAX_BREED_LEN = 20;
    const MAX_COLOR_LEN = 20;
    const MAX_NAME_LEN = 20;

    const MIN_WEIGHT = 5;
    const MAX_WEIGHT = 160;
    
    // Properties.
    private $breed = "unspecified";
    private $color = "unspecified";
    private $name = "unspecified";
    private $weight = 0;

    // Constructor
    function __construct(string $breed, string $color, string $name, int $weight) {
        $this->setBreed($breed);
        $this->setColor($color);
        $this->setName($name);
        $this->setWeight($weight);
    }

    // toString method
    function __toString() {
        return $this->getSummary();
    }

    // Get Methods
    function getBreed() : string    { return $this->breed; }
    function getColor() : string    { return $this->color; }
    function getName() : string     { return $this->name; }
    function getWeight() : int      { return $this->weight; }

    function getSummary() : string {
        return "Name: $this->name, Breed: $this->breed, Color: $this->color, Weight: $this->weight pounds.";
    }

    function getVoice() : string {
        // Select bark based on weight.
        if ($this->weight < 10) {
            $bark = "Yip!";
        } else if ($this->weight > 50) {
            $bark = "Woof!";
        } else {
            $bark = "Bark.";
        }

        return $bark;
    }

    // Set Methods
    function setBreed(string $newBreed) {
        if (ctype_print($newBreed) && strlen($newBreed) <= self::MAX_BREED_LEN) {
            $this->breed = $newBreed;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function setColor(string $newColor) {
        if (ctype_print($newColor) && strlen($newColor) <= self::MAX_COLOR_LEN) {
            $this->color = $newColor;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function setName(string $newName) {
        if (ctype_alpha($newName) && strlen($newName) <= self::MAX_NAME_LEN) {
            $this->name = $newName;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function setWeight(int $newWeight) {
        if (ctype_digit($newWeight) && ($newWeight >= self::MIN_WEIGHT) && ($newWeight <= self::MAX_WEIGHT)) {
            $this->weight = $newWeight;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // General-Purpose Methods
    function printSummary() {
        print $this->getSummary();
    }

    function speak(int $count = 1) {
        $voice = $this->getVoice();
        print "<br>";
        for ($i = 0; $i < $count; $i++) {
            print $voice . " ";
        }
    }
}
