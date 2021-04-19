<?php


namespace App\Vehicle;

/**
 * Class VehiclePart.
 *
 * @package App\Vehicle
 */
class VehiclePart {

  /**
   * @var string
   */
  protected string $description;

  /**
   * VehicleDefaultPart constructor.
   * @param string $description
   */
  public function __construct(string $description) {
    $this->description = $description;
  }

}