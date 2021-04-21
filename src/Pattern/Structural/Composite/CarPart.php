<?php


namespace App\Pattern\Structural\Composite;

/**
 * Class CarPart.
 *
 * @package App\Pattern\Structural\Composite
 */
class CarPart implements PartInterface {

  /**
   * @var string
   */
  protected string $name;

  /**
   * CarPart constructor.
   * @param string $name
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * {@inheritdoc}
   */
  public function assemble(): string {
    return 'assembled ' . $this->name;
  }


}