<?php


namespace App\Pattern\Creational\FactoryMethod;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Truck;
use App\Vehicle\VehicleInterface;
use Money\Money;

/**
 * Class BmwVehicleEngineFactory.
 *
 * @package App\Pattern\Creational\FactoryMethod
 */
class BmwVehicleEngineFactory extends VehicleEngineFactory {

  /**
   * {@inheritdoc}
   */
  protected function getVehicle(): VehicleInterface {
    if ($this->type === 'car') {
      return new Car(Brand::BMW(), $this->price);
    }
    if ($this->type === 'truck') {
      return new Truck(Brand::BMW(), $this->price);
    }

    throw new \InvalidArgumentException($this->type . ' is not a valid car type');
  }

}