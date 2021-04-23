<?php


namespace App\Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class EngineWorkshop.
 *
 * @package App\Pattern\Behavioral\ChainOfResponsibility
 */
class EngineWorkshop extends AssembleWorkshop {

  /**
   * {@inheritdoc}
   */
  protected function doAssembly(Car $vehicle): void {
    // Assemble the engine.
    $vehicle->incrementWorkshopsCompleted();
  }


}