<?php
class EggMonitoring
{
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

abstract class Egg
{
    protected $model;

    public function getModel()
    {
        return $this->model;
    }
}

class OmegaEggs extends Egg
{
    protected $model = 'OmegaEggs';
}

class FreeRangeEggs extends Egg
{
    protected $model = 'FreeRangeEggs';
}

class EggFactory
{
    public static function create($type)
    {
        if ($type === 'OmegaEggs') {
            return new OmegaEggs();
        } else if ($type === 'FreeRangeEggs') {
            return new FreeRangeEggs();
        } else {
            throw new \Exception("Invalid Eggs Type");
        }
    }
}
$db = EggMonitoring::getInstance();

$sedan = EggFactory::create('OmegaEggs');
echo $sedan->getModel();

$suv = EggFactory::create('FreeRangeEggs');
echo $suv->getModel();
