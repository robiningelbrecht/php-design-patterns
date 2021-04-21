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
   * @var int
   */
  protected int $checksPerformed;

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
    $this->checksPerformed = 0;
  }

  /**
   * @return bool
   */
  public function hasGoodBrakes(): bool {
    // Do checks.
    $this->checksPerformed++;
    return TRUE;
  }

  /**
   * @return bool
   */
  public function brakeSoftwareIsStillInPlace(): bool {
    // Do checks.
    $this->checksPerformed++;
    return TRUE;
  }

  /**
   * Checks tire pressure.
   */
  public function checkTirePressure(): void {
    // Do checks.
    $this->checksPerformed++;
  }

  /**
   * @return int
   */
  public function getChecksPerformed(): int {
    return $this->checksPerformed;
  }


}