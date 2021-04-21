<?php


namespace App\Pattern\Structural\Bridge;

/**
 * Class Engine.
 *
 * @package App\Pattern\Structural\Bridge
 */
abstract class Engine {

  /**
   * @var \App\Pattern\Structural\Bridge\WorkshopInterface[]
   */
  protected array $workshops;

  /**
   * Engine constructor.
   * @param \App\Pattern\Structural\Bridge\WorkshopInterface[] $workshops
   */
  public function __construct(array $workshops) {
    $this->workshops = $workshops;
  }

  /**
   * @return array
   */
   public abstract function manufacture() : array;

}