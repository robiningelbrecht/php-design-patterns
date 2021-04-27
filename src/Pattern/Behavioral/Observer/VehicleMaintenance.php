<?php


namespace App\Pattern\Behavioral\Observer;

use App\Vehicle\VehicleInterface;
use SplObserver;

/**
 * Class VehicleMaintenance.
 *
 * @package App\Pattern\Behavioral\Observer
 */
class VehicleMaintenance implements \SplSubject {

  const EVENT_ENGINE_CHECKED =  'vehicle_maintenance:engine_checked';
  const EVENT_BRAKES_CHECKED = 'vehicle_maintenance:brakes_checked';
  const EVENT_COMPLETED = 'vehicle_maintenance:completed';

  /**
   * @var \App\Vehicle\VehicleInterface
   */
  protected VehicleInterface $vehicle;

  /**
   * @var string[]
   */
  protected array $observers;

  /**
   * VehicleRepository constructor.
   */
  public function __construct(VehicleInterface $vehicle) {
    $this->vehicle = $vehicle;
    $this->observers['*'] = [];
  }

  /**
   * Checks engine.
   */
  public function checkEngine():void {
    // Check the engine.
    $this->notify(self::EVENT_ENGINE_CHECKED, $this->vehicle);
  }

  /**
   * Checks brakes.
   */
  public function checkBrakes() {
    // Check the brakes.
    $this->notify(self::EVENT_BRAKES_CHECKED, $this->vehicle);
  }

  /**
   * Completes maintenance.
   */
  public function complete() {
    // Complete the maintenance.
    $this->notify(self::EVENT_COMPLETED, $this->vehicle);
  }

  /**
   * {@inheritdoc}
   */
  public function attach(SplObserver $observer, string $event = '*'): void {
    if (!isset($this->observers[$event])) {
      $this->observers[$event] = [];
    }
    $this->observers[$event][] = $observer;
  }

  /**
   * {@inheritdoc}
   */
  public function detach(SplObserver $observer, string $event = '*'): void {
    foreach ($this->getEventObservers($event) as $key => $s) {
      if ($s !== $observer) {
        continue;
      }
      unset($this->observers[$event][$key]);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function notify(string $event = '*', $data = NULL): void {
    foreach ($this->getEventObservers($event) as $observer) {
      $observer->update($this, $event, $data);
    }
  }

  /**
   * @param string $event
   * @return array
   */
  protected function getEventObservers(string $event = '*'): array {
    if (!isset($this->observers[$event])) {
      $this->observers[$event] = [];
    }

    return array_merge($this->observers[$event], $this->observers["*"]);
  }


}