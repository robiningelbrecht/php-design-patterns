<?php


namespace App\Tests\Pattern\Behavioral;

use App\Pattern\Behavioral\ChainOfResponsibility\AssemblyLine;
use App\Pattern\Behavioral\ChainOfResponsibility\BodyWorkshop;
use App\Pattern\Behavioral\ChainOfResponsibility\Car;
use App\Pattern\Behavioral\ChainOfResponsibility\ChassisWorkshop;
use App\Pattern\Behavioral\ChainOfResponsibility\EngineWorkshop;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class ChainOfResponsibilityTest.
 *
 * @package App\Tests\Pattern\Behavioral
 */
class ChainOfResponsibilityTest extends TestCase {

  /**
   * Test chain of responsibility pattern
   */
  public function testPattern(): void {
    $car = new Car(Brand::BMW(), Money::EUR(200));

    $chain = new ChassisWorkshop();
    $chain->linkWith(new EngineWorkshop())->linkWith(new BodyWorkshop());

    $assembly_line = new AssemblyLine($chain);
    $assembly_line->start($car);

    $this->assertEquals(3, $car->getWorkshopsCompleted());
  }
}