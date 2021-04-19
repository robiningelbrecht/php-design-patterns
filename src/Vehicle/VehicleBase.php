<?php


namespace App\Vehicle;

use App\Vehicle\Enum\Brand;
use App\Vehicle\Enum\Part;
use Money\Money;

/**
 * Class VehicleBase.
 *
 * @package App\Vehicle
 */
abstract class VehicleBase implements VehicleInterface {

  /**
   * @var \App\Vehicle\Enum\Brand
   */
  protected Brand $brand;

  /**
   * @var \Money\Money
   */
  protected Money $price;

  /**
   * @var \App\Vehicle\Enum\Part[]
   */
  protected array $parts;

  /**
   * VehicleBase constructor.
   *
   * @param \App\Vehicle\Enum\Brand $brand
   * @param \Money\Money $price
   */
  public function __construct(Brand $brand, Money $price) {
    $this->brand = $brand;
    $this->price = $price;
  }

  /**
   * {@inheritdoc}
   */
  public function getBrand(): Brand {
    return $this->brand;
  }

  /**
   * {@inheritdoc}
   */
  public function getTotalPrice(): Money {
    return $this->getTotalPrice();
  }

  /**
   * {@inheritdoc}
   */
  public function stopEngine(): array {
    return ['take key out of ignition', 'engine is off'];
  }

  /**
   * {@inheritdoc}
   */
  public function addPart(Part $part): VehicleInterface {
    $this->parts[] = $part;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function hasPart(Part $p): bool {
    foreach ($this->parts as $part) {
      if ($part->equals($p)) {
        return TRUE;
      }
    }

    return FALSE;
  }
}