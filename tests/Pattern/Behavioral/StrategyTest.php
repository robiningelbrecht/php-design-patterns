<?php


namespace App\Tests\Pattern\Behavioral;

use App\Pattern\Behavioral\Strategy\CarryPeopleBehaviour;
use App\Pattern\Behavioral\Strategy\CarWithBehaviour;
use App\Pattern\Behavioral\Strategy\NonCarrierBehaviour;
use App\Pattern\Behavioral\Strategy\RaceBehaviour;
use App\Pattern\Behavioral\Strategy\RaceNoWayBehaviour;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyTest.
 *
 * @package App\Tests\Pattern\Behavioral
 */
class StrategyTest extends TestCase {

  /**
   * Test strategy pattern
   */
  public function testPattern(): void {
    $taxi = new CarWithBehaviour(Brand::BMW(), Money::EUR(200), new RaceNoWayBehaviour(), new CarryPeopleBehaviour());

    $taxi->race();
    $taxi->carry();

    // Change taxi to have racing ability.
    $taxi->setRaceBehaviour(new RaceBehaviour());
    $taxi->race();

    $taxi_output = [
      'I cannot race, too dangerous',
      'I can carry people',
      'Pull up very fast and race',
    ];

    $race_car = new CarWithBehaviour(Brand::BMW(), Money::EUR(200), new RaceBehaviour(), new NonCarrierBehaviour());

    $race_car->race();
    $race_car->carry();

    // Change race car to have ability to carry people.
    $race_car->setCarryBehaviour(new CarryPeopleBehaviour());
    $race_car->carry();

    // Convert race car to normal car.
    $race_car->setRaceBehaviour(new RaceNoWayBehaviour());
    $race_car->race();


    $race_output = [
      'Pull up very fast and race',
      'I do not carry a thing...',
      'I can carry people',
      'I cannot race, too dangerous',
    ];

    $this->expectOutputString(implode('', array_merge($taxi_output, $race_output)));
  }

}