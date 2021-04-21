<?php

namespace App\Tests\Pattern\Structural;

use App\Pattern\Structural\Composite\CarPart;
use App\Pattern\Structural\Composite\CarStructure;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositeTest.
 *
 * @package App\Tests\Pattern\Structural
 */
class CompositeTest extends TestCase {

  /**
   * Test composite pattern
   */
  public function testPattern(): void {
    $lights = (new CarStructure('Lights'))
      ->addPart(
        (new CarStructure('Front lights'))
          ->addPart(new CarPart('Headlight'))
          ->addPart(new CarPart('Fog light'))
      )->addPart(
        (new CarStructure('Rear lights'))
          ->addPart(new CarPart('Reverse light'))
          ->addPart(new CarPart('Brake light'))
          ->addPart(new CarPart('Rear reflector'))
      );

    $engine = (new CarStructure('Engine'))
      ->addPart(new CarPart('Engine block'))
      ->addPart(new CarPart('Pistons'))
      ->addPart(new CarPart('Cylinder head'));

    $car = (new CarStructure('Car'))
      ->addPart($lights)
      ->addPart($engine);

    $this->assertEquals([
      'assembled Headlight',
      'assembled Fog light',
      'assembled Front lights',
      'assembled Reverse light',
      'assembled Brake light',
      'assembled Rear reflector',
      'assembled Rear lights',
      'assembled Lights',
      'assembled Engine block',
      'assembled Pistons',
      'assembled Cylinder head',
      'assembled Engine',
      'assembled Car',
    ], explode(',', $car->assemble()));
  }
}