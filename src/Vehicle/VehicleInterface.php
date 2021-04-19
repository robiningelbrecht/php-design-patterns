<?php


namespace App\Vehicle;

use App\Vehicle\Enum\Brand;
use App\Vehicle\Enum\Part;
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
   * @param \App\Vehicle\Enum\Part $part
   * @return \App\Vehicle\VehicleInterface
   */
  public function addPart(Part $part): VehicleInterface;

  /**
   * @param \App\Vehicle\Enum\Part $p
   * @return bool
   */
  public function hasPart(Part $p): bool;

}