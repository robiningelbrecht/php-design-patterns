<?php


namespace App\Pattern\Creational\FactoryMethod;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Truck;
use App\Vehicle\VehicleInterface;
use Money\Money;

/**
 * Class VolkswagenVehicleEngineFactory.
 *
 * @package App\Pattern\Creational\FactoryMethod
 */
class VolkswagenVehicleEngineFactory extends VehicleEngineFactory {

  /**
   * {@inheritdoc}
   */
  protected function getVehicle(): VehicleInterface {
    if ($this->type === 'truck') {
      return new Truck(Brand::VOLKSWAGEN(), $this->price);
    }

    throw new \InvalidArgumentException($this->type . ' is not a valid car type');
  }

}