<?php


namespace App\Vehicle;

use App\Vehicle\Enum\Brand;
use Money\Money;

/**
 * Interface VehicleInterface.
 *
 * @package App\Vehicle
 */
interface VehicleInterface {

  /**
   * @return \App\Vehicle\Enum\Brand
   */
  public function getBrand(): Brand;

  /**
   * @return \Money\Money
   */
  public function getTotalPrice(): Money;

  /**
   * @return void
   */
  public function startEngine(): void;

  /**
   * @return void
   */
  public function stopEngine(): void;

  /**
   * @param \App\Vehicle\VehicleDefaultPart $part
   * @return \App\Vehicle\VehicleInterface
   */
  public function addDefaultPart(VehicleDefaultPart $part): VehicleInterface;

}