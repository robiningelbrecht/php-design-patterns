<?php


namespace App\Tests\Pattern\Behavioral;

use App\Pattern\Behavioral\Visitor\Body;
use App\Pattern\Behavioral\Visitor\CarWithElements;
use App\Pattern\Behavioral\Visitor\CsvExport;
use App\Pattern\Behavioral\Visitor\Engine;
use App\Pattern\Behavioral\Visitor\JsonExport;
use App\Pattern\Behavioral\Visitor\Wheel;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class VisitorTest.
 *
 * @package App\Tests\Pattern\Behavioral
 */
class VisitorTest extends TestCase {

  /**
   * Test visitor pattern
   */
  public function testPattern(): void {
    $car = new CarWithElements(Brand::TESLA(), Money::EUR(300), [
      new Wheel('front left'),
      new Wheel('front right'),
      new Wheel('back left'),
      new Wheel('back right'),
      new Body('Tesla body'),
      new Engine('Electrical Tesla engine')
    ]);

    $visitor_json = new JsonExport();

    $this->assertSame(json_encode([
      'elements' => [
        'front left',
        'front right',
        'back left',
        'back right',
        'Tesla body',
        'Electrical Tesla engine'
      ],
      'brand' => 'TESLA',
    ]), $visitor_json->visitCar($car));

    $this->assertSame('front left', $visitor_json->visitWheel(new Wheel('front left')));

    $visitor_csv = new CsvExport();
    $this->assertSame('TESLA,front left,front right,back left,back right,Tesla body,Electrical Tesla engine', $visitor_csv->visitCar($car));
    $this->assertSame('front left', $visitor_csv->visitWheel(new Wheel('front left')));

  }

}