<?php


namespace App\Pattern\Structural\Decorator;

use App\Vehicle\Enum\Brand;
use App\Vehicle\VehicleInterface;
use App\Vehicle\VehiclePart;
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
  public function startEngine(): void {
    $this->vehicle->startEngine();
  }

  /**
   * {@inheritdoc}
   */
  public function stopEngine(): void {
    $this->vehicle->startEngine();
  }

  /**
   * {@inheritdoc}
   */
  public function addPart(VehiclePart $part): VehicleInterface {
    $this->vehicle->addPart($part);
    return $this->vehicle;
  }

}