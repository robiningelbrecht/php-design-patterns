<?php


namespace App\Pattern\Structural\Bridge;

/**
 * Class AssembleWorkshop.
 *
 * @package App\Pattern\Structural\Bridge
 */
class AssembleWorkshop implements WorkshopInterface {

  /**
   * {@inheritdoc}
   */
  public function work(): array {
    return ['assembling step 1', 'assembling step 2'];
  }
}