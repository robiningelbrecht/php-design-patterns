<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Interface CarryBehaviourInterface.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
interface CarryBehaviourInterface {

  /**
   * Carry things.
   */
  public function carry(): void;

}