<?php


namespace App\Pattern\Structural\Bridge;

/**
 * Class DieselEngine.
 *
 * @package App\Pattern\Structural\Bridge
 */
class DieselEngine extends Engine {

  /**
   * {@inheritdoc}
   */
  public function manufacture(): array {
    $actions = [
      'manufacturing diesel engine',
    ];

    foreach ($this->workshops as $workshop) {
      foreach ($workshop->work() as $work) {
        $actions[] = $work;
      }
    }

    return $actions;
  }


}