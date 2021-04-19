<?php


namespace App\Pattern\Structural\Decorator;

use App\Vehicle\Enum\Brand;
use App\Vehicle\Enum\Part;
use App\Vehicle\VehicleInterface;
use Money\Money;

/**
 * Class VehicleDecorator.
 *
 * @package App\Vehicle
 */
abstract class VehicleDecorator implements VehicleInterface {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $vehicle;

  /**
   * ParkingSensor constructor.
   *
   * @param \App\Vehicle\VehicleInterface $vehicle
   */
  public function __construct(VehicleInterface $vehicle) {
    $this->vehicle = $vehicle;
  }

  /**
   * {@inheritdoc}
   */
  public function getBrand(): Brand {
    return $this->vehicle->getBrand();
  }

  /**
   * {@inheritdoc}
   */
  public function getTotalPrice(): Money {
    return $this->vehicle->getTotalPrice();
  }

  /**
   * {@inheritdoc}
   */
  public function startEngine(): array {
    return $this->vehicle->startEngine();
  }

  /**
   * {@inheritdoc}
   */
  public function stopEngine(): array {
    return $this->vehicle->startEngine();
  }

  /**
   * {@inheritdoc}
   */
  public function addPart(Part $part): VehicleInterface {
    $this->vehicle->addPart($part);
    return $this->vehicle;
  }

  /**
   * {@inheritdoc}
   */
  public function hasPart(Part $p): bool {
    return $this->vehicle->hasPart($p);
  }

}