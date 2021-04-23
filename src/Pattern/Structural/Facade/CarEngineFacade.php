<?php


namespace App\Pattern\Structural\Facade;

/**
 * Class CarEngineFacade.
 *
 * @package App\Pattern\Structural\Facade
 */
class CarEngineFacade {

  const DEFAULT_COOLING_TEMP = 90;
  const MAX_ALLOWED_TEMP = 50;

  /**
   * @var \App\Pattern\Structural\Facade\FuelInjector
   */
  protected FuelInjector $fuelInjector;

  /**
   * @var \App\Pattern\Structural\Facade\AirFlowController
   */
  protected AirFlowController $airFlowController;

  /**
   * @var \App\Pattern\Structural\Facade\Starter
   */
  protected Starter $starter;

  /**
   * @var \App\Pattern\Structural\Facade\CoolingController
   */
  protected CoolingController $coolingController;

  /**
   * @var \App\Pattern\Structural\Facade\CatalyticConverter
   */
  protected CatalyticConverter $catalyticConverter;

  /**
   * CarEngineFacade constructor.
   * @param \App\Pattern\Structural\Facade\FuelInjector $fuel_injector
   * @param \App\Pattern\Structural\Facade\AirFlowController $air_flow_controller
   * @param \App\Pattern\Structural\Facade\Starter $starter
   * @param \App\Pattern\Structural\Facade\CoolingController $cooling_controller
   * @param \App\Pattern\Structural\Facade\CatalyticConverter $catalytic_converter
   */
  public function __construct(FuelInjector $fuel_injector, AirFlowController $air_flow_controller, Starter $starter, CoolingController $cooling_controller, CatalyticConverter $catalytic_converter) {
    $this->fuelInjector = $fuel_injector;
    $this->airFlowController = $air_flow_controller;
    $this->starter = $starter;
    $this->coolingController = $cooling_controller;
    $this->catalyticConverter = $catalytic_converter;
  }

  /**
   * Starts engine.
   */
  public function startEngine() {
    $this->fuelInjector->on();
    $this->airFlowController->takeAir();
    $this->fuelInjector->on();
    $this->fuelInjector->inject();
    $this->starter->start();
    $this->coolingController->setTemperatureUpperLimit(self::DEFAULT_COOLING_TEMP);
    $this->coolingController->run();
    $this->catalyticConverter->on();
  }

  /**
   * Stops engine.
   */
  public function stopEngine() {
    $this->fuelInjector->off();
    $this->catalyticConverter->off();
    $this->coolingController->cool(self::MAX_ALLOWED_TEMP);
    $this->coolingController->stop();
    $this->airFlowController->off();
  }

}