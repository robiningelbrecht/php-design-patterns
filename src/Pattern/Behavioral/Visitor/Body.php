<?php


namespace App\Pattern\Behavioral\Visitor;

/**
 * Class Body.
 *
 * @package App\Pattern\Behavioral\Visitor
 */
class Body implements CarElement {

  /**
   * @var string
   */
  protected string $name;

  /**
   * Body constructor.
   * @param $name
   */
  public function __construct($name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * {@inheritdoc}
   */
  public function accept(CarElementVisitor $visitor): string {
    return $visitor->visitBody($this);
  }


}