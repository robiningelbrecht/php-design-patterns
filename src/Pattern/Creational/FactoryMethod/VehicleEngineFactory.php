<?php


namespace App\Pattern\Creational\FactoryMethod;

use App\Vehicle\VehicleInterface;
use Money\Money;

/**
 * Class VehicleEngineFactory.
 *
 * @package App\Pattern\Creational\FactoryMethod
 */
abstract class VehicleEngineFactory {

  /**
   * @var \Money\Money
   */
  protected Money $price;

  /**
   * @var string
   */
  protected string $type;

  /**
   * VehicleEngineFactory constructor.
   * @param string $type
   * @param \Money\Money $price
   */
  public function __construct(string $type, Money $price) {
    $this->type = $type;
    $this->price = $price;
  }

  /**
   * @return \App\Vehicle\VehicleInterface
   */
  protected abstract function getVehicle(): VehicleInterface;

  /**
   * Starts the engine of the vehicle.
   */
  public function start(): array {
    $vehicle = $this->getVehicle();

    // Dome some things before starting engine
    // ...
    // Start engine.
    return $vehicle->startEngine();
  }

  /**
   * Stops the engine of the vehicle.
   */
  public function stop(): array {
    $vehicle = $this->getVehicle();

    // Dome some things before stopping engine
    // ...
    // Stop engine.
    return $vehicle->stopEngine();
  }
}