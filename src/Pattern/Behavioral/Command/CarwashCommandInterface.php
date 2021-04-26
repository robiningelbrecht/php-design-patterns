<?php


namespace App\Pattern\Behavioral\Command;

/**
 * Interface CarwashCommandInterface.
 *
 * @package App\Pattern\Behavioral\Command
 */
interface CarwashCommandInterface {

  /**
   * @return bool
   */
  public function execute(): bool;

}