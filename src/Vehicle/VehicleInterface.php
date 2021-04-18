<?php


namespace App\Vehicle;

use Money\Money;

/**
 * Interface VehicleInterface.
 *
 * @package App\Vehicle
 */
interface VehicleInterface {

  /**
   * @return \Money\Money
   */
  public function getTotalPrice(): Money;

}