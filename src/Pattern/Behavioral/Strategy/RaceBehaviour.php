<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Class RaceBehaviour.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
class RaceBehaviour implements RaceBehaviourInterface {

  /**
   * {@inheritdoc}
   */
  public function race(): void {
    echo 'Pull up very fast and race';
  }


}