<?php


namespace App\Pattern\Structural\Adapter;

use App\Vehicle\VehicleInterface;

/**
 * Class TeslaMaintenance.
 *
 * @package App\Pattern\Structural\Adapter
 */
class TeslaMaintenance {

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $tesla;

  /**
   * MechanicalCarMaintenance constructor.
   *
   * @param \App\Vehicle\VehicleInterface $tesla
   */
  public function __construct(VehicleInterface $tesla) {
    $this->tesla = $tesla;
  }

  /**
   * @return bool
   */
  public function hasGoodBrakes(): bool {
    // Do checks.
    return TRUE;
  }

  /**
   * @return bool
   */
  public function brakeSoftwareIsStillInPlace(): bool {
    // Do checks.
    return TRUE;
  }

  /**
   * Checks tire pressure.
   */
  public function checkTirePressure(): void {
    // Do checks.
  }


}