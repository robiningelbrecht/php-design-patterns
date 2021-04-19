<?php


namespace App\Pattern\Structural\Decorator;

/**
 * Class DigitalKey.
 *
 * @package App\Pattern\Structural\Decorator
 */
class DigitalKey extends VehicleDecorator {

  /**
   * {@inheritdoc}
   */
  public function startEngine(): array {
    return [
      'make sure key is in range of car',
      'push button',
      'car engine started',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function stopEngine(): array {
    return [
      'push button',
      'engine is off',
    ];
  }

}