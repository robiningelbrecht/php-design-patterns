<?php


namespace App\Pattern\Creational;

use App\Pattern\Creational\AbstractFactory\BmwVehicleFactory;
use App\Pattern\Creational\AbstractFactory\MercedesVehicleFactory;
use App\Pattern\Creational\AbstractFactory\VehicleFactoryInterface;
use App\Pattern\Creational\Builder\BasicTruckBuilder;
use App\Pattern\Creational\Builder\HighEndCarBuilder;
use App\Pattern\Creational\FactoryMethod\CarWithFactoryMethod;
use App\Pattern\Creational\Singleton\VehicleLogger;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Truck;
use Money\Money;

/**
 * Class CreationalPatternsController.
 *
 * @package App\Pattern\Creational
 */
class CreationalPatternsController {

  /**
   * Demonstrates how to use factory method pattern.
   */
  public function exampleFactoryMethod() {
    $price = Money::EUR(2000000);

    // Create instance of volkswagen truck by using "new".
    $truck_bmw = new Truck(Brand::VOLKSWAGEN(), $price);

    // Create instances of car by using a factory method.
    $car_bmw = CarWithFactoryMethod::bmw($price);
    $car_volkswagen = CarWithFactoryMethod::volkswagen($price);
    $car_audi = CarWithFactoryMethod::audi($price);
  }

  /**
   * Demonstrates how to use abstract factory pattern.
   */
  public function exampleAbstractFactory() {
    $price = Money::EUR(2000000);

    // Start engines of BMW's.
    $bmw_factory = new BmwVehicleFactory();
    $bmw_factory->createCar($price)->startEngine();
    $bmw_factory->createTruck($price)->startEngine();

    // Start engines of Mercedes'.
    $mercedes_factory = new MercedesVehicleFactory();
    $mercedes_factory->createCar($price)->startEngine();
    $mercedes_factory->createTruck($price)->startEngine();
  }

  /**
   * Demonstrates how to use builder pattern.
   */
  public function exampleBuilder() {
    $high_end_car = (new HighEndCarBuilder(Brand::BMW(), Money::EUR(100000)))
      ->addAudioSystem()
      ->addSeatCovers()
      ->getVehicle();
    $basic_truck = (new BasicTruckBuilder(Brand::VOLKSWAGEN(), Money::EUR(100000)))
      ->addAudioSystem()
      ->addSeatCovers()
      ->getVehicle();
  }

  /**
   * Demonstrates how to use singleton pattern.
   *
   * @throws \Exception
   */
  public function exampleSingleton() {
    VehicleLogger::log('Log a message');

    if (VehicleLogger::getInstance() !== VehicleLogger::getInstance()) {
      throw new \Exception('Loggers are different, no valid singleton');
    }
  }

}