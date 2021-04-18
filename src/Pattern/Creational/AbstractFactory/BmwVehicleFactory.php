<?php


namespace App\Pattern\Creational\AbstractFactory;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Truck;
use Money\Money;

/**
 * Class BmwVehicleFactory.
 *
 * @package App\Pattern\Creational\AbstractFactory
 */
class BmwVehicleFactory implements VehicleFactoryInterface {

  /**
   * {@inheritdoc}
   */
  public function createCar(Money $price): Car {
    return new Car(Brand::BMW(), $price);
  }

  /**
   * {@inheritdoc}
   */
  public function createTruck(Money $price): Truck {
    return new Truck(Brand::BMW(), $price);
  }


}