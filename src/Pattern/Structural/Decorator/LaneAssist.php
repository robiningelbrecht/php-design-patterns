<?php

namespace App\Pattern\Structural\Decorator;

use Money\Money;

/**
 * Class LaneAssist.
 *
 * @package App\Vehicle
 */
class LaneAssist extends VehicleOption {

  /**
   * {@inheritdoc}
   */
  public function getTotalPrice(): Money {
    return $this->vehicle->getTotalPrice()->add(Money::EUR(100000));
  }


}