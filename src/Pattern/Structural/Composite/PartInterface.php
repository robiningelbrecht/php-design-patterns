<?php


namespace App\Pattern\Structural\Composite;

/**
 * Interface PartInterface.
 *
 * @package App\Pattern\Structural\Composite
 */
interface PartInterface {

  /**
   * @return string
   */
  public function assemble(): string;

}