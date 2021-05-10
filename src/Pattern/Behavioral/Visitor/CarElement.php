<?php


namespace App\Pattern\Behavioral\Visitor;

/**
 * Interface CarElement.
 *
 * @package App\Pattern\Behavioral\Visitor
 */
interface CarElement {

  /**
   * @param \App\Pattern\Behavioral\Visitor\CarElementVisitor $visitor
   * @return string
   */
  public function accept(CarElementVisitor $visitor): string;

}