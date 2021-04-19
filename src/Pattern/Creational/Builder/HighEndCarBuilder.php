<?php


namespace App\Pattern\Creational\Builder;

use App\Vehicle\Car;
use App\Vehicle\Enum\Brand;
use App\Vehicle\Enum\Part;
use App\Vehicle\VehicleInterface;
use Money\Money;

/**
 * Class HighEndCarBuilder.
 *
 * @package App\Pattern\Creational\Builder
 */
class HighEndCarBuilder implements VehicleBuilderInterface {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $vehicle;

  /**
   * HighEndCarBuilder constructor.
   * @param \App\Vehicle\Enum\Brand $brand
   * @param \Money\Money $price
   */
  public function __construct(Brand $brand, Money $price) {
    $this->vehicle = new Car($brand, $price);
  }

  /**
   * {@inheritdoc}
   */
  public function addAudioSystem(): VehicleBuilderInterface {
    $this->vehicle->addPart(Part::BOSE_AUDIO_SYSTEM());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function addSeatCovers(): VehicleBuilderInterface {
    $this->vehicle->addPart(Part::LEATHER_SEAT_COVERS());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getVehicle(): VehicleInterface {
    return $this->vehicle;
  }

}