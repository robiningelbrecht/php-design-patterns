<?php


namespace App\Pattern\Behavioral\Iterator;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use Money\Money;

/**
 * Class CarWithId.
 *
 * @package App\Pattern\Behavioral\Iterator
 */
class CarWithId extends Car {

  /**
   * @var string
   */
  protected string $id;

  /**
   * CarWithId constructor.
   * @param string $id
   * @param \App\Vehicle\Enum\Brand $brand
   * @param \Money\Money $price
   */
  public function __construct(string $id, Brand $brand, Money $price) {
    $this->id = $id;
    parent::__construct($brand, $price);
  }

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

}