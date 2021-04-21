<?php


namespace App\Pattern\Structural\Adapter;

use App\Vehicle\VehicleInterface;

/**
 * Class TeslaMaintenanceAdapter.
 *
 * @package App\Pattern\Structural\Adapter
 */
class TeslaMaintenanceAdapter implements CarMaintenanceInterface {

  /**
   * @var \App\Pattern\Structural\Adapter\TeslaMaintenance
   */
  protected TeslaMaintenance $teslaMaintenance;

  /**
   * TeslaMaintenanceAdapter constructor.
   * @param \App\Pattern\Structural\Adapter\TeslaMaintenance $maintenance
   */
  public function __construct(TeslaMaintenance $maintenance) {
    $this->teslaMaintenance = $maintenance;
  }

  /**
   * {@inheritdoc}
   */
  public function hasGoodBrakes(): bool {
    return $this->teslaMaintenance->hasGoodBrakes() && $this->teslaMaintenance->brakeSoftwareIsStillInPlace();
  }

  /**
   * {@inheritdoc}
   */
  public function hasSufficientEngineCoolant(): bool {
    // Electrical car doesn't has this.
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function changeEngineOil(): void {
    // Electrical car doesn't need this.
  }

  /**
   * {@inheritdoc}
   */
  public function checkTirePressure(): void {
    $this->teslaMaintenance->checkTirePressure();
  }

  /**
   * {@inheritdoc}
   */
  public function checkAndChangeSparkPlugs(): void {
    // Electrical car doesn't need this.
  }


}