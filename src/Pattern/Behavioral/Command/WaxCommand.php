<?php


namespace App\Pattern\Behavioral\Command;

use App\Vehicle\VehicleInterface;

/**
 * Class WaxCommand.
 *
 * @package App\Pattern\Behavioral\Command
 */
class WaxCommand implements CarwashCommandInterface {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $car;

  /**
   * WaxCommand constructor.
   * @param \App\Vehicle\VehicleInterface $car
   */
  public function __construct(VehicleInterface $car) {
    $this->car = $car;
  }

  /**
   * {@inheritdoc}
   */
  public function execute(): bool {
    // Wax the car.

    return TRUE;
  }


}