<?php


namespace App\Pattern\Behavioral\Observer;

/**
 * Class MaintenanceCompletedNotification.
 *
 * @package App\Pattern\Behavioral\Observer
 */
class MaintenanceCompletedNotification implements \SplObserver {

  /**
   * @var string
   */
  protected string $ownerCellphoneNumber;

  /**
   * MaintenanceCompletedNotification constructor.
   * @param string $cellphone_number
   */
  public function __construct(string $cellphone_number) {
    $this->ownerCellphoneNumber = $cellphone_number;
  }

  /**
   * {@inheritdoc}
   */
  public function update(\SplSubject $subject, string $event = NULL, $data = NULL): void {
    // Send text message to owner that maintenance is completed.
    print 'Sending text message to ' . $this->ownerCellphoneNumber;
  }
}