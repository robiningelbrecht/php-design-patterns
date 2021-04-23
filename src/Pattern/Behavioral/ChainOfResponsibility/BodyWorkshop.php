<?php


namespace App\Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class BodyWorkshop.
 *
 * @package App\Pattern\Behavioral\ChainOfResponsibility
 */
class BodyWorkshop extends AssembleWorkshop {

  /**
   * {@inheritdoc}
   */
  protected function doAssembly(Car $vehicle): void{
    // Assemble the engine.
    $vehicle->incrementWorkshopsCompleted();
  }


}