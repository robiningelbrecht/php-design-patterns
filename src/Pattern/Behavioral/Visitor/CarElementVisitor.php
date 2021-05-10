<?php


namespace App\Pattern\Behavioral\Visitor;

/**
 * Interface CarElementVisitor.
 *
 * @package App\Pattern\Behavioral\Visitor
 */
interface CarElementVisitor {

  /**
   * @param \App\Pattern\Behavioral\Visitor\Body $body
   * @return string
   */
  public function visitBody(Body $body): string;

  /**
   * @param \App\Pattern\Behavioral\Visitor\Engine $engine
   * @return string
   */
  public function visitEngine(Engine $engine): string;

  /**
   * @param \App\Pattern\Behavioral\Visitor\Wheel $wheel
   * @return string
   */
  public function visitWheel(Wheel $wheel): string;

  /**
   * @param \App\Pattern\Behavioral\Visitor\CarWithElements $car
   * @return string
   */
  public function visitCar(CarWithElements $car): string;

}