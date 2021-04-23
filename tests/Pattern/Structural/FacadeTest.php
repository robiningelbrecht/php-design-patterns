<?php


namespace App\Tests\Pattern\Structural;

use App\Pattern\Structural\Facade\AirFlowController;
use App\Pattern\Structural\Facade\CarEngineFacade;
use App\Pattern\Structural\Facade\CatalyticConverter;
use App\Pattern\Structural\Facade\CoolingController;
use App\Pattern\Structural\Facade\FuelInjector;
use App\Pattern\Structural\Facade\Starter;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest.
 *
 * @package App\Tests\Pattern\Structural
 */
class FacadeTest extends TestCase {

  /**
   * Test facade pattern
   */
  public function testPattern(): void {
    $fuel_injector = $this->createMock(FuelInjector::class);
    $air_flow_controller = $this->createMock(AirFlowController::class);
    $starter = $this->createMock(Starter::class);
    $catalytic_converter = $this->createMock(CatalyticConverter::class);
    $cooling_controller = $this->createMock(CoolingController::class);

    $cooling_controller->method('getUpperLimitTemperature')
      ->will($this->returnValue(CarEngineFacade::DEFAULT_COOLING_TEMP));


    $facade = new CarEngineFacade($fuel_injector, $air_flow_controller, $starter, $cooling_controller, $catalytic_converter);
    $facade->startEngine();

    $this->assertSame(CarEngineFacade::DEFAULT_COOLING_TEMP, $cooling_controller->getUpperLimitTemperature());
  }
}