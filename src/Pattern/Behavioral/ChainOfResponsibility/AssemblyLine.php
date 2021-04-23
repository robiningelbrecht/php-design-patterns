<?php


namespace App\Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class AssemblyLine.
 *
 * @package App\Pattern\Behavioral\ChainOfResponsibility
 */
class AssemblyLine {

  /**
   * @var \App\Pattern\Behavioral\ChainOfResponsibility\AssembleWorkshop
   */
  protected AssembleWorkshop $workshop;

  /**
   * AssemblyLine constructor.
   * @param \App\Pattern\Behavioral\ChainOfResponsibility\AssembleWorkshop $workshop
   */
  public function __construct(AssembleWorkshop $workshop) {
    $this->workshop = $workshop;
  }

  /**
   * @param \App\Pattern\Behavioral\ChainOfResponsibility\Car $vehicle
   */
  public function start(Car $vehicle): void {
    $this->workshop->assemble($vehicle);
  }

}