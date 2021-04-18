<?php


namespace App\Pattern\Creational\Builder;

use App\Vehicle\VehicleInterface;

/**
 * Interface VehicleBuilderInterface.
 *
 * @package App\Pattern\Creational\Builder
 */
interface VehicleBuilderInterface {

  /**
   * @return \App\Pattern\Creational\Builder\VehicleBuilderInterface
   */
  public function addAudioSystem(): VehicleBuilderInterface;

  /**
   * @return \App\Pattern\Creational\Builder\VehicleBuilderInterface
   */
  public function addSeatCovers(): VehicleBuilderInterface;

  /**
   * @return \App\Vehicle\VehicleInterface
   */
  public function getVehicle() : VehicleInterface;
}