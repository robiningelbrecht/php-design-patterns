<?php


namespace App\Pattern\Behavioral\Iterator;

use App\Vehicle\VehicleInterface;

/**
 * Class CarList.
 *
 * @package App\Pattern\Behavioral\Iterator
 */
class CarList implements \Countable, \Iterator {

  /**
   * @var \App\Pattern\Behavioral\Iterator\CarWithId[]
   */
  protected array $cars;

  /**
   * @var int
   */
  protected int $currentIndex;

  /**
   * VehicleList constructor.
   */
  public function __construct() {
    $this->cars = [];
    $this->currentIndex = 0;
  }

  /**
   * @param \App\Pattern\Behavioral\Iterator\CarWithId $vehicle
   * @return \App\Pattern\Behavioral\Iterator\CarList
   */
  public function add(CarWithId $vehicle): CarList {
    $this->cars[] = $vehicle;
    return $this;
  }

  /**
   * @param \App\Pattern\Behavioral\Iterator\CarWithId $vehicle_to_remove
   * @return \App\Pattern\Behavioral\Iterator\CarList
   */
  public function remove(CarWithId $vehicle_to_remove): CarList {
    foreach ($this->cars as $key => $vehicle) {
      if ($vehicle->getId() === $vehicle_to_remove->getId()) {
        unset($this->cars[$key]);
      }
    }

    $this->cars = array_values($this->cars);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function current(): CarWithId {
    return $this->cars[$this->currentIndex];
  }

  /**
   * {@inheritdoc}
   */
  public function next(): void {
    $this->currentIndex++;
  }

  /**
   * {@inheritdoc}
   */
  public function key(): int {
    return $this->currentIndex;
  }

  /**
   * {@inheritdoc}
   */
  public function valid(): bool {
    return isset($this->cars[$this->currentIndex]);
  }

  /**
   * {@inheritdoc}
   */
  public function rewind(): void {
    $this->currentIndex = 0;
  }

  /**
   * {@inheritdoc}
   */
  public function count(): int {
    return count($this->cars);
  }

}