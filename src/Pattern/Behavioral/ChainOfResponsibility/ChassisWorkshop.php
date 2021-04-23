<?php


namespace App\Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class ChassisWorkshop.
 *
 * @package App\Pattern\Behavioral\ChainOfResponsibility
 */
class ChassisWorkshop extends AssembleWorkshop {

  /**
   * {@inheritdoc}
   */
  protected function doAssembly(Car $vehicle): void {
    // Assemble the chassis.
    $vehicle->incrementWorkshopsCompleted();
  }


}