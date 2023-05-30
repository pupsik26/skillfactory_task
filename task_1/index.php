<?php


interface Unique
{
    public function unique();
}

abstract class Automatic implements Unique
{

    private $_name;
    private $_color;

    protected $wipers = false;

    public function __construct(string $name = '', string $color = '')
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    public function makeSound()
    {
        echo $this->sound . "<br>";
    }

    public function turnOnWipers()
    {
        $this->wipers = true;
        echo 'Дворники включены' . "<br>";
    }

    public function turnOffWipers()
    {
        $this->wipers = false;
        echo 'Дворники выключены' . "<br>";
    }

    public function getInfo()
    {
        echo "
            name: {$this->_name}<br>
            color: {$this->_color}<br>
        ";
    }

}


class Car extends Automatic
{
    protected $sound = 'Beep';

    public function unique()
    {
        echo 'Вкл. азот' . "<br>";
    }
}

class Tank extends Automatic
{
    protected $sound = 'Bah';

    public function unique()
    {
        echo 'Выстрел' . "<br>";
    }
}

function automatic(Automatic $automatic)
{
    $automatic->makeSound();
    $automatic->turnOnWipers();
    $automatic->turnOffWipers();
    $automatic->unique();
    $automatic->getInfo();
    echo "<hr>";
}

$car = new Car('car_1', 'red');
$tank = new Tank();
automatic($car);
automatic($tank);
