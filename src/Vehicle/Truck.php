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
    echo 'put key into ignition';
    echo 'turn key';
    echo 'Truck engine started';
  }
}