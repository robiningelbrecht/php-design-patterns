<?php

namespace App\Tests\Pattern\Structural;

use App\Pattern\Structural\Bridge\AssembleWorkshop;
use App\Pattern\Structural\Bridge\DieselEngine;
use App\Pattern\Structural\Bridge\ElectricalEngine;
use App\Pattern\Structural\Bridge\Engine;
use App\Pattern\Structural\Bridge\ProduceWorkshop;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest.
 *
 * @package App\Tests\Pattern\Structural
 */
class BridgeTest extends TestCase {

  /**
   * Test bridge pattern
   */
  public function testPattern(): void {
    $engine_one = new DieselEngine([
      new ProduceWorkshop(),
      new AssembleWorkshop()
    ]);

    $this->assertEquals([
      'manufacturing diesel engine',
      'producing step 1',
      'producing step 2',
      'assembling step 1',
      'assembling step 2',
    ], $engine_one->manufacture());

    $engine_two = new ElectricalEngine([
      new ProduceWorkshop(),
      new AssembleWorkshop()
    ]);

    $this->assertEquals([
      'manufacturing electrical engine',
      'producing step 1',
      'producing step 2',
      'assembling step 1',
      'assembling step 2',
    ], $engine_two->manufacture());

    $engine_three = new ElectricalEngine([new ProduceWorkshop()]);

    $this->assertEquals([
      'manufacturing electrical engine',
      'producing step 1',
      'producing step 2',
    ], $engine_three->manufacture());
  }
}