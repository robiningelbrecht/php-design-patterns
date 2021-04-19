<?php


namespace App\Pattern\Structural\Decorator;

use Money\Money;

/**
 * Class ParkingSensor.
 *
 * @package App\Vehicle
 */
class ParkingSensor extends VehicleDecorator {

  /**
   * {@inheritdoc}
   */
  public function getTotalPrice(): Money {
    return $this->vehicle->getTotalPrice()->add(Money::EUR(10));
  }


}