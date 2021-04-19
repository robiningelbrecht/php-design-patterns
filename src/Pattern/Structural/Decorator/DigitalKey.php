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
  public function startEngine(): void {
    echo 'make sure key is in range of car';
    echo 'push button';
    echo 'car engine started';
  }

  /**
   * {@inheritdoc}
   */
  public function stopEngine(): void {
    echo 'push button';
    echo 'engine is off';
  }

}