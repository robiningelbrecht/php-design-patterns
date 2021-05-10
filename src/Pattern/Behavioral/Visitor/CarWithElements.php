<?php


namespace App\Pattern\Behavioral\Visitor;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use Money\Money;

/**
 * Class CarWithElements.
 *
 * @package App\Pattern\Behavioral\Visitor
 */
class CarWithElements extends Car implements CarElement {

  /**
   * @var \App\Pattern\Behavioral\Visitor\CarElement[]
   */
  protected array $elements;

  /**
   * CarWithElements constructor.
   * @param \App\Vehicle\Enum\Brand $brand
   * @param \Money\Money $price
   * @param array $elements
   */
  public function __construct(Brand $brand, Money $price, array $elements) {
    parent::__construct($brand, $price);
    $this->elements = $elements;
  }

  /**
   * @return \App\Pattern\Behavioral\Visitor\CarElement[]|array
   */
  public function getElements(): array {
    return $this->elements;
  }

  /**
   * {@inheritdoc}
   */
  public function accept(CarElementVisitor $visitor): string {
    return $visitor->visitCar($this);
  }

}