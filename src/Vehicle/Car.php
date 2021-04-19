<?php


namespace App\Vehicle;


/**
 * Class Car.
 *
 * @package App\Vehicle
 */
class Car extends VehicleBase {

  /**
   * {@inheritdoc}
   */
  public function startEngine(): array {
    return [
      'put key into ignition',
      'turn key',
      'car (' . $this->getBrand()->label . ') engine started'
    ];
  }

}