<?php


namespace App\Pattern\Structural\Decorator;

use App\Vehicle\VehicleInterface;

/**
 * Class VehicleOption.
 *
 * @package App\Vehicle
 */
abstract class VehicleOption implements VehicleInterface {

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

}