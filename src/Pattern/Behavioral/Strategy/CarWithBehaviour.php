<?php


namespace App\Pattern\Behavioral\Strategy;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use Money\Money;

/**
 * Class CarWithBehaviour.
 *
 * @package App\Pattern\Behavioral\Strategy
 */
class CarWithBehaviour extends Car {

  /**
   * @var \App\Pattern\Behavioral\Strategy\RaceBehaviourInterface
   */
  protected RaceBehaviourInterface $raceBehaviour;

  /**
   * @var \App\Pattern\Behavioral\Strategy\CarryBehaviourInterface
   */
  protected CarryBehaviourInterface $carryBehaviour;

  /**
   * CarWithBehaviour constructor.
   * @param \App\Vehicle\Enum\Brand $brand
   * @param \Money\Money $price
   * @param \App\Pattern\Behavioral\Strategy\RaceBehaviourInterface $race_behaviour
   * @param \App\Pattern\Behavioral\Strategy\CarryBehaviourInterface $carry_behaviour
   */
  public function __construct(Brand $brand, Money $price, RaceBehaviourInterface $race_behaviour, CarryBehaviourInterface $carry_behaviour) {
    parent::__construct($brand, $price);
    $this->raceBehaviour = $race_behaviour;
    $this->carryBehaviour = $carry_behaviour;
  }

  /**
   * @param \App\Pattern\Behavioral\Strategy\RaceBehaviourInterface $behaviour
   */
  public function setRaceBehaviour(RaceBehaviourInterface $behaviour): void {
    $this->raceBehaviour = $behaviour;
  }

  /**
   * @param \App\Pattern\Behavioral\Strategy\CarryBehaviourInterface $behaviour
   */
  public function setCarryBehaviour(CarryBehaviourInterface $behaviour): void {
    $this->carryBehaviour = $behaviour;
  }

  /**
   * Race!
   */
  public function race() {
    $this->raceBehaviour->race();
  }

  /**
   * Carry!
   */
  public function carry() {
    $this->carryBehaviour->carry();
  }

}