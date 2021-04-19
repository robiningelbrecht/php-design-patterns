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
  public function startEngine(): array {
    return [
      'put key into ignition',
      'turn key',
      'truck (' . $this->getBrand()->label . ') engine started'
    ];
  }
}