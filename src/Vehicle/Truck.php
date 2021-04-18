<?php


namespace App\Vehicle;

use Money\Money;

/**
 * Class Truck.
 *
 * @package App\Vehicle
 */
class Truck extends VehicleBase {

  /**
   * {@inheritdoc}
   */
  public function startEngine(): void {
    echo 'Truck engine started';
  }
}