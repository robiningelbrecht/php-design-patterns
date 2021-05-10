<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Class CarryPeopleBehaviour.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
class CarryPeopleBehaviour implements CarryBehaviourInterface {

  /**
   * {@inheritdoc}
   */
  public function carry(): void {
    echo 'I can carry people';
  }


}