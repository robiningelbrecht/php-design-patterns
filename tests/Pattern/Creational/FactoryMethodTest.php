<?php


namespace App\Tests\Pattern\Creational;

use App\Pattern\Creational\FactoryMethod\BmwVehicleEngineFactory;
use App\Pattern\Creational\FactoryMethod\VolkswagenVehicleEngineFactory;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest.
 *
 * @package App\Tests\Pattern\Creational
 */
class FactoryMethodTest extends TestCase {

  /**
   * Test factory method pattern
   */
  public function testPattern(): void {
    $engine_factory = new BmwVehicleEngineFactory('car', Money::EUR(200));
    $engine_start = $engine_factory->start();
    $engine_stop = $engine_factory->stop();

    $this->assertContains('car (BMW) engine started', $engine_start);
    $this->assertContains('engine is off', $engine_stop);

    $engine_factory = new BmwVehicleEngineFactory('truck', Money::EUR(500));
    $engine_start = $engine_factory->start();
    $engine_stop = $engine_factory->stop();

    $this->assertContains('truck (BMW) engine started', $engine_start);
    $this->assertContains('engine is off', $engine_stop);

    $engine_factory = new VolkswagenVehicleEngineFactory('truck', Money::EUR(700));
    $engine_start = $engine_factory->start();
    $engine_stop = $engine_factory->stop();

    $this->assertContains('truck (VOLKSWAGEN) engine started', $engine_start);
    $this->assertContains('engine is off', $engine_stop);
  }
}