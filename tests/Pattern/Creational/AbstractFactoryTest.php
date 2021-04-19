<?php


namespace App\Pattern\Creational\Tests;

use App\Pattern\Creational\AbstractFactory\BmwVehicleFactory;
use App\Pattern\Creational\AbstractFactory\MercedesVehicleFactory;
use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Truck;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryTest.
 * @package App\Pattern\Creational\AbstractFactory\Tests
 */
class AbstractFactoryTest extends TestCase {

  /**
   * Test abstract factory
   */
  public function testBrandFactories(): void {
    $price = Money::EUR(2000000);

    // BMW factory.
    $bmw_factory = new BmwVehicleFactory();
    $car = $bmw_factory->createCar($price);
    $truck = $bmw_factory->createTruck($price);

    $this->assertInstanceOf(Car::class, $car);
    $this->assertInstanceOf(Truck::class, $truck);

    $this->assertSame($car->getBrand()->label, Brand::BMW()->label);
    $this->assertSame($truck->getBrand()->label, Brand::BMW()->label);

    $this->assertContains('car (BMW) engine started', $car->startEngine());
    $this->assertContains('truck (BMW) engine started', $truck->startEngine());

    // Mercedes factory.
    $mercedes_factory = new MercedesVehicleFactory();
    $car = $mercedes_factory->createCar($price);

    $this->assertSame($car->getBrand()->label, Brand::MERCEDES()->label);
  }

}