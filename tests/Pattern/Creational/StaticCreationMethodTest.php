<?php


namespace App\Tests\Pattern\Creational;

use App\Pattern\Creational\StaticCreationMethod\CarWithFactoryMethod;
use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class StaticCreationMethodTest.
 *
 * @package App\Tests\Pattern\Creational
 */
class StaticCreationMethodTest extends TestCase {

  /**
   * Test static creation method "pattern"
   */
  public function testPattern(): void {
    $price = Money::EUR(2000000);

    // Create instances of car by using a factory method.
    $car_bmw = CarWithFactoryMethod::bmw($price);
    $this->assertInstanceOf(Car::class, $car_bmw);
    $this->assertEquals(Brand::BMW(), $car_bmw->getBrand());

    $car_volkswagen = CarWithFactoryMethod::volkswagen($price);
    $this->assertEquals(Brand::VOLKSWAGEN(), $car_volkswagen->getBrand());

    $car_audi = CarWithFactoryMethod::audi($price);
    $this->assertEquals(Brand::AUDI(), $car_audi->getBrand());
  }
}