<?php


namespace App\Pattern\Creational\Singleton;

/**
 * Class VehicleLogger.
 *
 * @package App\Pattern\Creational\Singleton
 */
class VehicleLogger extends Singleton {

  /**
   * @var resource
   */
  protected $fileHandle;

  /**
   * VehicleLogger constructor.
   */
  protected function __construct() {
    parent::__construct();
    $this->fileHandle = fopen('php://stdout', 'w');
  }

  /**
   * @param string $message
   */
  public function writeLog(string $message): void {
    $date = date('Y-m-d');
    fwrite($this->fileHandle, "$date: $message\n");
  }

  /**
   * @param string $message
   */
  public static function log(string $message): void {
    $logger = static::getInstance();
    $logger->writeLog($message);
  }
}