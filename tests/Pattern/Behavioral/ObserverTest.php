<?php


namespace App\Tests\Pattern\Behavioral;

use App\Pattern\Behavioral\Observer\MaintenanceCompletedNotification;
use App\Pattern\Behavioral\Observer\MaintenanceInvoice;
use App\Pattern\Behavioral\Observer\VehicleMaintenance;
use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\VehicleBase;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class ObserverTest.
 *
 * @package App\Tests\Pattern\Behavioral
 */
class ObserverTest extends TestCase {

  /**
   * Test observer pattern
   */
  public function testPattern(): void {
    $vehicle = new Car(Brand::BMW(), Money::EUR(200));
    $maintenance = new VehicleMaintenance($vehicle);

    $maintenance->attach(new MaintenanceInvoice(), '*');
    $maintenance->attach(new MaintenanceCompletedNotification('+32494123456'), VehicleMaintenance::EVENT_COMPLETED);

    $maintenance->checkBrakes();
    $maintenance->checkEngine();
    $maintenance->complete();

    $output = [
      'Adding new line to invoice: vehicle_maintenance:brakes_checked',
      'Adding new line to invoice: vehicle_maintenance:engine_checked',
      'Sending text message to +32494123456',
      'Adding new line to invoice: vehicle_maintenance:completed',
    ];

    $this->expectOutputString(implode('', $output));
  }

  /**
   * Test observer pattern
   */
  public function testPatternWithDetach(): void {
    $vehicle = new Car(Brand::BMW(), Money::EUR(200));
    $maintenance = new VehicleMaintenance($vehicle);

    $invoice = new MaintenanceInvoice();
    $maintenance->attach($invoice, '*');
    $maintenance->attach(new MaintenanceCompletedNotification('+32494123456'), VehicleMaintenance::EVENT_COMPLETED);
    $maintenance->detach($invoice);

    $maintenance->checkBrakes();
    $maintenance->checkEngine();
    $maintenance->complete();

    $this->expectOutputString('Sending text message to +32494123456');
  }

}