<?php


namespace App\Vehicle;

use App\Vehicle\Enum\Brand;
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
   * @var \App\Vehicle\VehicleDefaultPart[]
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
  public function addDefaultPart(VehicleDefaultPart $part): VehicleInterface {
    $this->parts[] = $part;
    return $this;
  }
}