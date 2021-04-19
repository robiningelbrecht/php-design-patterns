<?php


namespace App\Pattern\Creational\StaticCreationMethod;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\VehicleInterface;
use Money\Money;

/**
 * Class CarWithFactoryMethod.
 *
 * @package App\Pattern\Creational\StaticCreationMethod
 */
class CarWithFactoryMethod extends Car {

  /**
   * @param \Money\Money $price
   * @return \App\Vehicle\VehicleInterface
   */
  public static function audi(Money $price): VehicleInterface {
    return new static(Brand::AUDI(), $price);
  }

  /**
   * @param \Money\Money $price
   * @return \App\Vehicle\VehicleInterface
   */
  public static function bmw(Money $price): VehicleInterface {
    return new static(Brand::BMW(), $price);
  }

  /**
   * @param \Money\Money $price
   * @return \App\Vehicle\VehicleInterface
   */
  public static function volkswagen(Money $price): VehicleInterface {
    return new static(Brand::VOLKSWAGEN(), $price);
  }

}