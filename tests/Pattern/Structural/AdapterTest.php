<?php


namespace App\Tests\Pattern\Structural;

use App\Pattern\Creational\StaticCreationMethod\CarWithFactoryMethod;
use App\Pattern\Structural\Adapter\MechanicalCarMaintenance;
use App\Pattern\Structural\Adapter\TeslaMaintenance;
use App\Pattern\Structural\Adapter\TeslaMaintenanceAdapter;
use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest.
 *
 * @package App\Tests\Pattern\Structural
 */
class AdapterTest extends TestCase {

  /**
   * Test decorator pattern
   */
  public function testPattern(): void {
    $mechanical_car = CarWithFactoryMethod::audi(Money::EUR(200));

    $maintenance = new MechanicalCarMaintenance($mechanical_car);

    $maintenance->checkTirePressure();
    $this->assertEquals(1, $maintenance->getChecksPerformed());

    $maintenance->changeEngineOil();
    $this->assertEquals(2, $maintenance->getChecksPerformed());

    $maintenance->hasGoodBrakes();
    $maintenance->checkAndChangeSparkPlugs();
    $this->assertEquals(4, $maintenance->getChecksPerformed());

    $tesla = new Car(Brand::TESLA(), Money::EUR(1000));
    $maintenance = new TeslaMaintenanceAdapter(new TeslaMaintenance($tesla));

    $maintenance->checkTirePressure();
    $this->assertEquals(1, $maintenance->getChecksPerformed());

    $maintenance->changeEngineOil();
    $this->assertEquals(1, $maintenance->getChecksPerformed());

    $maintenance->hasGoodBrakes();
    $maintenance->checkAndChangeSparkPlugs();
    $this->assertEquals(3, $maintenance->getChecksPerformed());
  }
}