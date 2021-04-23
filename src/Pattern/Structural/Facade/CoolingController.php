<?php


namespace App\Pattern\Structural\Facade;

/**
 * Class CoolingController.
 *
 * @package App\Pattern\Structural\Facade
 */
class CoolingController {

  /**
   * @var int
   */
  protected  int $upperLimitTemperature;

  public function run(): void{
    // Do something.
  }

  public function stop(): void{
    // Do something.
  }

  /**
   * @param int $temperature
   */
  public function setTemperatureUpperLimit(int $temperature): void{
    // Do something.
    $this->upperLimitTemperature = $temperature;
  }

  /**
   * @param int $temperature
   */
  public function cool(int $temperature): void{
    // Do something.
  }

  /**
   * @return int
   */
  public function getUpperLimitTemperature(): int {
    return $this->upperLimitTemperature;
  }


}