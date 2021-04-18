<?php


namespace App\Vehicle;

use Money\Money;

/**
 * Class Truck.
 *
 * @package App\Vehicle
 */
class Truck implements VehicleInterface {

  /**
   * {@inheritdoc}
   */
  public function getTotalPrice(): Money {
    return Money::EUR(100000);
  }

}