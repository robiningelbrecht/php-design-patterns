<?php

namespace App\Pattern\Structural\Adapter;

/**
 * Interface CarMaintenanceInterface.
 *
 * @package App\Pattern\Structural\Adapter
 */
interface CarMaintenanceInterface {

  /**
   * @return bool
   */
  public function hasGoodBrakes(): bool;

  /**
   * @return bool
   */
  public function hasSufficientEngineCoolant(): bool;

  /**
   * Changes engine oil.
   */
  public function changeEngineOil(): void;

  /**
   * Checks tire pressure
   */
  public function checkTirePressure(): void;

  /**
   * Checks spark plugs.
   */
  public function checkAndChangeSparkPlugs(): void;

  /**
   * @return int
   */
  public function getChecksPerformed(): int;

}