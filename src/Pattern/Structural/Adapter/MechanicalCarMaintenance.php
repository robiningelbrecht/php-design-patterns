<?php


namespace App\Pattern\Structural\Adapter;

use App\Vehicle\VehicleInterface;

/**
 * Class MechanicalCarMaintenance.
 *
 * @package App\Pattern\Structural\Adapter
 */
class MechanicalCarMaintenance implements CarMaintenanceInterface {

  /**
   * @var int
   */
  protected int $checksPerformed;

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $mechanicalVehicle;

  /**
   * MechanicalCarMaintenance constructor.
   *
   * @param \App\Vehicle\VehicleInterface $vehicle
   */
  public function __construct(VehicleInterface $vehicle) {
    $this->mechanicalVehicle = $vehicle;
    $this->checksPerformed = 0;
  }

  /**
   * {@inheritdoc}
   */
  public function hasGoodBrakes(): bool {
    // Do checks and return bool.
    $this->checksPerformed++;
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function hasSufficientEngineCoolant(): bool {
    // Do checks and return bool.
    $this->checksPerformed++;
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function changeEngineOil(): void {
    // Check and change the oil.
    $this->checksPerformed++;
  }

  /**
   * {@inheritdoc}
   */
  public function checkTirePressure(): void {
    // Check the tire pressure.
    $this->checksPerformed++;
  }

  /**
   * {@inheritdoc}
   */
  public function checkAndChangeSparkPlugs(): void {
    // Check and change spark plugs.
    $this->checksPerformed++;
  }

  /**
   * {@inheritdoc}
   */
  public function getChecksPerformed(): int {
    return $this->checksPerformed;
  }

}