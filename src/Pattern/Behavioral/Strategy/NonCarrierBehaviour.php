<?php


namespace App\Pattern\Behavioral\Strategy;

/**
 * Class NonCarrierBehaviour.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
class NonCarrierBehaviour implements CarryBehaviourInterface {

  /**
   * {@inheritdoc}
   */
  public function carry(): void {
    echo 'I do not carry a thing...';
  }

}