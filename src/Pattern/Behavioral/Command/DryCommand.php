<?php


namespace App\Pattern\Behavioral\Command;

use App\Vehicle\VehicleInterface;

/**
 * Class DryCommand.
 *
 * @package App\Pattern\Behavioral\Command
 */
class DryCommand implements CarwashUndoableCommand {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $car;

  /**
   * @var bool
   */
  protected bool $isUndone;

  /**
   * DryCommand constructor.
   * @param \App\Vehicle\VehicleInterface $car
   */
  public function __construct(VehicleInterface $car) {
    $this->car = $car;
    $this->isUndone = FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function execute(): bool {
    if ($this->isUndone) {
      return FALSE;
    }
    // Dry the car.

    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function undo(): bool {
    $this->isUndone = TRUE;

    // Make wet again?

    return TRUE;
  }

}