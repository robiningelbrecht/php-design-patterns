<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Interface RaceBehaviourInterface.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
interface RaceBehaviourInterface {

  /**
   * Start racing.
   */
  public function race(): void;

}