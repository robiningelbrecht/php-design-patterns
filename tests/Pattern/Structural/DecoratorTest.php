<?php


namespace App\Tests\Pattern\Structural;

use App\Pattern\Structural\Decorator\DigitalKey;
use App\Pattern\Structural\Decorator\LaneAssist;
use App\Pattern\Structural\Decorator\ParkingSensor;
use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorTest.
 * s
 * @package App\Tests\Pattern\Structural
 */
class DecoratorTest extends TestCase {

  /**
   * Test decorator pattern
   */
  public function testPattern(): void {
    $base_car = new Car(Brand::AUDI(), Money::EUR(200));

    $car = new ParkingSensor($base_car);
    $this->assertEquals(Money::EUR(210), $car->getTotalPrice());

    $car = new LaneAssist($car);
    $this->assertEquals(Money::EUR(230), $car->getTotalPrice());

    $car = new DigitalKey($car);
    $this->assertContains('push button', $car->startEngine());
    $this->assertNotContains('put key into ignition', $car->startEngine());
  }
}