<?php


namespace App\Pattern\Behavioral\Command;

use App\Vehicle\VehicleInterface;

/**
 * Class MotorWashCommand.
 *
 * @package App\Pattern\Behavioral\Command
 */
class MotorWashCommand implements CarwashCommandInterface {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $car;

  /**
   * MotorWashCommand constructor.
   * @param \App\Vehicle\VehicleInterface $car
   */
  public function __construct(VehicleInterface $car) {
    $this->car = $car;
  }

  /**
   * {@inheritdoc}
   */
  public function execute(): bool {
    // Wash the car's motor.

    return TRUE;
  }


}