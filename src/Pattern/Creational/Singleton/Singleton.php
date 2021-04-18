<?php


namespace App\Pattern\Creational\Singleton;


class Singleton {


  private static array $instances = [];

  /**
   * Singleton constructor.
   */
  protected function __construct() {

  }

  /**
   * @return \App\Pattern\Creational\Singleton\Singleton
   */
  public static function getInstance(): Singleton {
    $subclass = static::class;
    if (!isset(self::$instances[$subclass])) {
      self::$instances[$subclass] = new static();
    }
    return self::$instances[$subclass];
  }
}