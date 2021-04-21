<?php


namespace App\Pattern\Structural\Bridge;

/**
 * Class ElectricalEngine.
 *
 * @package App\Pattern\Structural\Bridge
 */
class ElectricalEngine extends Engine {

  /**
   * {@inheritdoc}
   */
  public function manufacture(): array {
    $actions = [
      'manufacturing electrical engine',
    ];

    foreach ($this->workshops as $workshop) {
      foreach ($workshop->work() as $work) {
        $actions[] = $work;
      }
    }

    return $actions;
  }


}