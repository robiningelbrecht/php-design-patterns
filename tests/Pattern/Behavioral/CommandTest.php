<?php


namespace App\Tests\Pattern\Behavioral;

use App\Pattern\Behavioral\Command\CarwashQueue;
use App\Pattern\Behavioral\Command\DryCommand;
use App\Pattern\Behavioral\Command\MotorWashCommand;
use App\Pattern\Behavioral\Command\SimpleWashCommand;
use App\Pattern\Behavioral\Command\WaxCommand;
use App\Pattern\Creational\StaticCreationMethod\CarWithFactoryMethod;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandTest.
 *
 * @package App\Tests\Pattern\Behavioral
 */
class CommandTest extends TestCase {

  /**
   * Test command pattern
   */
  public function testPattern(): void {
    $car = CarWithFactoryMethod::bmw(Money::EUR(200));
    $queue = new CarwashQueue();
    $queue->addTask(new SimpleWashCommand($car));
    $queue->addTask(new DryCommand($car));
    $queue->addTask(new WaxCommand($car));

    $this->assertEquals(3, $queue->execute());

    $queue = new CarwashQueue();
    $queue->addTask(new SimpleWashCommand($car));
    $queue->addTask(new MotorWashCommand($car));
    $queue->addTask(new DryCommand($car));
    $queue->addTask(new WaxCommand($car));

    $this->assertEquals(4, $queue->execute());

    $queue = new CarwashQueue();
    $queue->addTask(new SimpleWashCommand($car));
    $queue->addTask(new MotorWashCommand($car));
    $queue->addTask(new DryCommand($car));
    $queue->addUndo(new DryCommand($car));
    $queue->addTask(new WaxCommand($car));

    $this->assertEquals(3, $queue->execute());
  }
}