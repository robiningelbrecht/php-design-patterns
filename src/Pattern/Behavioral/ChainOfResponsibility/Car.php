<?php


namespace App\Pattern\Behavioral\ChainOfResponsibility;

use App\Vehicle\Enum\Brand;
use Money\Money;

/**
 * Class Car.
 *
 * @package App\Pattern\Behavioral\ChainOfResponsibility
 */
class Car extends \App\Vehicle\Car {

  /**
   * @var int
   */
  protected int $assemblyWorkshopsCompleted;

  /**
   * Car constructor.
   * @param \App\Vehicle\Enum\Brand $brand
   * @param \Money\Money $price
   */
  public function __construct(Brand $brand, Money $price) {
    parent::__construct($brand, $price);
    $this->assemblyWorkshopsCompleted = 0;
  }

  /**
   * @return int
   */
  public function getWorkshopsCompleted(): int {
    return $this->assemblyWorkshopsCompleted;
  }

  public function incrementWorkshopsCompleted(): void {
    $this->assemblyWorkshopsCompleted++;
  }

}