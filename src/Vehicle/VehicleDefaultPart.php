<?php


namespace App\Vehicle;

/**
 * Class VehicleDefaultPart.
 *
 * @package App\Vehicle
 */
class VehicleDefaultPart {

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