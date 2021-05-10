<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Class CarryCargoBehaviour.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
class CarryCargoBehaviour implements CarryBehaviourInterface {

  /**
   * {@inheritdoc}
   */
  public function carry(): void {
    echo 'I can carry cargo';
  }


}