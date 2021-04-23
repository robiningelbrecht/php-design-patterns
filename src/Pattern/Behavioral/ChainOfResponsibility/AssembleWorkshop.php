<?php


namespace App\Pattern\Behavioral\ChainOfResponsibility;

/**
 * Class AssembleWorkshop.
 *
 * @package App\Pattern\Behavioral\ChainOfResponsibility
 */
abstract class AssembleWorkshop {

  /**
   * @var \App\Pattern\Behavioral\ChainOfResponsibility\AssembleWorkshop|null
   */
  protected ?AssembleWorkshop $next = NULL;

  /**
   * @param \App\Pattern\Behavioral\ChainOfResponsibility\AssembleWorkshop $next
   * @return \App\Pattern\Behavioral\ChainOfResponsibility\AssembleWorkshop
   */
  public function linkWith(AssembleWorkshop $next): AssembleWorkshop {
    $this->next = $next;
    return $next;
  }

  /**
   * @param \App\Pattern\Behavioral\ChainOfResponsibility\Car $vehicle
   */
  final public function assemble(Car $vehicle): void {
    // This approach by using a template method pattern ensures that
    // each subclass will not forget to call the successor
    $this->doAssembly($vehicle);

    if (!$this->next) {
      return;
    }

    $this->next->assemble($vehicle);
  }

  /**
   * @param \App\Pattern\Behavioral\ChainOfResponsibility\Car $vehicle
   */
  protected abstract function doAssembly(Car $vehicle): void;

}