<?php


namespace App\Tests\Pattern\Creational;

use App\Pattern\Creational\Builder\BasicTruckBuilder;
use App\Pattern\Creational\Builder\HighEndCarBuilder;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Enum\Part;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderTest.
 *
 * @package App\Tests\Pattern\Builder
 */
class BuilderTest extends TestCase {

  /**
   * Test builder pattern
   */
  public function testPattern(): void {
    $high_end_car = (new HighEndCarBuilder(Brand::BMW(), Money::EUR(100000)))
      ->addAudioSystem()
      ->addSeatCovers()
      ->getVehicle();

    $this->assertTrue($high_end_car->hasPart(Part::LEATHER_SEAT_COVERS()));
    $this->assertTrue($high_end_car->hasPart(Part::BOSE_AUDIO_SYSTEM()));

    $high_end_car = (new HighEndCarBuilder(Brand::BMW(), Money::EUR(100000)))
      ->addAudioSystem()
      ->getVehicle();

    $this->assertFalse($high_end_car->hasPart(Part::LEATHER_SEAT_COVERS()));
    $this->assertTrue($high_end_car->hasPart(Part::BOSE_AUDIO_SYSTEM()));

    $basic_truck = (new BasicTruckBuilder(Brand::VOLKSWAGEN(), Money::EUR(100000)))
      ->addAudioSystem()
      ->addSeatCovers()
      ->getVehicle();

    $this->assertTrue($basic_truck->hasPart(Part::CHEAP_AUDIO_SYSTEM()));
    $this->assertTrue($basic_truck->hasPart(Part::FABRIC_SEAT_COVERS()));
    $this->assertFalse($basic_truck->hasPart(Part::LEATHER_SEAT_COVERS()));
    $this->assertFalse($basic_truck->hasPart(Part::BOSE_AUDIO_SYSTEM()));
  }

}