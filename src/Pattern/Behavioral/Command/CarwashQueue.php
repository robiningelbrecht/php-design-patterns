<?php


namespace App\Pattern\Behavioral\Command;

/**
 * Class CarwashQueue.
 *
 * @package App\Pattern\Behavioral\Command
 */
class CarwashQueue {

  /**
   * @var array
   */
  protected array $queue;

  /**
   * CarwashQueue constructor.
   */
  public function __construct() {
    $this->queue = [];
  }

  /**
   * @param \App\Pattern\Behavioral\Command\CarwashCommandInterface $task
   */
  public function addTask(CarwashCommandInterface $task): void {
    $this->queue[] = [$task, 'execute'];
  }

  /**
   * @param \App\Pattern\Behavioral\Command\CarwashUndoableCommand $task
   */
  public function addUndo(CarwashUndoableCommand $task): void {
    $this->queue[] = [$task, 'undo'];
  }

  /**
   * @return int
   */
  public function execute(): int {
    $tasks_executed = 0;
    foreach ($this->queue as $item) {
      list($task, $action) = $item;

      if ($action === 'execute' && $task->execute()) {
        $tasks_executed++;
        continue;
      }

      if ($action === 'undo' && $task->undo()) {
        $tasks_executed--;
      }
    }

    return $tasks_executed;
  }
}