<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Class RaceNoWayBehaviour.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
class RaceNoWayBehaviour implements RaceBehaviourInterface {

  /**
   * {@inheritdoc}
   */
  public function race(): void {
    echo 'I cannot race, too dangerous';
  }

}