<?php


namespace App\Pattern\Structural\Bridge;

/**
 * Class ProduceWorkshop.
 *
 * @package App\Pattern\Structural\Bridge
 */
class ProduceWorkshop implements WorkshopInterface {

  /**
   * {@inheritdoc}
   */
  public function work(): array {
    return ['producing step 1', 'producing step 2'];
  }

}