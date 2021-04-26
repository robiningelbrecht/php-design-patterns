<?php


namespace App\Pattern\Behavioral\Command;

use App\Vehicle\VehicleInterface;

/**
 * Class SimpleWashCommand.
 *
 * @package App\Pattern\Behavioral\Command
 */
class SimpleWashCommand implements CarwashCommandInterface {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $car;

  /**
   * SimpleWashCommand constructor.
   * @param \App\Vehicle\VehicleInterface $car
   */
  public function __construct(VehicleInterface $car) {
    $this->car = $car;
  }

  /**
   * {@inheritdoc}
   */
  public function execute(): bool {
    // Wash the car.

    return TRUE;
  }


}