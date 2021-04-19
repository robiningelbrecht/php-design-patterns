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
   * @return string[]
   */
  public function startEngine(): array;

  /**
   * @return string[]
   */
  public function stopEngine(): array;

  /**
   * @param \App\Vehicle\VehiclePart $part
   * @return \App\Vehicle\VehicleInterface
   */
  public function addPart(VehiclePart $part): VehicleInterface;

}