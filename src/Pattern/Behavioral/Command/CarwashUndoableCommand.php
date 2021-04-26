<?php


namespace App\Pattern\Behavioral\Command;

/**
 * Interface CarwashUndoableCommand.
 *
 * @package App\Pattern\Behavioral\Command
 */
interface CarwashUndoableCommand extends CarwashCommandInterface {

  /**
   * @return bool
   */
  public function undo(): bool;
}