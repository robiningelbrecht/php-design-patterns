<?php


namespace App\Tests\Pattern\Behavioral;

use App\Pattern\Behavioral\Iterator\CarList;
use App\Pattern\Behavioral\Iterator\CarWithId;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class IteratorTest.
 *
 * @package App\Tests\Pattern\Behavioral
 */
class IteratorTest extends TestCase {

  public function testPatternIterator(): void {
    $list = new CarList();
    $list->add(new CarWithId(1, Brand::BMW(), Money::EUR(200)));
    $list->add(new CarWithId(2, Brand::TESLA(), Money::EUR(200)));
    $list->add(new CarWithId(3, Brand::VOLKSWAGEN(), Money::EUR(200)));

    $cars = [];

    foreach ($list as $car) {
      $cars[] = $car->getBrand()->value;
    }

    $this->assertSame(
      [
        'BMW',
        'TESLA',
        'VOLKSWAGEN',
      ],
      $cars
    );
  }

  public function testPatternIteratorRemove(): void {
    $car_one = new CarWithId(1, Brand::BMW(), Money::EUR(200));
    $car_two = new CarWithId(2, Brand::TESLA(), Money::EUR(200));
    $car_three = new CarWithId(3, Brand::VOLKSWAGEN(), Money::EUR(200));

    $list = new CarList();
    $list->add($car_one);
    $list->add($car_two);
    $list->add($car_three);
    $list->remove($car_two);

    $cars = [];

    foreach ($list as $car) {
      $cars[] = $car->getBrand()->value;
    }

    $this->assertSame(
      [
        'BMW',
        'VOLKSWAGEN',
      ],
      $cars
    );
  }

  public function testPatternIteratorCount(): void {
    $list = new CarList();
    $list->add(new CarWithId(1, Brand::BMW(), Money::EUR(200)));
    $list->add(new CarWithId(2, Brand::TESLA(), Money::EUR(200)));
    $list->add(new CarWithId(3, Brand::VOLKSWAGEN(), Money::EUR(200)));

    $this->assertCount(3, $list);
  }
}