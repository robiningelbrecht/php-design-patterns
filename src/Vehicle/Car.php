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
  public function startEngine(): void {
    echo 'put key into ignition';
    echo 'turn key';
    echo 'Car engine started';
  }

}