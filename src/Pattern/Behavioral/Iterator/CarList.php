<?php


namespace App\Pattern\Behavioral\Iterator;

use App\Vehicle\VehicleInterface;

/**
 * Class VehicleList.
 *
 * @package App\Pattern\Behavioral\Iterator
 */
class VehicleList implements \Countable, \Iterator {

  /**
   * @var \App\Vehicle\VehicleInterface[]
   */
  protected array $vehicles;

  /**
   * @var int
   */
  protected int $currentIndex;

  /**
   * VehicleList constructor.
   */
  public function __construct() {
    $this->vehicles = [];
    $this->currentIndex = 0;
  }

  /**
   * @param \App\Vehicle\VehicleInterface $vehicle
   * @return \App\Pattern\Behavioral\Iterator\VehicleList
   */
  public function add(VehicleInterface $vehicle): VehicleList {
    $this->vehicles[] = $vehicle;
    return $this;
  }

  /**
   * @param \App\Vehicle\VehicleInterface $vehicle
   * @return \App\Pattern\Behavioral\Iterator\VehicleList
   */
  public function remove(VehicleInterface $vehicle): VehicleList {
    foreach ($this->vehicles as $key => $vehicle) {
      if ($vehicle->() === $bookToRemove->getAuthorAndTitle()) {
        unset($this->vehicles[$key]);
      }
    }

    $this->vehicles = array_values($this->vehicles);
    return $this;
  }


  public function current() {
    // TODO: Implement current() method.
  }

  public function next() {
    // TODO: Implement next() method.
  }

  public function key() {
    // TODO: Implement key() method.
  }

  public function valid() {
    // TODO: Implement valid() method.
  }

  public function rewind() {
    // TODO: Implement rewind() method.
  }

  public function count() {
    // TODO: Implement count() method.
  }


}