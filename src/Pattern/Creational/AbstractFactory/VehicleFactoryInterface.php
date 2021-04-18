<?php


namespace App\Pattern\Creational\AbstractFactory;

use App\Vehicle\Car;
use App\Vehicle\Truck;
use Money\Money;

/**
 * Interface VehicleFactoryInterface.
 *
 * @package App\Pattern\Creational\AbstractFactory
 */
interface VehicleFactoryInterface {

  /**
   * @param \Money\Money $price
   * @return \App\Vehicle\Car
   */
  public function createCar(Money $price): Car;

  /**
   * @param \Money\Money $price
   * @return \App\Vehicle\Truck
   */
  public function createTruck(Money $price): Truck;

}