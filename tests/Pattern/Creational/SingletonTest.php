<?php


namespace App\Tests\Pattern\Creational;

use App\Pattern\Creational\Singleton\VehicleLogger;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonTest.
 *
 * @package App\Tests\Pattern\Creational
 */
class SingletonTest extends TestCase {

  /**
   * Test singleton pattern
   */
  public function testPattern(): void {
    $this->assertEquals(VehicleLogger::getInstance(), VehicleLogger::getInstance());
  }

}